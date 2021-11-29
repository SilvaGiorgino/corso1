<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index']);

Route::get('/home',function() { return view('welcome'); });
<<<<<<< HEAD

// modifico ma non ho fatto un pull
=======
>>>>>>> ef82eb1b24ea19bed78fed08e277ca2fe83a9dcf
