<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<?php echo $__env->make('elems.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<aside>
  сайдбар
  <?php echo $__env->yieldContent('aside'); ?>
</aside>
<main>
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
</main>
<?php echo $__env->make('elems.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/layout/app.blade.php ENDPATH**/ ?>