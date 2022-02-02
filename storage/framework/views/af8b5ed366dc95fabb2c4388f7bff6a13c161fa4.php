<?php
/* @var \App\Models\Post $post */
?>







<?php $__env->startSection('content'); ?>
  <div class="info">
    <span class="date"><?php echo e($post->title); ?></span>
    <span class="author"><?php echo e($post->description); ?></span>
  </div>
  <div class="text">
    <?php echo e($post->text); ?>

  </div>
  <div class="text">
    <?php echo e($post->date_publication); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/www/laravel8/resources/views/posts/show.blade.php ENDPATH**/ ?>