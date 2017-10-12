<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">

          <?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>