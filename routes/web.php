<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts/main');
});


Route::get('/layanan', function () {
    return view("User/Layanan/layanan", [
        "title" => "Layanan"
    ]);
});

Route::get('/cektarif', function () {
    return view("User/Cari/CekTarif", [
        "title" => "Cek-Tarif"
    ]);
});

Route::get('/caridroppoint', function () {
    return view("User/Cari/CariDropPoint", [
        "title" => "Cari-Drop-Point"
    ]);
});

Route::get('/lacakpaket', function () {
    return view("User/Cari/LacakPaket", [
        "title" => "Lacak-Paket"
    ]);
});

Route::get('/dropoff', function () {
    return view("User/Order/DropOff", [
        "title" => "Drop-Off"
    ]);
});

Route::get('/pickup', function () {
    return view("User/Order/PickUp", [
        "title" => "Pick-Up"
    ]);
});