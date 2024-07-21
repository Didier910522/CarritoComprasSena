<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Importamos los controladores
use App\Http\Controllers\Articlecontroller;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\Income_Detailcontroller;
use App\Http\Controllers\Incomecontroller;
use App\Http\Controllers\Personcontroller;
use App\Http\Controllers\Sale_Detailcontroller;
use App\Http\Controllers\Salecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//Rutas de nuestra App
    Route::resource('/dashboard/article',ArticleController::class);
    Route::resource('/dashboard/category',Categorycontroller::class);
    //Route::resource('/dashboard/article',Incomecontroller::class);
    Route::resource('/dashboard/person',Personcontroller::class);
    Route::resource('/dashboard/income',Incomecontroller::class);
    //Route::resource('/dashboard/article',Sale_Detailcontroller::class);
    //Route::resource('/dashboard/article',Salecontroller::class);
    
});

require __DIR__.'/auth.php';
