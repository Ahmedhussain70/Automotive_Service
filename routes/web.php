<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('./pages/index');
});

// Route::get('about', function () {
//     return view('./pages/about');
// });

Route::get('login', function () {
    return view('./pages/Auth/login');
});

Route::get('sginup', function () {
    return view('./pages/Auth/sginup');
});