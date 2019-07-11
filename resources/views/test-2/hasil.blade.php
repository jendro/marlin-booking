Ongkos Kirim
<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Service</th>
            <th>Description</th>
            <th class="text-right">Ongkis Kirim</th>
            <th>ETD</th>
        </tr>
    </thead>
    <tbody>
        @php($no=1)
        @foreach($data_r as $data)
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td>{{ $data->service }}</td>
                <td>{{ $data->description }}</td>
                <td class="text-right">Rp. {{ number_format($data->cost[0]->value,0,'','.') }}</td>
                <td>{{ $data->cost[0]->etd }} Hari</td>
            </tr>
        @endforeach
    </tbody>

</table>