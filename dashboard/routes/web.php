<?php

use App\Http\Controllers\ApiJS\ConnectController as ApiJSConnectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TwoFactorController;
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

Route::get('/', [DashboardController::class, 'getHome']);

//connect router
Route::get('login', [ConnectController::class, 'getLogin'])->name('login');
Route::get('logout', [ConnectController::class, 'getLogout'])->name('logout');
Route::get('connect/two/factor', [TwoFactorController::class, 'getCode'])->name('connect_two_factor');


Route::prefix('/api-js')->group(function () {
    //Connect Module

    Route::post('connect/login', [ApiJSConnectController::class, 'postLogin']);
    Route::post('connect/twoauth', [ApiJSConnectController::class, 'postAuthCode']);
});
