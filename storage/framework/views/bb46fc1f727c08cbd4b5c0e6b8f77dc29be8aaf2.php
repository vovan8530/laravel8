<?php ?>

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

<div><?php echo e($name); ?></div>
<div><?php echo e($surname); ?></div>

<table>
  <?php $__currentLoopData = $arrEmployees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <?php if($employees['name'] == 'user1') continue; ?>
      <?php if($employees['name'] == 'user3') break; ?>
      <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($employee == 'user1') continue; ?>
        <td><?php echo e($employee); ?></td>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/employee/show.blade.php ENDPATH**/ ?>