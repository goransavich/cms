<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
   public function store(Post $post)
   {

   		$this->validate(request(), [
                'name'=> 'required',
                'body' => 'required'

            ]);

   		Comment::create([

            'name' => request('name'),

            'body' => request('body'),

            'post_id' => $post->post_id

            
            ]);
        

   	  return back();

   }
}
