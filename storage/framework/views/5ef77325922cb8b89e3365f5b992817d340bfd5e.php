<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>Document</title>
</head>
<body>

<?php echo $__env->yieldContent('content'); ?>

<!--________SCRIPTS______-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<?php echo $__env->yieldContent('scripts'); ?>

<!--________SCRIPTS______-->
</body>
</html>
<?php /**PATH /var/www/laravel8/resources/views/layouts/main.blade.php ENDPATH**/ ?>