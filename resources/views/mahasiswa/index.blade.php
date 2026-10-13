@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Semester</th>
        </tr>
        @foreach ($data as $mhs)
        <tr>
            <td>{{ $mhs->nim ?? null}}</td>
            <td>{{ $mhs->nama ?? null}}</td>
            <td>{{ $mhs->prodi ?? null}}</td>
            <td>{{ $mhs->semester ?? null}}</td>
        </tr>
        @endforeach
    </table>
    {{ $data->links() }}

    <a href="{{ route('matakuliah.index') }}">Liat daftar matakuliah</a>
@endsection

{{-- {{ $pesan }} 
{!! $pesan !!}  --}}