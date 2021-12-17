<?php
/* @var \App\Models\Product[] $products */
/* @var \App\Models\Product $product */
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
@foreach ($products as $product)
  <p>This is product - {{ $product->title }}</p>
  <p> subCategory - {{ $product->sub_category_title }}</p>
  <p> category - {{ $product->category_title }}</p>
@endforeach
</body>
</html>

