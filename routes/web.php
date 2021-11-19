<?php

use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\AnakKeluarController;
use App\Http\Controllers\DonaturController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test-admin', function () {
    return view('layouts.admin');
});

Route::resource('anakasuh', AnakAsuhController::class);
Route::resource('anakkeluar', AnakKeluarController::class);
Route::resource('donatur', DonaturController::class);

Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/visi', [App\Http\Controllers\VisiController::class, 'index']);
