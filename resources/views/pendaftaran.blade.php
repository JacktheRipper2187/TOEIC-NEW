<!-- Styles -->
<link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<div class="card shadow mb-4">
    <div class="card-body p-4">
        <h3 class="card-title fw-bold text-success mb-3">Pendaftaran Peserta</h3>
        <form enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-md-3 col-form-label">Nama Lengkap</label>
                <div class="col-md-9">
                    <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nim" class="col-md-3 col-form-label">NIM/NIK</label>
                <div class="col-md-9">
                    <input type="text" id="nim" class="form-control" placeholder="Masukkan NIM/NIK Anda">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                    <input type="email" id="email" class="form-control" placeholder="Masukkan email Anda">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamatAsal" class="col-md-3 col-form-label">Alamat Asal</label>
                <div class="col-md-9">
                    <input type="text" id="alamatAsal" class="form-control" placeholder="Masukkan Alamat Asal Anda">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamatSekarang" class="col-md-3 col-form-label">Alamat Sekarang</label>
                <div class="col-md-9">
                    <input type="text" id="alamatSekarang" class="form-control" placeholder="Masukkan Alamat Sekarang Anda">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kampus" class="col-md-3 col-form-label">Kampus</label>
                <div class="col-md-9">
                    <select id="kampus" class="form-select" onchange="updateJurusan()">
                        <option selected>Pilih Kampus</option>
                        <option value="utama">Polnema Kampus Utama</option>
                        <option value="kediri">Polinema PSDKU Kediri</option>
                        <option value="pamekasan">Polinema PSDKU Pamekasan</option>
                        <option value="lumajang">Polinema PSDKU Lumajang</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-md-3 col-form-label">Jurusan</label>
                <div class="col-md-9">
                    <select id="jurusan" class="form-select" onchange="updateProgramStudi()">
                        <option selected>Pilih Jurusan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="programStudi" class="col-md-3 col-form-label">Program Studi</label>
                <div class="col-md-9">
                    <select id="programStudi" class="form-select">
                        <option selected>Pilih Program Studi</option>
                    </select>
                </div>
            </div>

            <!-- Tambahan upload file -->
            <div class="mb-3 row">
                <label for="foto" class="col-md-3 col-form-label">Foto Formal</label>
                <div class="col-md-9">
                    <input type="file" id="foto" name="foto" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ktp" class="col-md-3 col-form-label">Upload KTP</label>
                <div class="col-md-9">
                    <input type="file" id="ktp" name="ktp" class="form-control" accept="image/*,application/pdf">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ktm" class="col-md-3 col-form-label">Upload KTM</label>
                <div class="col-md-9">
                    <input type="file" id="ktm" name="ktm" class="form-control" accept="image/*,application/pdf">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Daftar</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Kembali</button>
        </form>
    </div>
</div>

<script>
    function updateJurusan() {
        const kampus = document.getElementById("kampus").value;
        const jurusanSelect = document.getElementById("jurusan");
        const programStudiSelect = document.getElementById("programStudi");

        jurusanSelect.innerHTML = '<option selected>Pilih Jurusan</option>';
        programStudiSelect.innerHTML = '<option selected>Pilih Program Studi</option>';

        let jurusanOptions = [];
        if (kampus === "utama") {
            jurusanOptions = [
                { value: "TI", label: "Teknologi Informasi" },
                { value: "TS", label: "Teknik Sipil" },
                { value: "TE", label: "Teknik Elektro" },
                { value: "TK", label: "Teknik Kimia" },
                { value: "TM", label: "Teknik Mesin" },
                { value: "AN", label: "Administrasi Niaga" },
                { value: "AK", label: "Akuntansi" }
            ];
        } else if (kampus === "kediri") {
            jurusanOptions = [
                { value: "TI", label: "Teknologi Informasi" },
                { value: "TE", label: "Teknik Mesin" },
                { value: "TM", label: "Teknik Mesin" },
                { value: "AK", label: "Akuntansi" }
            ];
        } else if (kampus === "pamekasan") {
            jurusanOptions = [
                { value: "MI", label: "Manajemen Informatika" },
                { value: "TM", label: "Teknik Mesin" },
                { value: "AK", label: "Akuntansi Manajemen" }
            ];
        } else if (kampus === "lumajang") {
            jurusanOptions = [
                { value: "TI", label: "Teknologi Informasi" },
                { value: "TM", label: "Teknik Mesin" },
                { value: "TS", label: "Teknik Sipil" },
                { value: "AK", label: "Akuntansi" }
            ];
        }

        jurusanOptions.forEach(option => {
            const opt = document.createElement("option");
            opt.value = option.value;
            opt.text = option.label;
            jurusanSelect.appendChild(opt);
        });
    }

    function updateProgramStudi() {
        const jurusan = document.getElementById("jurusan").value;
        const programStudiSelect = document.getElementById("programStudi");

        programStudiSelect.innerHTML = '<option selected>Pilih Program Studi</option>';

        let programStudiOptions = [];
        if (jurusan === "TI") {
            programStudiOptions = [{ value: "TI", label: "Teknologi Informasi" }];
        } else if (jurusan === "TE") {
            programStudiOptions = [{ value: "TE", label: "Teknik Elektro" }];
        } else if (jurusan === "TS") {
            programStudiOptions = [{ value: "TS", label: "Teknik Sipil" }];
        } else if (jurusan === "TK") {
            programStudiOptions = [{ value: "TK", label: "Teknik Kimia" }];
        } else if (jurusan === "TM") {
            programStudiOptions = [{ value: "TM", label: "Teknik Mesin" }];
        } else if (jurusan === "AN") {
            programStudiOptions = [{ value: "AN", label: "Administrasi Niaga" }];
        } else if (jurusan === "AK") {
            programStudiOptions = [{ value: "AK", label: "Akuntansi" }];
        }

        programStudiOptions.forEach(option => {
            const opt = document.createElement("option");
            opt.value = option.value;
            opt.text = option.label;
            programStudiSelect.appendChild(opt);
        });
    }
</script>
