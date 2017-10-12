@extends('layouts.master')

@section('content')

	<div class="col-sm-8 blog-main">
		 <h1>{{$post->post_title}}</h1>
		 <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by {{$post->user->name}}</p>
		 @if($post->post_image)
		 <p><img src="/storage/{{$post->post_image}}" class="img-responsive" width="650" height="350"></p>
		 @endif
		 <p>{{$post->post_text}}</p>
		 <hr>
		 <div class="comments">
			 @foreach($post->comments as $comment)
				 <p>{{$comment->body}}</p>
				 <strong>{{$comment->name}}</strong>
				 <span>{{$comment->created_at->toFormattedDateString()}}</span>
				 <hr>
			 @endforeach
		 </div>

		 <!--Add a comment-->
		 <div class="card">
			  
			  <div class="card-block">
			    <h5 class="card-title comments">Add a comment</h5>
			    <form method="POST" action="/posts/{{$post->post_id}}/comments">
			    	{{csrf_field()}}
			    	<div class="form-group comments">
					    
					    <input type="text" class="form-control" name="name" placeholder="Your name" required>
					</div>

					<div class="form-group comments">
					     <input type="textarea" class="form-control" name="body" placeholder="Your comment here" required>
					</div>

					<div class="form-group comments">
		  				<button type="submit" class="btn btn-primary">Add a comment</button>
		  			</div>

					<div class="form-group">
					   @include('layouts.errors')
					</div>


			    </form>
			    
			  </div>
			</div>
	</div>

@endsection