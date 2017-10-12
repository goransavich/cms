@extends('layouts.master')

@section('content')
<div class="col-md-8">

	<h1>Publish a Post</h1>

	<hr>

	<form method="POST" action="/posts" enctype="multipart/form-data">
		{{csrf_field()}}

		<div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" name="post_title" required>
		</div>

		<div class="form-group">
		    <label for="text">Text</label>
		    <input type="text" class="form-control" name="post_text" required>
		</div>

		<div class="form-group">
			<label for="exampleInputFile">Upload image</label>
			<input type="file" class="form-control-file" id="exampleInputFile" aria-descr name="image">


		</div>

		<div class="form-group">
		  	<button type="submit" class="btn btn-primary">Publish</button>
		</div>

		<div class="form-group">
		  	@include('layouts.errors')
		</div>

	</form>
</div>
@endsection