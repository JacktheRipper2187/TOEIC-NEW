<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PesertaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('peserta')->insert([
            'nama_lengkap'    => 'Budi Santoso',
            'nim_nik'         => '1234567890',
            'email'           => 'budi@example.com',
            'alamat_asal'     => 'Jl. Merdeka No. 10, Bandung',
            'alamat_sekarang'=> 'Jl. Soekarno Hatta No. 50, Bandung',
            'kampus'          => 'Universitas A',
            'jurusan'         => 'Teknik Informatika',
            'program_studi'   => 'S1 Informatika',
            'foto_formal'     => 'uploads/foto/budi.jpg',
            'upload_ktp'      => 'uploads/ktp/budi_ktp.jpg',
            'upload_ktm'      => 'uploads/ktm/budi_ktm.jpg',
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);
    }
}
