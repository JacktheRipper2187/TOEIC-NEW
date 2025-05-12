@extends('layouts.admin')

@section('main-content')

    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" onclick="tampilkanData('peserta')">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Peserta Ujian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Peserta::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" onclick="tampilkanData('sertifikat')">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Sertifikat Peserta</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Sertifikat::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-certificate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2" onclick="tampilkanData('informasi')">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Informasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Jadwal::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="konten-data">
        <h2 id="judul-data" class="h4 mb-3 text-gray-800">Daftar Peserta Ujian</h2>
        <div id="data-peserta">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Peserta</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kampus</th>
                        <th>Jurusan</th>
                        <th>Program Studi</th>
                        <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($peserta as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama_lengkap }}</td>
                            <td>{{ $p->nim_nik }}</td>
                            <td>{{ $p->kampus }}</td>
                            <td>{{ $p->jurusan }}</td>
                            <td>{{ $p->program_studi }}</td>
                            <td>
                                <!-- Tombol Aksi -->
                                <a href="{{ route('peserta.show', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('peserta.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('peserta.destroy', $p->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <div id="data-sertifikat" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Sertifikat</th>
                        <th>ID Peserta</th>
                        <th>Nomor Sertifikat</th>
                        <th>Tanggal Terbit</th>
                        <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($sertifikat as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->peserta_id }}</td>
                            <td>{{ $s->nomor_sertifikat }}</td>
                            <td>{{ $s->tanggal_terbit }}</td>
                            <td>
                                <!-- Tombol Aksi -->
                                <a href="{{ route('sertifikat.show', $s->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('sertifikat.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('sertifikat.destroy', $s->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <div id="data-informasi" style="display: none;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Informasi</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $j)
                        <tr>
                            <td>{{ $j->id }}</td>
                            <td>{{ $j->judul }}</td>
                            <td>{{ $j->deskripsi }}</td>
                            <td>{{ $j->tanggal }}</td>
                            <td>
                                <!-- Tombol Aksi -->
                                <a href="{{ route('jadwal.show', $j->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('jadwal.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('jadwal.destroy', $j->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function tampilkanData(data) {
            // Sembunyikan semua bagian data
            document.getElementById('data-peserta').style.display = 'none';
            document.getElementById('data-sertifikat').style.display = 'none';
            document.getElementById('data-informasi').style.display = 'none';

            // Tampilkan bagian data yang sesuai dengan yang diklik
            if (data === 'peserta') {
                document.getElementById('data-peserta').style.display = 'block';
                document.getElementById('judul-data').innerText = 'Daftar Peserta Ujian';
            } else if (data === 'sertifikat') {
                document.getElementById('data-sertifikat').style.display = 'block';
                document.getElementById('judul-data').innerText = 'Daftar Sertifikat Peserta';
            } else if (data === 'informasi') {
                document.getElementById('data-informasi').style.display = 'block';
                document.getElementById('judul-data').innerText = 'Data Informasi';
            }
        }
    </script>

@endsection