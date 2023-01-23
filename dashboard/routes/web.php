<?php

use App\Http\Controllers\ApiJS\ConnectController as ApiJSConnectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectController;
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
});

Route::get('login', [ConnectController::class, 'getLogin'])->name('login');
Route::prefix('/api-js')->group(function () {
    //Connect Module

    Route::post('connect/login', [ApiJSConnectController::class, 'postLogin']);
});
