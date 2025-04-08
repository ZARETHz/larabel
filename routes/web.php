<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;


Route::get('/v1', [InicioController::class, 'v1'])->name('v1');

Route::get('/inicio', [InicioController::class, 'inicio'])->name('inicio');

Route::get('/v2', [InicioController::class, 'v2'])->name('v2');

Route::get('/v3', [InicioController::class, 'v3'])->name('v3');

Route::get('/v4', [InicioController::class, 'v4'])->name('v4');