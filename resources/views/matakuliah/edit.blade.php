@extends('layouts.app')

@section('judul', 'Daftar matakuliah')

@section('konten')
<h1>Form edit data</h1>

<form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="kode_mk">Kode Mata Kuliah:</label>
        <input type="text" id="kode_mk" name="kode_mk" value="{{ old('kode_mk', $matakuliah->kode_mk) }}" required>
    </div>
    
    <div>
        <label for="nama_mk">Nama Mata Kuliah:</label>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $matakuliah->nama_mk) }}" required>
    </div>
    
    <div>
        <label for="sks">Jumlah SKS:</label>
        <input type="number" id="sks" name="sks" value="{{ old('sks', $matakuliah->sks) }}" min="1" max="6" required>
    </div>
    
    <div>
        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" value="{{ old('semester', $matakuliah->semester) }}" min="1" max="8" required>
    </div>
    
    <div>
        <label for="id_dosen">Dosen Pengampu:</label>
        <select id="id_dosen" name="id_dosen" required>
            <option value="">-- Pilih Dosen --</option>
            @foreach($dosens as $dosen)
            <option value="{{ $dosen->id }}" {{ old('id_dosen', $matakuliah->id_dosen) == $dosen->id ? 'selected' : '' }}>
                {{ $dosen->name }}
            </option>
            @endforeach
        </select>
    </div>
    
    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
            Batal
    </a>
</form>
@endsection