<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    public function saveAuthor(Request $request){
        $storeData = $request->validate([
            'name'=> 'required|max:255',
            'surname'=> 'required|max:255',
            'nationality'=>'required|max:255',
            'born'=>'required|date'
        ]);
        $post = Author::create($storeData);
        return redirect('/home');
    }
}
