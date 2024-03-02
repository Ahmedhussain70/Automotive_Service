<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\autocontrol;
use App\Http\Controllers\admin;
use App\Http\Controllers\user;

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
    return view('index');
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

Route::get('dashboard', function () {
    return view('./pages/admin/index');
});

Route::get('insertproduct', function () {
    return view('./pages/admin/AddProducts/insertproduct');
});


// Route::get('tirechange', function () {
//     return view('./pages/tirechange');
// });


Route::post('/booking', [autocontrol::class, "booking"]);

// Route::get('pages/admin/insertproduct', [admin::class, "create"]);
Route::get('/{pages}', [autocontrol::class, "index"]);
// Route::get('tires', [autocontrol::class, "index"]);
Route::post('/insert', [admin::class, "store"]);

Route::post('/sginup', [user::class , "addUser"])->name('sginup');
Route::post('/login', [user::class , "logIn"])->name('login');
Route::post('logout', [user::class, 'logout'])->name('logout');