<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
//import java.io;

//System.out.println();
Route::get('/', function () {
    return view('frontend');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blogpertama', function () {
	return view('blogpertama');
});

Route::get('hello', [Link::class,'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('welcome', function () {
	return view('welcome');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('danantara', function () {
    return view('danantara');
});

Route::get('helperlog', function () {
    return view('helperlog');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('uts', function () {
    return view('uts');
});

//Week 12
Route::get('dosen', [Link::class,'index']);

//Route Pegawai
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class,'index']);

Route::get('/formulir', [Pegawai2Controller::class,'formulir']);

Route::post('/formulir/proses', [Pegawai2Controller::class,'proses']);

//Route Blog
Route::get('/blog', [BlogController::class,'home']);

Route::get('/blog/tentang', [BlogController::class,'tentang']);

Route::get('/blog/kontak', [BlogController::class,'kontak']);

//Route CRUD Database Pegawai
Route::get('/pegawai', [PegawaiController::class,'tablepegawai']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/update', [PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class,'cari']);
