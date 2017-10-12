@extends('layouts.master')

@section('content')

<div class="col-md-8">

	<h1>Log in</h1>

	<form method="POST" action="/login">

	{{csrf_field()}}

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" required>
		  </div>

		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" required>
		  </div>
		  
		  
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary" name="submit">Login</button>
		  </div>

		  <div class="form-group">
		  	@include('layouts.errors')
		  </div>

		</form>

</div>

@endsection