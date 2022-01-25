<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
?>



<?php $__env->startSection('content'); ?>
  <ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($user->name); ?>

        <a href="<?php echo e(route('users.edit', ['user' => $user])); ?>">edit</a>
        <a href="" class="delete" data-method="delete" data-delete-url="/users/<?php echo e($user->id); ?>" data-element-id="<?php echo e($user->id); ?>">
          delete
        </a>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script type="text/javascript" src="<?php echo e(\EscapeWork\Assets\Facades\Asset::v('js/delete-item.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel8/resources/views/users/index.blade.php ENDPATH**/ ?>