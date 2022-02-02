<?php
/* @var \App\Models\Post[] $posts */
/* @var \App\Models\Post $post */
?>



<?php $__env->startSection('title'); ?>
  Title from Posts
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="post">
      <a href="<?php echo e(route('posts.show', [$post])); ?>"><h2><?php echo e($post->title); ?></h2></a>
      <p><?php echo e($post->description); ?></p>
      <p><?php echo e($post->text); ?></p>
      <p><?php echo e($post->date_publication); ?></p>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/www/laravel8/resources/views/posts/index.blade.php ENDPATH**/ ?>