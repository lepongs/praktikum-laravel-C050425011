<h1>Daftar Mata Kuliah</h1>
    <table border="1" cellpadding="8">
        <tr><th>Kode Mata Kuliah</th><th>Dosen Pengampu</th><th>Nama Mata Kuliah</th><th>SKS</th><th>Semester</th></tr>
        @foreach ($data as $mk)
        <tr>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->user->name }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>{{ $mk->semester }}</td>
        </tr>
    @endforeach
</table>

<a href="{{ route('matakuliah.add') }}">Tambahkan</a>
<a href="{{ route('mahasiswa') }}">Liat daftar mahasiswa</a>
