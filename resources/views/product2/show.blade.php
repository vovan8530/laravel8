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
<a href="/product/{{$categoryId}}">{{$categoryName}}</a>
<p>{{$product['name']}}</p>
<p>{{$product['cost']}}</p>
@if($product['inStock'])
  <p>есть в наличии</p>
@else
  <p>нет в наличии</p>
@endif
<p>{{$product['desc']}}</p>
</body>
</html>
