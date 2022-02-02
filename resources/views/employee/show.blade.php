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

<div>{{ $name }}</div>
<div>{{ $surname }}</div>

<table>
  @foreach($arrEmployees as $employees)
    <tr>
      @continue($employees['name'] == 'user1')
      @break($employees['name'] == 'user3')
      @foreach($employees as $employee)
        @continue($employee == 'user1')
        <td>{{$employee}}</td>
      @endforeach

    </tr>
  @endforeach
</table>


</body>
</html>
