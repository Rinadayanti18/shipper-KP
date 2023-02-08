<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




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

Route::get('/', function () {
    return view('layouts/main', [
        "title" => "Main"
    ]);
});

// Home
Route::get('home', function () {
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
Route::get('/cektarif', function () {
    return view("User/Cari/CekTarif", [
        "title" => "Cek Tarif"
    ]);
});

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
});

Route::get('/pickup', function () {
    return view("User/Order/PickUp", [
        "title" => "Pick Up"
    ]);
});

// ===== Tentang Kami =====
Route::get('/beritadanacara', function () {
    return view("User/TentangKami/BeritaDanAcara", [
        "title" => "Berita dan Acara"
    ]);
});

Route::get('/karir', function () {
    return view("User/TentangKami/Karir", [
        "title" => "Karir"
    ]);
});

Route::get('/detailKarir', function () {
    return view("User/TentangKami/detailKarir", [
        "title" => "Detail Karir"
    ]);
});

Route::get('/profilperusahaan', function () {
    return view("User/TentangKami/ProfilPerusahaan", [
        "title" => "Profil Perusahaan"
    ]);
});

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
    return view("Admin/Dashboard", [
        "title" => "Dashboard"
    ]);
});


/* Masuk/Daftar */

Route::get('/masuk', [LoginController::class, 'masuk']);
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::get('/daftar', [RegisterController::class, 'daftar']);
Route::post('/daftar', [RegisterController::class, 'store']);

/* Masuk/Daftar */


