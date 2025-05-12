<!-- filepath: c:\laragon\www\TOEIC-NEW\resources\views\welcome.blade.php -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('welcome.title') }}</title>

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
        [id] {
    scroll-margin-top: 100px; /* atau sesuaikan dengan tinggi navbar kamu */
}
    </style>
</head>

<body>
<header class="bg-white shadow-sm fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light container-fluid py-3">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('img/Polinema-Logo.png') }}" alt="Logo Polinema" style="height: 50px;">
            <span class="ms-3 fw-bold text-primary fs-4">{{ __('welcome.title') }}</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/">{{ __('welcome.home') }}</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="#syarat-ketentuan">{{ __('welcome.syarat_ketentuan') }}</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="#pendaftaran">{{ __('welcome.pendaftaran') }}</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="#jadwal">{{ __('welcome.jadwal_ujian') }}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ app()->getLocale() == 'id' ? 'Indonesia' : 'English' }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('lang/id') }}">Indonesia</a></li>
                        <li><a class="dropdown-item" href="{{ url('lang/en') }}">English</a></li>
                    </ul>
                </li>  
            </ul>
        </div>
    </nav>
</header>

<div class="flex-center full-height">
    @if (Route::has('login'))
    <div class="position-absolute top-0 end-0 me-3" style="margin-top: 6rem;">
            @auth
                <a href="{{ url('/home') }}" class="text-white text-decoration-none">{{ __('welcome.home') }}</a>
            @else
                <a href="{{ route('login') }}" class="text-white text-decoration-none">{{ __('welcome.login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white ms-3 text-decoration-none">{{ __('welcome.register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <b>{{ __('welcome.title') }}</b>
        </div>
        <div class="subtitle">
            {!! __('welcome.subtitle') !!}
        </div>
    </div>
</div>

<div class="py-5" style="background-color: #ffff;">
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-7">
                <h1 class="fw-bold" style="color: #1f1f1f;">UPA Bahasa Polinema</h1>
                <p class="fw-semibold" style="color: #4e37fd;">Apa sih UPA Bahasa itu?</p>
                <p class="fw-semibold" style="color: #0c0066;">
                    UPA Bahasa Politeknik Negeri Malang merupakan penjunjang Akademik di bidang
                    pengembangan pembelajaran dan layanan kebahasaan yang mempunyai tugas melaksanakan
                    pengembangan pembelajaran, peningkatan kemampuan, dan pelayanan uji kemampuan berbahasa.
            </div>

            <!-- Logo Section -->
            <div class="col-md-5 text-center mt-4 mt-md-0">
                <img src="{{ asset('img/Polinema-Logo.png') }}" alt="Play IT Logo" style="max-width: 200px;">
                <h2 class="fw-bold mt-3" style="background: linear-gradient(to right, #4e37fd, #edebe9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">UPA Polinema</h2>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="card shadow mb-5" id="syarat-ketentuan">
        <div class="card-body p-4">
            <h2 class="card-title fw-bold text-info mb-2">{{ __('welcome.syarat_ketentuan') }}</h2>
            <h5 class="fw-bold">{{ __('welcome.persyaratan_peserta') }}</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.persyaratan_1') }}</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.persyaratan_2') }}</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.persyaratan_3') }}</li>
            </ul>
            <h5 class="fw-bold">{{ __('welcome.ketentuan_pendaftaran') }}</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.pendaftaran_1') }}</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.pendaftaran_2') }}</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.pendaftaran_3') }}</li>
            </ul>
            <h5 class="fw-bold">{{ __('welcome.ketentuan_ujian') }}</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.ujian_1') }}</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.ujian_2') }}</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ __('welcome.ujian_3') }}</li>
            </ul>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Gratis -->
            <div class="col-md-5 mb-4">
                <div class="card bg-warning text-white text-center rounded-4 shadow-lg h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h2 class="fw-bold text-primary my-3">Gratis</h2>
                        <ul class="list-unstyled small">
                            <li>Untuk Mahasiswa/i Aktif Polinema</li>
                            <li>Belum Pernah Mengikuti Test Gratis</li>
                        </ul>
                        <a href="{{ url('/pendaftaran') }}" class="btn btn-primary fw-bold mt-3">DAFTAR</a>
                    </div>
                </div>
            </div>

            <!-- Berbayar -->
            <div class="col-md-5 mb-4">
                <div class="card bg-primary text-white text-center rounded-4 shadow-lg h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h2 class="fw-bold text-warning my-3">Berbayar</h2>
                        <ul class="list-unstyled small">
                            <li>Untuk Polinema Umum</li>
                            <li>Mahasiswa/i Alumni dan Tendik</li>
                        </ul>
                        <a href="https://itc-indonesia.com/polinema-pelaksanaan-toeic-cbt-from-home-bagi-mahasiswa/" class="btn btn-warning fw-bold text-white mt-3">DAFTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="card shadow mb-4" id="jadwal">
        <div class="card-body p-4">
            <h3 class="card-title fw-bold mb-3 text-warning">{{ __('welcome.jadwal_ujian') }}</h3>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>{{ __('welcome.tanggal') }}</th>
                            <th>{{ __('welcome.waktu') }}</th>
                            <th>{{ __('welcome.jurusan') }}</th>
                            <th>{{ __('welcome.lokasi') }}</th>
                            <th>{{ __('welcome.keterangan') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Mei 2025</td>
                            <td>09:00 - 11:00</td>
                            <td>Jurusan Teknologi Informasi</td>
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

    <div class="card shadow mb-5" id="jadwal-pengambilan-sertifikat">
        <div class="card-body p-4">
            <h3 class="card-title fw-bold text-info mb-3">{{ __('welcome.jadwal_pengambilan') }}</h3>
            <ul class="list-unstyled">
                <li><i class="bi bi-calendar-event-fill text-primary me-2"></i> {{ __('welcome.tanggal_pengambilan') }}</li>
                <li><i class="bi bi-geo-alt-fill text-danger me-2"></i> {{ __('welcome.lokasi_pengambilan') }}</li>
                <li><i class="bi bi-clock-fill text-success me-2"></i> {{ __('welcome.waktu_pengambilan') }}</li>
            </ul>
            <a href="#" class="btn btn-outline-info btn-sm">{{ __('welcome.detail_pengambilan') }}</a>
        </div>
    </div>
</div>

<footer class="bg-white text-dark py-5">
    <div class="container">
        <h5 class="fw-bold mb-4" style="border-left: 4px solid #1000a1; padding-left: 10px;">Kontak</h5>
        <ul class="list-unstyled">
            <li class="mb-2">
                <a href="https://g.co/kgs/nUjJt3y" class="text-dark text-decoration-none">
                    <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                    Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                </a>
            </li>
            <li class="mb-2">
                <i class="bi bi-envelope-fill text-danger me-2"></i>
                <a href="mailto:upabahasa@polinema.ac.id" class="text-dark text-decoration-none">
                    upabahasa@polinema.ac.id
                </a>
            </li>
            <li class="mb-2">
                <i class="bi bi-whatsapp text-success me-2"></i>
                0877-8464-4193
            </li>
            <li class="mb-2">
                <i class="bi bi-clock-fill text-primary me-2"></i>
                08.00 – 15.30 WIB
            </li>
        </ul>
        <p class="mb-0 text-center text-dark">
            &copy; <span id="copyright-year"></span> Politeknik Negeri Malang
        </p>
        <script>
            document.getElementById("copyright-year").textContent = new Date().getFullYear();
        </script>
    </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>