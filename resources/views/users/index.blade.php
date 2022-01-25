<?php
/* @var \App\Models\User[] $users */
/* @var \App\Models\User $user */
?>

@extends('layouts.main')

@section('content')
  <ul>
    @foreach ($users as $user)
      <li>{{$user->name}}
        <a href="{{route('users.edit', ['user' => $user])}}">edit</a>
        <a href="" class="delete" data-method="delete" data-delete-url="/users/{{ $user->id}}" data-element-id="{{ $user->id }}">
          delete
        </a>
      </li>
    @endforeach
  </ul>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ \EscapeWork\Assets\Facades\Asset::v('js/delete-item.js') }}"></script>
@endsection

