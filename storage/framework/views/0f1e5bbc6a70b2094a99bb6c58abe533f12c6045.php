<?php
/* @var App\Models\ShopCategory $shopCategory */
/* @var App\Models\ShopCategory[] $shopCategories */
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
<ul>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($category->children): ?>
      <?php echo $__env->make('shop-categories', ['categories' => $category->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <li><?php echo e($category->title); ?></li>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</body>
</html>
<?php /**PATH /var/www/laravel8/resources/views/shop-categories.blade.php ENDPATH**/ ?>