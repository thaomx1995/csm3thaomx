<?php

use App\Http\Controllers\DabanController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\MathangController;
use App\Http\Controllers\TonkhoController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\ChucvuController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\front\HomeController;
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


Route::resource('/nhacungcap', MarketController::class);

Route::resource('/mathang', MathangController::class);

Route::resource('/tonkho', TonkhoController::class);

Route::resource('/daban', DabanController::class);

Route::resource('/nhanvien', NhanvienController::class);

Route::resource('/chucvu', ChucvuController::class);

Route::resource('/abcmarket', HomeController::class);

Route::resource('/dangnhap', DangnhapController::class);


Route::get('/', function () {
    return view('layout.admin.master');
})->name('dasboard');

//------------------------

Route::resource('/sach', SachController::class);


