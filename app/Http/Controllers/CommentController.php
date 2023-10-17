<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'body'=>'required',
            'name' => 'nullable',
            'email' => 'nullable',

        ]);

        $input = $request->all();
        if (auth()->check()) {
            $input['user_id'] = auth()->user()->id;
        } else {
            $input['user_id'] = null;
        }

        $comments = Comment::create($input);
       /*  echo "<pre>";
        print_r($comments );
        exit; */
        return back();
    }


}



