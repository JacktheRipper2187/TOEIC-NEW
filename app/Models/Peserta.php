<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta'; // pastikan sesuai nama tabel
    protected $fillable = [
    'nama_lengkap',
    'nim_nik',
    'email',
    'alamat_asal',
    'alamat_sekarang',
    'kampus',
    'jurusan',
    'program_studi',
    'foto_formal',
    'upload_ktp',
    'upload_ktm',
];

}