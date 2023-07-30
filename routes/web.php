<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\StatistikController;
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

//route landing
Route::get('/', function () {
    return view('auth.login');
});

// route login
Route::get('/loginProcess', [AuthController::class, 'loginProcess']);

//route logout
Route::get('/logout', [AuthController::class, 'logout']);

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/izin', [DashboardController::class, 'izin']);

//route document
Route::get('/arsip', [DocumentController::class, 'arsip']);
Route::get('/unggah', [DocumentController::class, 'unggah']);
Route::post('/unggahproses', [DocumentController::class, 'unggahproses']);

//route absensi
Route::get('/absensi', [AbsensiController::class, 'index']);
Route::post('/absenproses', [DashboardController::class, 'absen']);

Route::get('/statistik', [StatistikController::class, 'index']);
Route::get('/ubah-statistik', [StatistikController::class, 'ubah']);
