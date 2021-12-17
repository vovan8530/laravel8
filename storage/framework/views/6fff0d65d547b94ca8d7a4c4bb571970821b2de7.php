<?php
/* @var App\Models\SubCategory $subCategory */
/* @var App\Models\SubCategory[] $subCategories */
?>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p>This is subCategory - <?php echo e($subCategory->title); ?><br></p>
  <p>This is category - <?php echo e($subCategory->category_title); ?><br></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH /var/www/laravel8/resources/views/sub-categories.blade.php ENDPATH**/ ?>