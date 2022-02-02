@extends('layout.app')

@section('title', $title)
@section('aside', $aside)

@section('content')
  <p>{{ $city ?? 'Moskow' }}</p>
  @foreach($location as $item)
    <p>{{$item['country'] ?? 'Chech'}}</p>
    <p>{{$item['city'] ?? 'Praga'}}</p>
  @endforeach

  <p>{{ $year ?? date_format(now(), 'Y')}}</p>
  <p>{!!$str!!}</p>

  @php
    //phpinfo()
  @endphp
@endsection