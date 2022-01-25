<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
?>

@extends('layouts.main')

@section('content')
  <form method="post"
    @if($user->isNew())
      action="{{route('users.store')}}"
    @else
      action="{{route('users.update', ['user' => $user])}}"
    @endif>
    @if(!$user->isNew())
      @method('PUT')
    @endif
  @csrf
  <input name="name" placeholder="имя" value="@if(!$user->isNew()){{$user->name}}@endif"><br>
  <input name="email" placeholder="email" value="@if(!$user->isNew()){{$user->email}}@endif"><br>
  <input type="password" name="password" placeholder="password"
         value="@if(!$user->isNew()){{$user->password}}@endif"><br>
  <input type="submit">
  </form>
@endsection
