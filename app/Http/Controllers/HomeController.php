<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Sertifikat;
use App\Models\Jadwal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    
     public function index()
     {
         // Ambil semua data dari masing-masing model
         $peserta = Peserta::all();
         $sertifikat = Sertifikat::all();
         $jadwal = Jadwal::all();
 
         // Kirim data ke view admin.dashboard
         return view('home', compact('peserta', 'sertifikat', 'jadwal'));
     }
    }
    
