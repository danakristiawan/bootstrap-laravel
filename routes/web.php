<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\UsersController;

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

Route::resource('users', App\Http\Controllers\UsersController::class);