<?php ?>

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
{{--@if($num >= 1 and $num <= 3 or $num == 12)--}}
{{--  <p>Winter</p>--}}
{{--@elseif($num >= 3 and $num <= 5)--}}
{{--  <p>Spring</p>--}}
{{--@elseif($num >= 6 and $num <= 8)--}}
{{--  <p>Summer</p>--}}
{{--@elseif($num >= 9 and $num <= 11)--}}
{{--  <p>Autumn</p>--}}
{{--@else--}}
{{--  <p>not month</p>--}}
{{--@endif--}}

{{--@unless($isUngarAge)--}}
{{--  <p>age underage</p>--}}
{{--@endunless--}}

{{--@if(count($arr))--}}
{{--  <p>{{array_sum($arr)}}</p>--}}
{{--@else--}}
{{--  <p>arr empty</p>--}}
{{--@endif--}}

{{--<ul>--}}
{{--  @foreach( $arr as $key => $value)--}}
{{--    @if($key % 2 == 0)--}}
{{--  @if($loop->first)--}}
{{--      <li class="first"><b>{{$key . '-' .   $value}}</b></li>--}}
{{--    @elseif($loop->last)--}}
{{--      <li class="last"><b>{{$key . '-' .   $value}}</b></li>--}}
{{--    @if($loop->remaining < 3)--}}
{{--      <li><i>{{$key . '-' .   $value}}</i></li>--}}
{{--    @else--}}
{{--      <li><b>{{$key . '-' .   $value}}</b></li>--}}
{{--    @endif--}}
{{--    @endif--}}
{{--  @endforeach--}}
{{--</ul>--}}

{{--@if(is_array($data))--}}
{{--<ul>--}}
{{--  @foreach($data as $value)--}}
{{--    <li>{{$value}}</li>--}}
{{--  @endforeach--}}
{{--</ul>--}}
{{--@else--}}
{{--  <p>{{$data}}</p>--}}
{{--@endif--}}

{{--<table>--}}
{{--  @forelse($data as $items)--}}
{{--    <tr>--}}
{{--      @foreach($items as $item)--}}
{{--        <td>{{$item}}</td>--}}
{{--      @endforeach--}}
{{--    </tr>--}}
{{--  @empty--}}
{{--    <p>array empty</p>--}}
{{--  @endforelse--}}
{{--</table>--}}

{{--@for($i =1; $i<=10; $i++)--}}
{{--  <br>--}}
{{--  @for($j =1; $j<=10; $j++)--}}
{{--    <span>{{$j}}</span>--}}
{{--  @endfor--}}
{{--@endfor--}}


{{--<ul>@foreach($links as $link)--}}
{{--    <li><a href="{{$link['href']}}">{{$link['text']}}</a></li>--}}
{{--  @endforeach--}}
{{--</ul>--}}

{{--<table>--}}
{{--  @foreach($users as $user)--}}
{{--    @if($user['banned'])--}}
{{--      <tr style="color:red">--}}
{{--        <td>{{$user['name']}}</td>--}}
{{--        <td>{{$user['surname']}}</td>--}}
{{--        <td>Banned</td><br>--}}
{{--      </tr>--}}
{{--        @else--}}
{{--      <tr style="color:green">--}}
{{--        <td>{{$user['name']}}</td>--}}
{{--        <td>{{$user['surname']}}</td>--}}
{{--          <td>Active</td><br>--}}
{{--      </tr>--}}
{{--    @endif--}}
{{--  @endforeach--}}
{{--</table>--}}

{{--<form action="">--}}
{{--  @foreach($inputs as $input)--}}
{{--    <input type="text" value="{{$input}}"><br>--}}
{{--  @endforeach--}}
{{--  <input type="submit">--}}
{{--</form>--}}

{{--<select>--}}
{{--  @foreach($inputs as $input)--}}
{{--    <option value="{{$input}}">{{$input}}</option>--}}
{{--  @endforeach--}}
{{--</select>--}}

<ul>
  @foreach($data as $item)
    <li class=@if($item == $day) "active" @endif>{{$item}}</li>
  @endforeach
</ul>

</body>
</html>
