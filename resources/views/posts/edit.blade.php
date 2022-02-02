<?php
/* @var \App\Models\Post $post */
?>

@extends('posts.main')

@section('content')
  <form
    @if(!isset($post))
    method="POST"
    action="{{route('posts.store')}}"
    @else
    method="PUT"
    action="{{route('posts.update', ['post' => $post])}}"
    @endif
  >
    @csrf
    <input type="text" name="title" placeholder="title" value="{{$post->title ?? old('title')}}"><br>
    <input type="text" name="description" placeholder="description"
           value="{{$post->description ?? old('description') }}"><br>
    <input type="text" name="text" placeholder="text" value="{{$post->text ?? old('text') }}"><br>
    <input type="text" name="date_publication" placeholder="date_publication"
           value="{{$post->date_publication ?? old('date_publication')}}"><br>
    <input type="submit">
  </form>
@endsection
