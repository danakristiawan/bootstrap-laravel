<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewUsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/starter', function () {
    return view('starter');
});

Route::get('/chart', function () {
    $data = User::selectRaw("strftime('%m', birth_date) as date, count (*) as aggregate")
    ->groupBy('date')
    ->get();
    return view('chart', compact('data'));
});

Route::get('/newchart', [ChartController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::post('logout', 'logout')->name('logout')->middleware('auth');
});

Route::group(['middleware' => ['auth']], function() {
    // Route::resource('roles', RoleController::class);
    Route::resource('users', UsersController::class);
    Route::resource('products', ProductController::class);
});

Route::group(['middleware' => ['auth','role:admin']], function () {
    Route::resource('roles', RoleController::class);
});

Route::group(['middleware' => ['auth','role:client']], function () {
    Route::resource('flights', FlightsController::class);
});