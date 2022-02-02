<!DOCTYPE html>
<html>
<head>
  <title>
    <?php if(!isset($post)): ?>
      <?php echo $__env->yieldContent('error-title'); ?>
    <?php else: ?>
      <?php echo $__env->yieldContent('title'); ?>
    <?php endif; ?>
  </title>
</head>
<body>
<header>
  <h1>
    <?php if(!isset($post)): ?>
      <?php echo $__env->yieldContent('error-title'); ?>
    <?php else: ?>
      <?php echo $__env->yieldContent('title'); ?>
    <?php endif; ?>
  </h1>
</header>
<main>
  <?php echo $__env->yieldContent('content'); ?>
</main>
</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/posts/main.blade.php ENDPATH**/ ?>