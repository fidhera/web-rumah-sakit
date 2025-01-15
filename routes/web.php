<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;




Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});




// dropdown Tentang Kami
Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/infokes', function () {
    return view('infokes');
});


// dropdown Pelayanan
Route::get('/igd', function () {
    return view('igd');
});

Route::get('/apotek', function () {
    return view('apotek');
});

Route::get('/dokter-gigi', function () {
    return view('doktergigi');
});

Route::get('/dokter-umum', function () {
    return view('dokterumum');
});

Route::get('/dokter-spesialis', function () {
    return view('dokterspesialis');
});

Route::get('/lab-lengkap', function () {
    return view('lablengkap');
});



// dropdown Layanan Reguler
Route::get('/rawat-inap', function () {
    return view('rawatinap');
});

Route::get('/fisioterapi', function () {
    return view('fisioterapi');
});

Route::get('/kamar-operasi', function () {
    return view('kamaroperasi');
});

Route::get('/instalasi-farmasi', function () {
    return view('instalasifarmasi');
});

Route::get('/layanan-rawat-intensif', function () {
    return view('rawatintensif');
});





Route::get('/antrian/index', function () {
    return view('rawatintensif');
});



Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
Route::post('/antrian', [AntrianController::class, 'store'])->name('antrian.store');
Route::delete('/antrian/{id}', [AntrianController::class, 'destroy'])->name('antrian.destroy');


