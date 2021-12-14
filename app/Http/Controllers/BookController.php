<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller{
    
    public function saveBook(Request $request){
        $storeData = $request->validate([
            'name'=> 'required|max:255',
            'homeEditor'=> 'required|max:255',
            'nPage'=>'required|integer|min:1',
            'release'=>'required|date',
            'genre'=>'required|max:255'
        ]);
        $post = Book::create($storeData);
        return redirect('/home');
    }

}
