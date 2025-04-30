@extends('layouts.admin')

@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">Data Peserta Ujian</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Peserta</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kampus</th>
                <th>Jurusan</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peserta as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->nim }}</td>
                <td>{{ $p->kampus }}</td>
                <td>{{ $p->jurusan }}</td>
                <td>{{ $p->program_studi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
