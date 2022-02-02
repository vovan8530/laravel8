<?php
/* @var \App\Models\Post[] $posts */
/* @var \App\Models\Post $post */
?>

@extends('posts.main')

@section('title')
  Title from Posts
@endsection

@section('content')
  @foreach($posts as $key => $post)
    <div class="post">
      <a href="{{route('posts.show', [$post])}}"><h2>{{$post->title}}</h2></a>
      <p>{{$post->description}}</p>
      <p>{{$post->text}}</p>
      <p>{{$post->date_publication}}</p>
    </div>
  @endforeach
@endsection
