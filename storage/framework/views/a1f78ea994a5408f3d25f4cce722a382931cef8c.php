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
<table>
  <th>N</th>
  <th>Name</th>
  <th>Birthday</th>
  <th>Position</th>
  <th>Salary</th>
  <th>Created_at</th>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($user->id); ?></td>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->birthday); ?></td>
      <td><?php echo e($user->position); ?></td>
      <td><?php echo e($user->salary); ?></td>
      <td><?php echo e($user->created_at); ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH /Users/mac/www/laravel8/resources/views/employee-users/index.blade.php ENDPATH**/ ?>