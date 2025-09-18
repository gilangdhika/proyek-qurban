<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('forfront');
});
Route::get('/dashboard', function () {
    return view('tester');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/periodqurban', function () {
    return view('layout.admin.periodqurban');
});
Route::get('/hwanqurban', function () {
    return view('layout.admin.hwanqurban');
});
Route::get('/penerima', function () {
    return view('layout.admin.penerima');
});
Route::get('/detdaftar', function () {
    return view('layout.admin.detdaftar');
});
Route::get('/verifbayar', function () {
    return view('layout.admin.verifbayar');
});

Route::get('/admin/bukti', function () {
    return view('layout.admin.bukti');
});
Route::get('/distribusiq', function () {
    return view('layout.admin.distribusiq');
});
Route::get('/keuangan', function () {
    return view('layout.admin.keuangan');
});
Route::get('/setting', function () {
    return view('layout.admin.setting');
});

Route::get('/profile', function () {
    return view('layout.admin.profile');
});



Route::get('/register', function () {
    return view('register');
})->name('register');

route::get('/logout', function () {
    return view('register');
})->name('logout');

Route::get('/halaman', function () {
    return view('user.halaman');
});

// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     // daftar pendaftaran
//     Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('admin.pendaftaran.index');

//     // detail pendaftaran
//     Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'show'])->name('admin.pendaftaran.show');
// });


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('tester');
    });
});
