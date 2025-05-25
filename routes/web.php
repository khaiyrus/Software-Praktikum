<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PanitiaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('guest');
});

    Route::get('/guest', function () {
        return view('guest');
    })->name('guest');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('panitia.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Group middleware untuk admin
Route::prefix('admin')->group(function() {
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('/users', [AdminController::class, 'index'])->name('users');
    Route::post('/users/{id}/approve', [AdminController::class, 'approve'])->name('users.approve');
});

});

// Group middleware untuk panitia
Route::prefix('panitia')->group(function() {
    Route::middleware(['auth', 'panitia'])->group(function() {
    Route::get('/', [PanitiaController::class, 'index'])->name('panitia');
    });
});
Route::prefix('kandidat')->group(function() {
    Route::middleware(['auth', 'kandidat'])->group(function() {
    Route::get('/', [KandidatController::class, 'index'])->name('panitia');
    });
});


// Group middleware untuk user yang sudah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

require __DIR__.'/auth.php';
