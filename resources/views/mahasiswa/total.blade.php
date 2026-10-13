<table border="1" cellpadding="8">
    <tr>
        <th>Prodi</th>
        <th>Jumlah mahasiswa</th>
    </tr>
    @foreach ($data as $jml)
    <tr>
        <td>{{ $jml->prodi }}</td>
        <td>{{ $jml->jumlah }}</td>
    </tr>
    @endforeach
</table>