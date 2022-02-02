@extends('posts.main')

@section('error-title')
     Страницы с {{$id}} не существует!
@endsection

@section('error')
    <div class="text">
      Извините, страницы с {{$id}} не существует!
    </div>
@endsection
