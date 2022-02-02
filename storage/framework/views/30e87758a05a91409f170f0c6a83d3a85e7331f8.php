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
<form action="#" method="POST">
  <?php echo csrf_field(); ?>
  <input type="text" name="birthday">
  <input type="submit">
</form>
</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/redirect/form-cookie.blade.php ENDPATH**/ ?>