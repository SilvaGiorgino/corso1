<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog/new',[BlogController::class,'form']);
Route::get('/blog/view',[BlogController::class,'dettagli']);

Route::get('/home',function() { return view('welcome'); }) -> name("libreria.index"); 
Route::post('/home', [AuthorController::class,'saveAuthor']) -> name("libreria.saveAuthor"); 
Route::post('/home', [BookController::class,'saveBook']) -> name("libreria.saveBook"); 
Route::get('/formLibro', function() { return view('blog.formLibro'); }) -> name("libreria.formLibro");
Route::get('/formAutore', function() { return view('blog.formAutore'); }) -> name ("libreria.formAutore");

