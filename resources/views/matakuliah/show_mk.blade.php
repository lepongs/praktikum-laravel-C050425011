@extends('layouts.app')

@section('judul', 'Detail matakuliah')

@section('konten')
<p>Nama Matakuliah : {{ $matakuliah->nama_mk }}</p>
<p>Kode Matakuliah : {{ $matakuliah->kode_mk }}</p>
<p>SKS : {{ $matakuliah->sks }}</p>
<p>Semester : {{ $matakuliah->semester }}</p>

<h3>Daftar Mahasiswa yang mengambil matakuliah</h3>
<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
    </tr>
    @forelse ( $matakuliah->nilai_mk as $mhs)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mhs->mahasiswa->nama }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="2" style="text-align: center">NO DATA!</td>
    </tr>
    @endforelse
</table>
@endsection
