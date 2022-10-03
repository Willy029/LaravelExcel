<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrestamoController;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

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

Route::controller(UserController::class)->group(function(){
    Route::get('users','index');
    Route::get('users-export','export')->name('users.export');
    Route::post('users-import','import')->name('users.import');
});

Route::controller(PrestamoController::class)->group(function(){
    Route::get('dispositivos','index');
    Route::get('dispositivos-export','export')->name('dispositivos.export');
    Route::post('dispositivos-import','import')->name('dispositivos.import');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
