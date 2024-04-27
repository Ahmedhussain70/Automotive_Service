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

Route::get('login', function () {
    return view('./pages/Auth/login');
});

Route::get('sginup', function () {
    return view('./pages/Auth/sginup');
});

// Dashboard for Admin

Route::group(['middleware' => ['admin']], function () {

    Route::get('insertproduct', function () {
        return view('./pages/admin/AddProducts/insertproduct');
    });

    Route::post('/insert', [admin::class, "store"]);

    Route::get('/users',  [user::class, "index"]);
    Route::get('/delete/{id}',[user::class,"delete"]);
    Route::put('/update/{id}',[user::class,"update"]);
    Route::get('/searchUser', [user::class, 'search'])->name('searchUser');
    Route::get('/searchBooking', [admin::class, 'search'])->name('searchBooking');

    Route::get('/booking', [admin::class, "allBooking"]);

    Route::get('/dashboard', [admin::class, "saleschart"]);
    Route::get('/sales', [admin::class, "sales"]);
    Route::get('/branches', [admin::class, "branches"]);
// Route::get('/dashboard', [admin::class, "RecentTransactions"]);
});

// Route::get('tirechange', function () {
//     return view('./pages/tirechange');
// });


Route::post('/booking', [autocontrol::class, "booking"]);


Route::get('/{pages}', [autocontrol::class, "index"]);

//--------------------------------------------------------
Route::post('/order', [autocontrol::class, "order"]);



Route::post('/sginup', [user::class , "addUser"])->name('sginup');
Route::post('/login', [user::class , "logIn"])->name('login');
Route::post('logout', [user::class, "logout"])->name('logout');
