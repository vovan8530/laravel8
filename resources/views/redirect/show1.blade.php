{{--@isset($num)--}}
{{--  <p>некорректное значение {{$num}}</p>--}}
{{--@endisset--}}

<form action="" method="POST">
  @csrf
  <input type="text" name="num1">
  <input type="text" name="num2">
  <input type="text" name="num3">
  <input type="text" name="num4">
  <input type="text" name="num5">
  <input type="submit">
</form>
