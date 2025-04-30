<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta'; // pastikan sesuai nama tabel
    protected $fillable = ['nama', 'nim', 'kampus', 'jurusan', 'program_studi'];
}