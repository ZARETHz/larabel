<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio');
});

/* aveces no sirve 
Route::get('/home', function () {
    return view('home');
}); */

Route::get('/v1', function(){
    return view('v1');
});
Route::get('/v2', function(){
    return view('v2');
});
Route::get('/v3', function(){
    return view('v3');
});
Route::get('/v4', function(){
    return view('v4');
});


Route::get('/home',[InicioController::class,'index']);  
Route::get('/home',[InicioController::class,'home']);  