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
    return view("welcome");
});

Route::get('/me', function () {
    return ["NIS" => "3103118105", "name" => "Nur Haris Faza Ramadhan" ,
     "Gender" => "Laki-Laki", "Phone" => "08985181223", "kelas" => "XII RPL 3" ];
});

Route::get('/kontrol', function () {
    return "latihan control";
});