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
  <input value="{{$inp1}}"><br>
  <input value="{{$inp2}}"><br>
  <input value="{{$inp3}}"><br>
  <input type="submit">
  <p style="{{$style}}">Hello world</p>
  <a href="{{$href}}">{{$text}}</a>
  <p>{{date_format( now(), 'd.m.Y')}}</p>
</form>
</body>
</html>
