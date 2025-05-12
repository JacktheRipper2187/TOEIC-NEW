@extends('layouts.admin')

@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">Edit Peserta</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peserta.update', $peserta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                   value="{{ old('nama_lengkap', $peserta->nama_lengkap) }}" required>
        </div>

        <div class="form-group">
            <label for="nim_nik">NIM/NIK</label>
            <input type="text" name="nim_nik" id="nim_nik" class="form-control"
                   value="{{ old('nim_nik', $peserta->nim_nik) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                   value="{{ old('email', $peserta->email) }}" required>
        </div>

        <div class="form-group">
            <label for="kampus">Kampus</label>
            <select name="kampus" id="kampus" class="form-control" onchange="updateJurusan()" required>
                <option value="" disabled selected>Pilih Kampus</option>
                <option value="utama" {{ old('kampus', $peserta->kampus) == 'utama' ? 'selected' : '' }}>Kampus Utama</option>
                <option value="kediri" {{ old('kampus', $peserta->kampus) == 'kediri' ? 'selected' : '' }}>PSDKU Kediri</option>
                <option value="pamekasan" {{ old('kampus', $peserta->kampus) == 'pamekasan' ? 'selected' : '' }}>PSDKU Pamekasan</option>
                <option value="lumajang" {{ old('kampus', $peserta->kampus) == 'lumajang' ? 'selected' : '' }}>PSDKU Lumajang</option>
            </select>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control" onchange="updateProgramStudi()" required>
                <option value="" disabled selected>Pilih Jurusan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="program_studi">Program Studi</label>
            <select name="program_studi" id="program_studi" class="form-control" required>
                <option value="" disabled selected>Pilih Program Studi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Batal</a>
    </form>

    <script>
        const dataJurusan = {
            "utama": [
                { value: "TE", label: "Teknik Elektro" },
                { value: "TM", label: "Teknik Mesin" },
                { value: "TS", label: "Teknik Sipil" },
                { value: "AK", label: "Akuntansi" },
                { value: "AN", label: "Administrasi Niaga" },
                { value: "TK", label: "Teknik Kimia" },
                { value: "TI", label: "Teknologi Informasi" }
            ],
            "kediri": [
                { value: "TI", label: "Teknologi Informasi" },
                { value: "TM", label: "Teknik Mesin" },
                { value: "AK", label: "Akuntansi" },
                { value: "TE", label: "Teknik Elektro" }
            ],
            "lumajang": [
                { value: "TI", label: "Teknologi Informasi" },
                { value: "TS", label: "Teknik Sipil" },
                { value: "AK", label: "Akuntansi" }
            ],
            "pamekasan": [
                { value: "TM", label: "Teknik Mesin" },
                { value: "AK", label: "Akuntansi" },
                { value: "AN", label: "Administrasi Niaga" }
            ]
        };

        const dataProgramStudi = {
            "TE": ["D-IV Teknik Elektronika","D-IV Sistem Kelistrikan",
                        "D-IV Jaringan Telekomunikasi Digital",
                        "D-III Teknik Elektronika",
                        "D-III Teknik Listrik",
                        "D-III Teknik Telekomunikasi"],
            "TM": ["D-IV Teknik Otomotif Elektronik", "D-IV Teknik Mesin Produksi dan Perawatan",
                        "D-III Teknik Mesin", "D-III Teknologi Pemeliharaan Pesawat Udara"],
            "TS": ["D-IV Manajemen Rekayasa Konstruksi", "D-IV Teknologi Rekayasa Konstruksi Jalan dan Jembatan",
                        "D-III Teknik Sipil", "D-III Teknik Konstruksi Jalan dan Jembatan", "D-III Teknologi Pertambangan"],
            "AK": ["D-IV Akuntansi Manajemen", "D-IV Keuangan", "D-III Akuntansi"],
            "AN": ["D-IV Manajemen Pemasaran", "D-IV Bahasa Inggris untuk Komunikasi Bisnis dan Profesional", 
                        "D-IV Pengelolaan Arsip dan Rekaman Informasi", "D-IV Usaha Perjalanan Wisata", "D-IV Bahasa Inggris untuk Industri Pariwisata", "D-III Administrasi Bisnis"],
            "TK": ["D-IV Teknologi Kimia Industri", "D-III Teknik Kimia"],
            "TI": ["D-IV Teknik Informatika", "D-IV Sistem Informasi Bisnis", "D-II Pengembangan Piranti Lunak Situs"]
        };

        function updateJurusan() {
            const kampus = document.getElementById("kampus").value;
            const jurusanSelect = document.getElementById("jurusan");
            const programStudiSelect = document.getElementById("program_studi");

            jurusanSelect.innerHTML = '<option value="" disabled selected>Pilih Jurusan</option>';
            programStudiSelect.innerHTML = '<option value="" disabled selected>Pilih Program Studi</option>';

            if (dataJurusan[kampus]) {
                dataJurusan[kampus].forEach(jurusan => {
                    const option = document.createElement("option");
                    option.value = jurusan.value;
                    option.textContent = jurusan.label;
                    jurusanSelect.appendChild(option);
                });
            }

            // Set selected jurusan if available
            const selectedJurusan = "{{ old('jurusan', $peserta->jurusan) }}";
            if (selectedJurusan) {
                jurusanSelect.value = selectedJurusan;
                updateProgramStudi();
            }
        }

        function updateProgramStudi() {
            const jurusan = document.getElementById("jurusan").value;
            const programStudiSelect = document.getElementById("program_studi");

            programStudiSelect.innerHTML = '<option value="" disabled selected>Pilih Program Studi</option>';

            if (dataProgramStudi[jurusan]) {
                dataProgramStudi[jurusan].forEach(prodi => {
                    const option = document.createElement("option");
                    option.value = prodi;
                    option.textContent = prodi;
                    programStudiSelect.appendChild(option);
                });
            }

            // Set selected program studi if available
            const selectedProdi = "{{ old('program_studi', $peserta->program_studi) }}";
            if (selectedProdi) {
                programStudiSelect.value = selectedProdi;
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const selectedKampus = "{{ old('kampus', $peserta->kampus) }}";
            if (selectedKampus) {
                document.getElementById("kampus").value = selectedKampus;
                updateJurusan();
            }
        });
    </script>
@endsection
