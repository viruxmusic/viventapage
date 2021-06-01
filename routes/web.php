<?php

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
})->name('inicio');

Route::get('/mensajes', function () {
    return view('mensajes');
})->name('mensajes');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/vermas', function () {
    return view('vermas');
})->name('vermas');