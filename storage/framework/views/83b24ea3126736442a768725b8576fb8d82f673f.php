<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
?>



<?php $__env->startSection('content'); ?>
  <p><?php echo e($user->id); ?></p>
  <p><?php echo e($user->name); ?></p>
  <p><?php echo e($user->email); ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel8/resources/views/users/show.blade.php ENDPATH**/ ?>