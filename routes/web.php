<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\UserController;
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

Route::get('/', [HomeController::class, 'front'])->name('home.index');
Route::get('register', [RegisterController::class, 'show'])->name('register.show');
Route::post('register', [RegisterController::class, 'register'])->name('register.perform');
Route::get('login', [LoginController::class, 'show'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login.perform');

Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.perform');

    Route::group(['prefix' => "master"], function () {
        Route::group(['prefix' => "user"], function () {
            Route::get('/', [UserController::class, 'index']);
            Route::get('table-user', [UserController::class, 'table_user']);
            Route::post('simpan', [UserController::class, 'simpan']);
            Route::get('hapus/{id}', [UserController::class, 'hapus']);
            Route::get('get-data/{id}', [UserController::class, 'get_data']);
        });
    });
});
