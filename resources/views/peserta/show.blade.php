@extends('layouts.admin')

@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">Detail Peserta</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $peserta->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $peserta->nama_lengkap }}</td>
        </tr>
        <tr>
            <th>NIM</th>
            <td>{{ $peserta->nim_nik }}</td>
        </tr>
        <tr>
            <th>Kampus</th>
            <td>{{ $peserta->kampus }}</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td>{{ $peserta->jurusan }}</td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td>{{ $peserta->program_studi }}</td>
        </tr>
    </table>

    <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
@endsection