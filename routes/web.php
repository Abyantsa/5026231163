<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
//import java.io;

//System.out.println();
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class,'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
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
