@extends('layouts.app')

@section('judul', 'Daftar matakuliah')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>
        <table border="1" cellpadding="8">
            <tr>
                <th>Nomor</th>
                <th>Kode Mata Kuliah</th>
                <th>Dosen Pengampu</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            @forelse ($data as $mk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->user->name }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td @if ($mk->sks > 3) style="font-weight: bold" @endif>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td><a href="{{ route('matakuliah.show', $mk->id)}}">Detail</a></td>
                <td><a href="{{ route('matakuliah.edit', $mk->id)}}">Edit</a></td>
                <td>
                    <form action="{{ route('matakuliah.destroy', $mk->id)}}" method="POST">
                        @method('delete')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align:center">Daftar Kosong!</td>   
            </tr>   
            @endforelse
    </table>

    <a href="{{ route('matakuliah.create') }}">Tambahkan</a>
    <a href="{{ route('mahasiswa') }}">Liat daftar mahasiswa</a>
@endsection
