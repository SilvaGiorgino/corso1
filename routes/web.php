<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog/new',[BlogController::class,'form']);
Route::get('/blog/view',[BlogController::class,'dettagli']);

Route::get('/home',function() { return view('welcome'); }) -> name("libreria.index"); 
Route::get('/formLibro', function() { return view('blog.formLibro'); });
Route::get('/formAutore', function() { return view('blog.formAutore'); });

