<div class="container">
    <h2>Tambah Mata Kuliah</h2>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        {{-- Kode / ID Mata Kuliah --}}
        <div class="mb-3">
            <label for="kode_mk" class="form-label">
                ID / Kode Mata Kuliah
            </label>

            <input
                type="text"
                name="kode_mk"
                id="kode_mk"
                class="form-control @error('kode_mk') is-invalid @enderror"
                value="{{ old('kode_mk') }}"
                placeholder="Contoh: MK001"
            >

            @error('kode_mk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- Nama Mata Kuliah --}}
        <div class="mb-3">
            <label for="nama_mk" class="form-label">
                Nama Mata Kuliah
            </label>

            <input
                type="text"
                name="nama_mk"
                id="nama_mk"
                class="form-control @error('nama_mk') is-invalid @enderror"
                value="{{ old('nama_mk') }}"
                placeholder="Contoh: Pemrograman Web"
            >

            @error('nama_mk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- SKS --}}
        <div class="mb-3">
            <label for="sks" class="form-label">
                SKS
            </label>

            <select
                name="sks"
                id="sks"
                class="form-select @error('sks') is-invalid @enderror"
            >
                <option value="">-- Pilih SKS --</option>

                <option value="1" {{ old('sks') == 1 ? 'selected' : '' }}>
                    1 SKS
                </option>

                <option value="2" {{ old('sks') == 2 ? 'selected' : '' }}>
                    2 SKS
                </option>

                <option value="3" {{ old('sks') == 3 ? 'selected' : '' }}>
                    3 SKS
                </option>

                <option value="4" {{ old('sks') == 4 ? 'selected' : '' }}>
                    4 SKS
                </option>

            </select>

            @error('sks')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        {{-- Semester --}}
        <div class="mb-3">
            <label for="semester" class="form-label">
                Semester
            </label>

            <select
                name="semester"
                id="semester"
                class="form-select @error('semester') is-invalid @enderror"
            >
                <option value="">-- Pilih Semester --</option>

                @for ($i = 1; $i <= 8; $i++)
                    <option
                        value="{{ $i }}"
                        {{ old('semester') == $i ? 'selected' : '' }}
                    >
                        Semester {{ $i }}
                    </option>
                @endfor

            </select>

            @error('semester')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Dosen --}}
        <div class="mb-3">
            <label for="id_dosen" class="form-label">
                Dosen Pengajar
            </label>

            <select
                name="id_dosen"
                id="id_dosen"
                class="form-select @error('id_dosen') is-invalid @enderror"
            >
                <option value="">-- Pilih Dosen --</option>

                @foreach ($data as $dosen)
                    <option
                        value="{{ $dosen->user->id }}"
                        {{ old('id_dosen') == $dosen->id ? 'selected' : '' }}
                    >
                        {{ $dosen->user->name }}
                    </option>
                @endforeach
            </select>

            @error('id_dosen')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('matakuliah') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>

