<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\Login;
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

Route::get('/login', Login::class)->middleware('guest')->name('login');

Route::get('/dev', DevController::class);




Route::group(['middleware' => 'auth:web'], function () {

    Route::get('/', DashboardController::class)->name('dashboard');

    Route::resource('users', UserController::class);

    Route::view('profile', 'profile.index')->name('profile');

    Route::group(['middleware' => 'role:admin'], function() {
        Route::view('actlogs', 'logs')->name('actlogs');
    });

    Route::group(['prefix' => 'accounts'], function() {
        Route::resource('admin', AdminController::class);
    });
});
