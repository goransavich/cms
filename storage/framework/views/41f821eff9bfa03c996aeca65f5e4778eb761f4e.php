<?php $__env->startSection('content'); ?>
<div class="col-md-8">

	<h1>Register</h1>

	<hr>

	<form method="POST" action="/register">

	<?php echo e(csrf_field()); ?>


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
		  	<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		  </div>
		</form>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>