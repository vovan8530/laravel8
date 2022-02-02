<?php $__env->startSection('error-title'); ?>
     Страницы с <?php echo e($id); ?> не существует!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('error'); ?>
    <div class="text">
      Извините, страницы с <?php echo e($id); ?> не существует!
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/www/laravel8/resources/views/posts/error.blade.php ENDPATH**/ ?>