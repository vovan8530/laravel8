<?php
/* @var \App\Models\Post $post */
?>

@extends('posts.main')

{{--@section('title')--}}
{{--  {{$post['title']}}--}}
{{--@endsection--}}

@section('content')
  <div class="info">
    <span class="date">{{$post->title}}</span>
    <span class="author">{{$post->description}}</span>
  </div>
  <div class="text">
    {{$post->text}}
  </div>
  <div class="text">
    {{$post->date_publication}}
  </div>
@endsection
