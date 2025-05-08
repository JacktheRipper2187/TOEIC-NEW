<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nim_nik');
            $table->string('email');
            $table->text('alamat_asal');
            $table->text('alamat_sekarang');
            $table->string('kampus');
            $table->string('jurusan');
            $table->string('program_studi');
            $table->string('foto_formal')->nullable(); // path foto
            $table->string('upload_ktp')->nullable();  // path KTP
            $table->string('upload_ktm')->nullable();  // path KTM
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};

