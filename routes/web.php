<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatatController;




Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/laporan-rutin', function () {
    return view('laporanrutin');
});

Route::get('/laporan-umum', function () {
    return view('laporanumum');
});

Route::get('/laporan-harian', function () {
    return view('laporanharian');
});

Route::get('/catat-rutin', function () {
    return view('catatrutinpilih');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ubah-password', function () {
    return view('ubahpassword');
});

Route::get('/catat-umum', function () {
    return view('catatumum');
});

Route::get('/catat-harian', function () {
    return view('catatharian');
});

/*Route::get('/catat', function () {
    return view('catat');
});*/

Route::get('/catat', [CatatController::class, 'showForm']);

Route::get('/kritik-saran', function () {
    return view('kritiksaran');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});