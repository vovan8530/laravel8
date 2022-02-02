<?php
?>

  <!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="" method="GET">
  <input value="<?php echo e($inp1); ?>"><br>
  <input value="<?php echo e($inp2); ?>"><br>
  <input value="<?php echo e($inp3); ?>"><br>
  <input type="submit">
  <p style="<?php echo e($style); ?>">Hello world</p>
  <a href="<?php echo e($href); ?>"><?php echo e($text); ?></a>
  <p><?php echo e(date_format( now(), 'd.m.Y')); ?></p>
</form>
</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/page/show-inp.blade.php ENDPATH**/ ?>