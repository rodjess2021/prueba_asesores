<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('/productos', ProductoController::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});
