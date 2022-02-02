<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<a href="/product/<?php echo e($categoryId); ?>"><?php echo e($categoryName); ?></a>
<p><?php echo e($product['name']); ?></p>
<p><?php echo e($product['cost']); ?></p>
<?php if($product['inStock']): ?>
  <p>есть в наличии</p>
<?php else: ?>
  <p>нет в наличии</p>
<?php endif; ?>
<p><?php echo e($product['desc']); ?></p>
</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/product2/show.blade.php ENDPATH**/ ?>