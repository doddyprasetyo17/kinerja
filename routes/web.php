<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// use App\Http\Controllers\DecryptController;
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
    return view('template.master');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/dekrip', [DecryptController::class, 'enkripsi']);
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/log', [LoginController::class, 'login'])->name('log');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/regis', [RegisterController::class, 'regis'])->name('register.regis');
