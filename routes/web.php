<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

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
