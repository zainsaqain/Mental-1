<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ServiceController;


Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
});

Route::get('/', function () {
    return view('mentalpress');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services/create',[ServiceController::class,'create'])->name('services.create');
Route::get('/services/index',[ServiceController::class,'index'])->name('services.index');