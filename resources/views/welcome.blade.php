<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UPA Bahasa</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html, body {
            background: url("{{ asset('img/graha.png') }}") no-repeat center center fixed !important;
            background-size: cover !important;
            background-color: transparent !important;
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;
            padding-top: 70px;
        }

        .full-height {
            min-height: calc(100vh - 70px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
            z-index: 2;
        }

        .title {
            font-size: 64px;
            text-shadow: 2px 2px 5px #000;
        }

        .subtitle {
            font-size: 18px;
            text-shadow: 1px 1px 3px #000;
            margin-bottom: 20px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        .card-title {
            text-shadow: none;
        }
    </style>
</head>

<body>
<header class="bg-white shadow-sm fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light container-fluid py-3">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('img/Polinema-Logo.png') }}" alt="Logo Polinema" style="height: 50px;">
            <span class="ms-3 fw-bold text-primary fs-4">UPA Bahasa Polinema</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="#syarat-ketentuan">Syarat & Ketentuan</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="#pendaftaran">Pendaftaran</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="#jadwal">Jadwal</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Bahasa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="flex-center full-height">
    @if (Route::has('login'))
        <div class="position-absolute top-0 end-0 mt-3 me-3">
            @auth
                <a href="{{ url('/home') }}" class="text-white text-decoration-none">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-white text-decoration-none">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white ms-3 text-decoration-none">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <b>UPA BAHASA <br>Politeknik Negeri Malang</b>
        </div>
        <div class="subtitle">
            Unit Pelaksana Akademik Bahasa di Politeknik Negeri Malang adalah unit yang bertanggung jawab atas penyelenggaraan layanan bahasa,<br>
            termasuk pelaksanaan ujian sertifikasi bahasa seperti TOEIC (Test of English for International Communication).
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card shadow mb-4" id="syarat-ketentuan">
        <div class="card-body p-4">
            <h2 class="card-title fw-bold text-info mb-4">Syarat dan Ketentuan</h2>
            <h5 class="fw-bold">Persyaratan Peserta:</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Mahasiswa/alumni Polinema atau pihak lain yang diizinkan.</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Memiliki kartu identitas valid.</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Memenuhi syarat khusus jika ada.</li>
            </ul>
            <h5 class="fw-bold">Ketentuan Pendaftaran:</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Dilakukan secara online di website resmi.</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Isi data pendaftaran dengan benar dan lengkap.</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Patuhi batas waktu pendaftaran yang ditentukan.</li>
            </ul>
            <h5 class="fw-bold">Ketentuan Pelaksanaan Ujian:</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Hadir 30 menit sebelum ujian.</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Tidak boleh membawa alat komunikasi tanpa izin.</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Patuhi tata tertib ujian.</li>
            </ul>
            <a href="/" class="btn btn-outline-info btn-sm mt-3"><i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda</a>
        </div>
    </div>

    <div class="card shadow mb-4" id="jadwal">
        <div class="card-body p-4">
            <h3 class="card-title fw-bold mb-3 text-warning">Jadwal Ujian</h3>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Jenis Ujian</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Mei 2025</td>
                            <td>09:00 - 11:00</td>
                            <td>TOEIC Listening & Reading</td>
                            <td>Gedung A Lantai 2</td>
                            <td>Sesi 1</td>
                        </tr>
                        <tr>
                            <td>16 Mei 2025</td>
                            <td>10:00 - 12:00</td>
                            <td>TOEFL ITP</td>
                            <td>Gedung B Lantai 1</td>
                            <td>Sesi Pagi</td>
                        </tr>
                        <tr>
                            <td>17 Mei 2025</td>
                            <td>13:00 - 15:00</td>
                            <td>TOEIC Speaking & Writing</td>
                            <td>Gedung A Lantai 3</td>
                            <td>Sesi Sore</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4" id="pendaftaran">
        <div class="card-body p-4">
            <h3 class="card-title fw-bold text-primary mb-3">Dashboard Pendaftaran</h3>
            <p>Pilih jenis pendaftaran:</p>
            <div class="d-flex gap-3 justify-content-center">
                <a href="{{ url('/pendaftaran') }}" class="btn btn-lg btn-success">GRATIS</a> 
                <button type="button" class="btn btn-lg btn-warning" onclick="window.location.href='https://itc-indonesia.com/polinema-pelaksanaan-toeic-cbt-from-home-bagi-mahasiswa/'">BERBAYAR</button>

            </div>
        </div>
    </div>

    <div class="card shadow mb-5" id="jadwal-pengambilan-sertifikat">
        <div class="card-body p-4">
            <h3 class="card-title fw-bold text-info mb-3">Jadwal Pengambilan Sertifikat</h3>
            <ul class="list-unstyled">
                <li><i class="bi bi-calendar-event-fill text-primary me-2"></i> 22 - 26 Mei 2025</li>
                <li><i class="bi bi-geo-alt-fill text-danger me-2"></i> Kantor UPA Bahasa, Gedung Rektorat Lt. 1</li>
                <li><i class="bi bi-clock-fill text-success me-2"></i> 09:00 - 15:00 WIB</li>
            </ul>
            <a href="#" class="btn btn-outline-info btn-sm">Detail Pengambilan</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
