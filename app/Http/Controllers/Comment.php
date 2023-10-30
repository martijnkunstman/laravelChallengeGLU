<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment as CommentModel;

class Comment extends Controller
{
    public function store(Request $request)    {
        $fields = $request -> validate([
            'name' => 'required',
            'email' => ['required','email'],
            'comment' => 'required'
        ]);
        CommentModel::create($fields);      
        return redirect('/');
    } 
}
