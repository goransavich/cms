<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;



class PostsController extends Controller
{
   
   public function __construct()
   {

      $this->middleware('auth')->except(['index','show']);

   }

   public function index()
   {

     $posts=Post::latest();
     
     if ($month=request('month')){
         $posts->whereMonth('created_at', Carbon::parse($month)->month);
     }

     if ($year=request('year')){
         $posts->whereYear('created_at', $year);
     }

     $posts=$posts->get();

     $archives=Post::archives();
         

      
      return view('welcome', compact('posts'));

   }

   
   public function create()
   {
      
         return view('posts.create');
             
   }

   public function store()
   {

   	  $this->validate(request(), [
                'post_title'=> 'required',
                'post_text' => 'required'

            ]);
      
      
      if(!is_null(request()->file('image'))){
        
        $image_name=request()->file('image')->hashName();
     
        request()->file('image')->store('public/images');
        } else $image_name="";

      Post::create([

            'post_title' => request('post_title'),

            'post_text' => request('post_text'),

            'user_id' => auth()->id(),

            'post_image' => $image_name
            ]);
        
     
   	  return redirect('/');

   }

   public function show($id)
   {
      $post=Post::find($id);

      return view('posts.show', compact('post'));

   }
}
