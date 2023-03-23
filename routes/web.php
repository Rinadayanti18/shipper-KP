<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\getApi;
use App\Http\Controllers\PostController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts/main', [
//         "title" => "Main"
//     ]);
// });

// Home
Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

// Layanan
Route::get('/layanan', function () {
    return view("User/Layanan/layanan", [
        "title" => "Layanan"
    ]);
});

// Cari

// Route::get('/cektarif', function () {
//     return view("User/Cari/CekTarif", [
//         "title" => "Cek Tarif"
//     ]);
// });

Route::get('/lacakpaket', function () {
    return view("User/Cari/LacakPaket", [
        "title" => "Lacak Paket"
    ]);
});

Route::get('/caridroppoint', function () {
    return view("User/Cari/CariDropPoint", [
        "title" => "Cari Drop Point"
    ]);
});


// ===== Order =====
Route::get('/dropoff', function () {
    return view("User/Order/DropOff", [
        "title" => "Drop Off"
    ]);
})->middleware('auth');

Route::get('/pickup', function () {
    return view("User/Order/PickUp", [
        "title" => "Pick Up"
    ]);
})->middleware('auth');

// ===== Tentang Kami =====
// Berita dan Acara
// Route::get('/beritadanacara', function () {
//     return view("User/TentangKami/BeritaDanAcara", [
//         "title" => "Berita dan Acara"
//     ]);
// });

// Route::get('/event', function () {
//     return view("User/TentangKami/event", [
//         "title" => "Event"
//     ]);
// });

Route::get('/karyawan', function () {
    return view("User/TentangKami/detailBerita.karyawan", [
        "title" => "Karyawan"
    ]);
});


// End Of Berita dan Acara

Route::get('/karir', function () {
    return view("User/TentangKami/Karir", [
        "title" => "Karir"
    ]);
});



// Route::get('/profilperusahaan', function () {
//     return view("User/TentangKami/ProfilPerusahaan", [
//         "title" => "Profil Perusahaan"
//     ]);
// });

// ===== Informasi =====
Route::get('/faq', function () {
    return view("User/Informasi/FAQ", [
        "title" => "FAQ"
    ]);
});

// Informasi >> Informasi Paket
Route::get('/panduan', function () {
    return view("User/Informasi/InformasiPaket/Panduan", [
        "title" => "Panduan"
    ]);
});

Route::get('/barangberbahaya', function () {
    return view("User/Informasi/InformasiPaket/BarangBerbahaya", [
        "title" => "Barang Berbahaya"
    ]);
});

Route::get('/larangan', function () {
    return view("User/Informasi/InformasiPaket/Larangan", [
        "title" => "Larangan"
    ]);
});

// Informasi >> Ketentuan
Route::get('/sk', function () {
    return view("User/Informasi/Ketentuan/SK", [
        "title" => "SK"
    ]);
});

Route::get('/skpengiriman', function () {
    return view("User/Informasi/Ketentuan/SKPengiriman", [
        "title" => "SK Pengiriman"
    ]);
});

Route::get('/kebijakancookies', function () {
    return view("User/Informasi/Ketentuan/KebijakanCookies", [
        "title" => "Kebijakan Cookies"
    ]);
});

Route::get('/kebijakanprivasi', function () {
    return view("User/Informasi/Ketentuan/Kebijakanprivasi", [
        "title" => "Kebijakan Privasi"
    ]);
});

// Admin
Route::get('/dashboard', function () {
    return view("Admin/dashboard", [
        "title" => "Dashboard"
    ]);
});

// Route::get('/customer', function () {
//     return view("Admin/customer", [
//         "title" => "Customer"
//     ]);
// });


Route::get('/pesananU', function () {
    return view("User/UserCorporate/pesananU", [
        "title" => "Dashboard"
    ]);
});


/* Masuk/Daftar */

Route::get('/masuk', [LoginController::class, 'masuk'])->name('login') ->middleware('guest');
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [RegisterController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [RegisterController::class, 'store']);


Route::get('/profil',[ProfilController::class, 'profil'])->middleware('auth');
/* Masuk/Daftar */

Route::get('/cektarif', [getApi::class, 'index']);
Route::get('/province/{id}/cities', [getApi::class, 'getCities']);
Route::post('/cektarif', [getApi::class, 'submit']);
// Route::get('/cektarif', [getApi::class, 'submit']);
//Route::get('getCity/ajax/{id}', [getApi::class, 'ajax']);



// Admin
Route::get('/customer', [dashboardController::class, 'dashboardA']);

// Post
//Profil Perusahaan
Route::get('/profilperusahaan', [PostController::class, 'perusahaan']);


// Berita
Route::get('/beritadanacara', [PostController::class, 'berita']);
Route::get('/singleBerita{id}', [PostController::class, 'SingleBerita']);
//event
Route::get('/event', [PostController::class, 'event']);
Route::get('/singleEvent{id}', [PostController::class, 'SingleEvent']);
//karyawan
Route::get('/karyawan', [PostController::class, 'karyawan']);
Route::get('/singEmployee{id}',[PostController::Class,'singleEmployee']);