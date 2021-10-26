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
    return view('welcome');
});

Route::get('index', function () {
    return "<h1>Halaman Index</h1> <br> <h3>Selamat datang di halaman index</h3>";
});

Route::get('bio', function () {
    $nama = "Aziz Tb";
    $jk = " Laki-laki";
    $tempat = " Bandung";
    $tanggal = " 27 Agustus 2004";
    $alamat = " Sekeawi";
    $agama = " Islam";
    $hobi = " Tidur";

    return "Nama : " .$nama ."<br>"
    ."Jenis Kelamin : " .$jk ."<br>"
    ."Tempat Lahir : " .$tempat ."<br>"
    ."Tanggal Lahir : " .$tanggal ."<br>"
    ."Alamat : " .$alamat ."<br>"
    ."Agama : " .$agama ."<br>"
    ."Hobi : " .$hobi ."<br>";
});

Route::get('biodata', function () {
    $nama = "Aziz Tubagus Taufik Hirzi";
    $jk = " Laki-laki";
    $tempat = " Bandung";
    $tanggal = " 27 Agustus 2004";
    $alamat = " Sekeawi";
    $agama = " Islam";
    $hobi = " Tidur";

    return view('biodata', compact('nama','jk','tempat','tanggal','alamat','agama','hobi'));
});
