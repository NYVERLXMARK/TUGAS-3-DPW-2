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
    return view('index');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('template', function () {
    return view('template.base');
});

Route::get('dashboard', function () {
    return view('template.section.dashboard');
});

Route::get('pc', function () {
    return view('template.section.pc');
});

Route::get('laptop', function () {
    return view('template.section.laptop');
});

Route::get('smartphone', function () {
    return view('template.section.smartphone');
});

Route::get('accessories', function () {
    return view('template.section.accessories');
});

Route::get('detail', function () {
    return view('template.section.detail');
});

Route::get('login', function () {
    return view('template.section.login');
});

Route::get('register', function () {
    return view('template.section.register');
});