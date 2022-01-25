<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
?>

@extends('layouts.main')

@section('content')
  <p>{{$user->id}}</p>
  <p>{{$user->name}}</p>
  <p>{{$user->email}}</p>
@endsection
