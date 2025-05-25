<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    public function index()
    {
        return view('panitia.dashboard');
    }

    public function inputPemilih()
    {
        return view('panitia.input_pemilih');
    }

    public function simpanPemilih(Request $request)
    {
        // Validasi dan simpan data pemilih
    }

    public function galeri()
    {
        return view('panitia.galeri');
    }
}

