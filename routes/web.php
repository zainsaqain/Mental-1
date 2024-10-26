<?php

use Illuminate\Support\Facades\Route;



Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
});

Route::get('/', function () {
    return view('mentalpress');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
