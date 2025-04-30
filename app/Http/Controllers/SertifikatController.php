<?php

namespace App\Http\Controllers;
use App\Models\Sertifikat;


use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        $sertifikat = Sertifikat::all();
        return view('sertifikat.index', compact('peserta'));
    }
}
