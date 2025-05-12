<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UPA Bahasa Polinema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f8fa;
        }
        .card {
            border-radius: 15px;
        }
        .rounded-circle {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        .gradient-btn {
            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            color: white;
            border: none;
        }
        .gradient-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="text-center mb-4">
        <h2>About</h2>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow p-4">

                <div class="text-center">
                    <img src="{{ asset('img/Polinema-Logo.png') }}" class="rounded-circle" alt="Logo Polinema">
                    <h4 class="mt-3 fw-bold">UPA BAHASA <br> Politeknik Negeri Malang</h4>
                </div>

                <hr>

                <div>
                    <h5 class="fw-bold">TOEIC</h5>
                    <p>Unit Pelaksana Akademik Bahasa di Politeknik Negeri Malang adalah unit yang bertanggung jawab atas penyelenggaraan layanan bahasa, termasuk pelaksanaan ujian sertifikasi bahasa seperti TOEIC (Test of English for International Communication).</p>
                    <a href="https://www.instagram.com/upabahasa/" target="_blank" class="btn btn-sm mt-2 gradient-btn">
                        <i class="bi bi-instagram me-1"></i> Go to Instagram
                    </a>
                </div>

                <hr>

                <div>
                    <h5 class="fw-bold">Credits</h5>
                    <p>Laravel SB Admin 2 uses some open-source third-party libraries/packages, many thanks to the web community.</p>
                    <ul>
                        <li><a href="https://laravel.com" target="_blank">Laravel</a> - Open source framework.</li>
                        <li><a href="https://github.com/DevMarketer/LaravelEasyNav" target="_blank">LaravelEasyNav</a> - Making managing navigation in Laravel easy.</li>
                        <li><a href="https://startbootstrap.com/themes/sb-admin-2" target="_blank">SB Admin 2</a> - Thanks to Start Bootstrap.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>

</body>
</html>
