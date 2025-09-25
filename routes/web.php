<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/halaman', function () {
    return view('User.halaman'); 
})->middleware('auth')->name('halaman');

Route::get('/', function () {
    return view('forfront');
});

route::get('/logout', function () {
    return view('register');
})->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/pendaftaran', function () {
    return view('pendaftaran.index');
})->middleware('auth')->name('pendaftaran');

Route::get('/user', [UserController::class, 'index']);

Route::get('/dashboard', function () {
    return view('tester');
});

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

// Route::get('/halaman', function () {
//     return view('user.halaman');
// });

Route::get('/halpatungan', function () {
    return view('user.pagepatungan');
});

Route::resource('users', UserController::class);
Route::resource('periode', PeriodeController::class);
Route::resource('pendaftaran', PendaftaranController::class);


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('tester');
    });
});
