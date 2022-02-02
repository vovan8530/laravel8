<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('aside', $aside); ?>

<?php $__env->startSection('content'); ?>
  <p><?php echo e($city ?? 'Moskow'); ?></p>
  <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($item['country'] ?? 'Chech'); ?></p>
    <p><?php echo e($item['city'] ?? 'Praga'); ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <p><?php echo e($year ?? date_format(now(), 'Y')); ?></p>
  <p><?php echo $str; ?></p>

  <?php
    //phpinfo()
  ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/www/laravel8/resources/views/city/show.blade.php ENDPATH**/ ?>