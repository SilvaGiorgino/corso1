<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index']);

Route::get('/home',function() { return view('welcome'); });

// modifico ma non ho fatto un pull
