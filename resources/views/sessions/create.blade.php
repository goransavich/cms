

@extends('layouts.master')

@section('content')
<div class="col-md-8">

	<h1>Register</h1>

	<hr>

	<form method="POST" action="/register">

	{{csrf_field()}}

		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="name" class="form-control" name="name" required>
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" required>
		  </div>

		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" required>
		  </div>
		  
		  <div class="form-group">
		    <label for="password_confirmation">Confirm password</label>
		    <input type="password" class="form-control" name="password_confirmation" required>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		  <div class="form-group">
		  	@include('layouts.errors')
		  </div>
		</form>

</div>


@endsection

