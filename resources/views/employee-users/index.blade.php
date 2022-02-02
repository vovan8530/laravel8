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
  @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->birthday}}</td>
      <td>{{$user->position}}</td>
      <td>{{$user->salary}}</td>
      <td>{{$user->created_at}}</td>
    </tr>
  @endforeach
</table>
</body>
</html>
