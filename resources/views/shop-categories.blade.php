<?php
/* @var App\Models\ShopCategory $shopCategory */
/* @var App\Models\ShopCategory[] $shopCategories */
?>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
  <title>Document</title>
</head>
<body>
<ul>
  @foreach($categories as $category)
    @if ($category->children)
      @include('shop-categories', ['categories' => $category->children])
      <li>{{$category->title}}</li>
    @endif
  @endforeach
</ul>
</body>
</html>
