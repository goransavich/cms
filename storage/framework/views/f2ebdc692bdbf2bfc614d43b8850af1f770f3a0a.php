<div class="col-sm-4 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
            <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="/?month=<?php echo e($archive['month']); ?>&year=<?php echo e($archive['year']); ?>"><?php echo e($archive['month']. ' '. $archive['year']); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Visit us</h4>
            <ol class="list-unstyled">
              <li><a target="_blank" href="https://github.com">GitHub</a></li>
              <li><a target="_blank" href="https://twitter.com">Twitter</a></li>
              <li><a target="_blank" href="https://facebook.com">Facebook</a></li>
            </ol>
          </div>
</div><!-- /.blog-sidebar -->