@extends('layouts.master')
@section('content')

    <style>
        td {
            font-size: 13px;
        }
        .btnAction {
            font-size: 10px;
        }
        .div-upload {
    position: relative;
    overflow: hidden;
  }
  .input-upload {
    position: absolute;
    font-size: 10px;
    opacity: 0;
    width: 30px;
    right: 0;
    top: 0;
  }
    </style>
    <style>
        .tableFixHead          { overflow: auto; max-height: 70vh; }
        .tableFixHead thead th { position: sticky; top: 0; z-index: 1; }

        </style>
    <!----------------------------------------- modal foem ------------------------------------------------>

    <a href="javascript:void(0);" id="cadenas" onclick="cadenasLock();">
        <div class="alert alert-primary alert-sm alert-dismissible fade show py-2" role="alert"><i class="fa fa-lock" aria-hidden="true"></i> Click here To open cadenas</div>
    </a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif


        <div class="card " style=" background-color: rgb(255, 255, 255)">
            <div class="card-header d-inline ">{{ __('La liste des analyses') }}

                <select name="selectedMatrice" id="matriceFilter"
                    class="ml-3 d-inline  form-control form-control-sm col-2 float-right">
                    @foreach ($listMatrices as $matrice)
                        <option value="{{ $matrice->id }}"
                            {{ ($matrice->id == $selectedMatrice || $selectedMatrice == null || $matrice->id == session('selectedMatrice') ) ? 'selected' : '' }}>
                            {{ $matrice->name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success btn-sm float-right mr-2 py-1" type="button" onclick="analyses_export()"><i class="fa fa-download" aria-hidden="true"></i></button>
                <form action="{{url('/analyse/import')}}" method="POST" enctype="multipart/form-data" class="d-inline form-upload float-right">
                    @csrf
                    <div class="d-inline div-upload">
                      <i class="fa fa-upload btn btn-primary btn-sm px-2 mr-2" style="padding: 7px 0px; " aria-hidden="true"></i>
                      <input type="file" class="input-upload"  name="analyse_import" >
                    </div>
                </form>
                <button class="btn btn-success btn-sm float-right mr-2 py-1" type="button" onclick="refresh_table()">Actualiser  <i class="fa fa-refresh"></i></button>

        <form action="/analyses" method="POST" id="formAnalyse">
            @csrf
            @method('patch')
            <input type="hidden" name="selectedMatrice" id="hiddenselectedMatrice" value="{{ $selectedMatrice }}">
            <div class="card-body">
                <div class="table-responsive tableFixHead">
                    <table class="table table-striped table-sm ">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center text-nowrap">#</th>
                                <th class="text-center text-nowrap">Code commande</th>
                                @foreach ($columns as $column)
                                    @if ($column == 'deleted_at' || $column == 'id' || $column == 'created_at' || $column == 'updated_at' || $column == 'commande_id')
                                        @continue
                                    @endif
                                    <th class="text-center text-nowrap">{{ $column }} @if(isset($listUnites[$column])) @php echo "(".$listUnites[$column].")" @endphp @endif </th>
                                @endforeach
                                <th class="text-center text-nowrap">Export</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listData as $data)
                                <tr>
                                    <td class="text-center text-nowrap" id="id_analyse">{{ $data->id }}</td>
                                    <td class="text-center text-nowrap" id="notModifiable">{{ $data->code_commande }}</td>
                                    @foreach ($columns as $column)
                                        @if ($column == 'deleted_at' || $column == 'id' || $column == 'created_at' || $column == 'updated_at' || $column == 'commande_id')
                                            @continue
                                        @endif
                                        <td class="text-center text-nowrap" id="{{ $column }}">{{ $data->$column }}
                                        </td>
                                    @endforeach
                                    <th class="text-center text-nowrap"><a class="btn btn-success btn-sm btnAction"
                                            href="{{ url("report/") }}/{{ $data->commande_id }}">PDF</a></th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <center><button id="save" type="submit"
                        class="btn btn-success btn-sm d-lg-none mt-3 px-5">Sauvegarder</button></center>
            </div>
        </form>
        </div>

        </div>

    <div class="d-flex justify-content-center mt-2">
    </div>
    <script>
        $( document ).ready(function() {
            $("#matriceFilter").trigger('change');
        });
        var cadenas_is_open = false;
        function refresh_table(){
            $("html").preloader({ text: 'Loading'});
            $.ajax({
                url: "{{ url('/analyses/refresh') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    matrice: $("#matriceFilter").val(),
                },
                success: function(response) {
                    $.when( $(".card-body").html($(response).find(".card-body").html()) ).done(function() {
                        $.when( $("#matriceFilter").trigger('change') ).done(function() {
                            $('table').preloader('remove')
                        });
                    });
                },
            });
        }
        $(".input-upload").change(function() {
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        $(".form-upload").submit();
                    },
                    cancel: function () {
                        $.alert('Uploade Canceled!');
                        $(".input-upload").val(null)
                    },
                }
            });
        })
        $(".form-upload").submit(function( event ) {
            //event.preventDefault()
            $(this).attr('action', "{{url('/analyses/import')}}/"+$("#matriceFilter").val());
        });
        function cadenasLock() {
            cadenas_is_open = !cadenas_is_open;
            cadenas_is_open ? arrayToInputs() : InputsToArray()
        }


        function arrayToInputs() {
            $("td").each(function() {
                if (this.id == "id_analyse")
                    $(this).html(
                        "<input  style='width:100px;' class='form-control form-control-sm' name='id[]' value='" + $.trim($(
                            this).html()) + "' readonly='readonly' >");
                else if (this.id !== "notModifiable")
                    $(this).html("<input style='width:100px;' class='form-control form-control-sm' name='" + this
                        .id + "[]' value='" + $.trim($(this).html()) + "' >");
            });
            $("#cadenas").html(
                '<div class="alert alert-danger py-2" role="alert"><i class="fa fa-unlock mr-2" aria-hidden="true"></i>Cadenas ouvertes </div>'
                );
            $("#save").removeClass("d-lg-none");
        }

        function InputsToArray() {
            $("td").each(function() {
                $(this).html($(this).children("input").val());
            });
            $("#cadenas").html('<div class="alert alert-primary py-2" role="alert"><i class="fa fa-lock" aria-hidden="true"></i> Cliquez ici pour ouvrir les cadenas </div>');
            $("#save").addClass("d-lg-none");
        }
        $("#matriceFilter").change(function() {
            $("html").preloader({
                text: 'Loading'
            });
            $("#hiddenselectedMatrice").val($("#matriceFilter").val())
            $.ajax({
                url: "{{ url('/analyses') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    matrice: $("#matriceFilter").val(),
                },
                success: function(response) {
                    $(".card-body").html($(response).find(".card-body").html())
                    $('table').preloader('remove')
                },
            });
        });
        function analyses_export(){
            window.open("{{ url('/analyses/export/') }}"+"/"+$("#matriceFilter").val(),"_self")
        }
    </script>
@endsection
