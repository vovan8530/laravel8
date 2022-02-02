<?php
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
{{--<p>{{count($employees)}}</p>--}}
<table>
  <th>№</th>
  <th>Имя</th>
  <th>Фамилия</th>
  <th>Зарплата</th>
  @foreach ($employees as $key => $employee)
    @if($employee['salary'] > 1000)
    <tr><td>{{$key}}</td>
      @foreach ($employee as $item)
       <td>{{$item}}</td>
      @endforeach
    </tr>
    @endif
  @endforeach
</table>

</body>
</html>


