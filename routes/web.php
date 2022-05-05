<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogginController;
use App\Http\Controllers\Auth\RegisterContoller;
use App\Http\Controllers\Auth\RestPasswordControlle;

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
})->name('home');



Route::group(['prefix' => 'auth'], function () {
    // Register
    Route::get('/Register', [RegisterContoller::class, 'create'])->name('auth.Register');
    Route::post('/Registers', [RegisterContoller::class, 'store'])->name('auth.Register.store');
    // Login
    Route::get('/Login', [LogginController::class, 'create'])->name('auth.login');
    Route::post('/Logins', [LogginController::class, 'store'])->name('auth.login.store');
    Route::get('/', [LogginController::class, 'destory'])->name('auth.login.destory');
    // RestPassword
    Route::get('/forget-password', [RestPasswordControlle::class, 'create'])->name('auth.forget');
    Route::post('/forget-passwords', [RestPasswordControlle::class, 'store'])->name('auth.forget.store');
    Route::get('/reset-password/{token}', [RestPasswordControlle::class, 'resetForm'])->name('auth.reset-password');
    Route::post('/reset-passwords', [RestPasswordControlle::class, 'resetPasword'])->name('auth.resetPasword');
});