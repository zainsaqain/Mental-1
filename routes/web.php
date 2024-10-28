<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
});

Route::get('/', function () {
    return view('mentalpress');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('services', ServiceController::class);