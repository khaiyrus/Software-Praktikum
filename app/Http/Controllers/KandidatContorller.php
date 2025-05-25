<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KandidatController extends Controller
{
    public function dashboard()
    {
        $kandidat = Auth::user(); // Ambil user login
        return view('kandidat.dashboard', compact('kandidat'));
    }
}
