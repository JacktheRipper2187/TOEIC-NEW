<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function index(Request $request)
    {
        $query = Peserta::query();

        // Kalau ada keyword pencarian
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('nama', 'like', "%$keyword%")
                  ->orWhere('email', 'like', "%$keyword%");
            });
        }

        // Ambil hasil query pakai pagination, misal 5 data per halaman
        $peserta = $query->paginate(5);

        // Biar paginationnya tetap ingat keyword pencarian saat pindah halaman
        $peserta->appends($request->all());

        return view('peserta.index', compact('peserta'));
    }
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nim_nik' => 'required|string|max:50',
            'email' => 'required|email|unique:peserta,email',
            'alamat_asal' => 'nullable|string',
            'alamat_sekarang' => 'nullable|string',
            'kampus' => 'nullable|string|max:100',
            'jurusan' => 'nullable|string|max:100',
            'program_studi' => 'nullable|string|max:100',
            'foto_formal' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
            'upload_ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'upload_ktm' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
    
        // Proses upload file
        $fotoFormal = null;
        $uploadKtp = null;
        $uploadKtm = null;
    
        if ($request->hasFile('foto_formal')) {
            $fotoFormal = $request->file('foto_formal')->store('foto_formal', 'public');
        }
        if ($request->hasFile('upload_ktp')) {
            $uploadKtp = $request->file('upload_ktp')->store('upload_ktp', 'public');
        }
        if ($request->hasFile('upload_ktm')) {
            $uploadKtm = $request->file('upload_ktm')->store('upload_ktm', 'public');
        }
    
        // Simpan data ke database
        Peserta::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nim_nik' => $request->nim_nik,
            'email' => $request->email,
            'alamat_asal' => $request->alamat_asal,
            'alamat_sekarang' => $request->alamat_sekarang,
            'kampus' => $request->kampus,
            'jurusan' => $request->jurusan,
            'program_studi' => $request->program_studi,
            'foto_formal' => $fotoFormal,
            'upload_ktp' => $uploadKtp,
            'upload_ktm' => $uploadKtm,
        ]);
    
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil ditambahkan!');
    }
    

}
