<table class="table table-striped table-sm ">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Lieu</th>
            @canany(['lieu-edit', 'lieu-delete'])
                <th class="text-right pr-4">Actions</th>
            @endcan
        </tr>
    </thead>
    <tbody>
        @foreach ($listLieus as $lieu)
            <tr>
                <td class="text-center" id="id"><span class="badge badge-success">{{ $lieu->id }}</span>
                </td>
                <td class="text-center" id="name">{{ $lieu->lieu }}</td>
                @canany(['lieu-edit', 'lieu-delete'])
                    <td class="text-right">
                        @can('lieu-edit')
                            <div class="d-inline p-2">
                                <button class="btn btn-primary btn-sm btnAction" onclick="openEditModale(this)">
                                    <i class="fa fa-edit">
                                    </i>
                                </button>
                            </div>
                        @endcan
                        @can('lieu-delete')
                            @if ($lieu->id != 1)
                                <div class="d-inline p-2">
                                    <button class="btn btn-danger btn-sm btnAction" onclick="remove(this)">
                                        <i class="fa fa-trash" aria-hidden="true">
                                        </i></button>
                                </div>
                            @endif
                        @endcan
                    </td>
                @endcan
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center mt-2">
    {!! $listLieus->links('pagination::bootstrap-4') !!}
</div>
