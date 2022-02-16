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
