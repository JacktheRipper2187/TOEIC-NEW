<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat'; // pastikan nama tabel sesuai
    protected $fillable = [
        'peserta_id',
        'nomor_sertifikat',
        'tanggal_sertifikat',
    ];
}
