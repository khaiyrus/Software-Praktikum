<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Tampilkan daftar user yang belum disetujui
    public function index()
    {
        $users = User::where('is_approved', false)->get();
        return view('admin.users.index', compact('users'));
    }

    // Setujui user berdasarkan ID
    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->is_approved = true;
        $user->save();

        return back()->with('success', 'User disetujui.');
    }
}
