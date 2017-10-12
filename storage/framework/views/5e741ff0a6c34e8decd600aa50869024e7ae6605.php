<?php $__env->startSection('content'); ?>

	<div class="col-sm-8 blog-main">
		 <h1><?php echo e($post->post_title); ?></h1>
		 <p class="blog-post-meta"><?php echo e($post->created_at->toFormattedDateString()); ?> by <?php echo e($post->user->name); ?></p>
		 <?php if($post->post_image): ?>
		 <p><img src="/storage/<?php echo e($post->post_image); ?>" class="img-responsive" width="650" height="350"></p>
		 <?php endif; ?>
		 <p><?php echo e($post->post_text); ?></p>
		 <hr>
		 <div class="comments">
			 <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 <p><?php echo e($comment->body); ?></p>
				 <strong><?php echo e($comment->name); ?></strong>
				 <span><?php echo e($comment->created_at->toFormattedDateString()); ?></span>
				 <hr>
			 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		 </div>

		 <!--Add a comment-->
		 <div class="card">
			  
			  <div class="card-block">
			    <h5 class="card-title comments">Add a comment</h5>
			    <form method="POST" action="/posts/<?php echo e($post->post_id); ?>/comments">
			    	<?php echo e(csrf_field()); ?>

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
					   <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>


			    </form>
			    
			  </div>
			</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>