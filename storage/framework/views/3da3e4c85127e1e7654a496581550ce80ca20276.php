<?php
/* @var \App\Models\Product[] $products */
/* @var \App\Models\Product $product */
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
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p>This is product - <?php echo e($product->title); ?></p>
  <p> subCategory - <?php echo e($product->sub_category_title); ?></p>
  <p> category - <?php echo e($product->category_title); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>

<?php /**PATH /Users/mac/www/laravel8/resources/views/products.blade.php ENDPATH**/ ?>