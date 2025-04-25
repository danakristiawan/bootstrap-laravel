<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/starter', function () {
    return view('starter');
});

Route::get('/chart', function () {
    // $data = DB::select("select strftime('%m', birth_date) as date, count (*) as agregate FROM users GROUP BY date");
    
    $data = User::selectRaw("strftime('%m', birth_date) as date, count (*) as aggregate")
    ->groupBy('date')
    ->get();
    return view('chart', compact('data'));
});
