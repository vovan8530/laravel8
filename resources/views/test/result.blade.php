<p>{{$id}}</p>
<ul>
  @foreach($request as $value)
    <li>{{$value}}</li>
  @endforeach
</ul>

{{--{{$counter}}--}}