<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
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

Route::group(['prefix' => 'admin'], function() {

    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login-check', [AuthController::class, 'adminCheck'])->name('admin.login.check');

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('',[DashboardController::class,'index'])->name('admin.dashboard');

    });

});
