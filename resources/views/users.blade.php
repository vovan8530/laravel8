<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
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
  @foreach ($users as $key => $cities)
    <li>{{ $key }}:
      @foreach($cities as $city)
        {{ $city->city_title }}{{$loop->last ? '' : ', '}}
      @endforeach
    </li>
  @endforeach
</ul>
</body>
</html>

