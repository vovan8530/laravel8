<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
?>



<?php $__env->startSection('content'); ?>
  <form method="post"
    <?php if($user->isNew()): ?>
      action="<?php echo e(route('users.store')); ?>"
    <?php else: ?>
      action="<?php echo e(route('users.update', ['user' => $user])); ?>"
    <?php endif; ?>>
    <?php if(!$user->isNew()): ?>
      <?php echo method_field('PUT'); ?>
    <?php endif; ?>
  <?php echo csrf_field(); ?>
  <input name="name" placeholder="имя" value="<?php if(!$user->isNew()): ?><?php echo e($user->name); ?><?php endif; ?>"><br>
  <input name="email" placeholder="email" value="<?php if(!$user->isNew()): ?><?php echo e($user->email); ?><?php endif; ?>"><br>
  <input type="password" name="password" placeholder="password"
         value="<?php if(!$user->isNew()): ?><?php echo e($user->password); ?><?php endif; ?>"><br>
  <input type="submit">
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel8/resources/views/users/edit.blade.php ENDPATH**/ ?>