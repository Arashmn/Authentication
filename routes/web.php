<?php

use App\Http\Controllers\Auth\LogginController;
use App\Http\Controllers\Auth\RegisterContoller;
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
    return view('index');
})->name('home');



Route::group(['prefix' => 'auth'], function () {
    // Register
    Route::get('/Register', [RegisterContoller::class, 'create'])->name('auth.Register');
    Route::post('/Registers', [RegisterContoller::class, 'store'])->name('auth.Register.store');
    // Login
    Route::get('/Login', [LogginController::class, 'create'])->name('auth.login');
    Route::post('/Logins',[LogginController::class, 'store'])->name('auth.login.store');
    Route::get('/',[LogginController::class, 'destory'])->name('auth.login.destory');
});