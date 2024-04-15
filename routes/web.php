<?php

use App\Http\Controllers\CasaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\FotosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/casa', [CasaController::class, 'index'])->name('casa.index');
Route::get('/casa', [FotosController::class, 'index'])->name('casa.index');
Route::get('/casa', [ContactoController::class, 'index'])->name('casa.index');
