<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/<?php echo e($post->post_id); ?>"><?php echo e($post->post_title); ?></a></h2>
    <p class="blog-post-meta"><?php echo e($post->created_at->toFormattedDateString()); ?> by <?php echo e($post->user->name); ?></p>
    <?php if($post->post_image): ?>
    <p><img src="storage/images/<?php echo e($post->post_image); ?>" class="img-responsive" width="300" height="200" /></p>
    <?php endif; ?>
    <p><?php echo e(str_limit($post->post_text, 500)); ?></p>
    <p><a href="/posts/<?php echo e($post->post_id); ?>">Read more</a></p>
    
</div><!-- /.blog-post -->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>