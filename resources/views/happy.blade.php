@extends('layouts.helloapp')
@section('content')
@if (Auth::check())
    <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
    <p>ログインしていません(<a href="/public/login">ログイン</a>)<a href="/public/register">登録</a></p>
@endif
<h1>fsfsg</h1>
<table class="striped">
  <tr>

    <th>name</th>
    <th>mail</th>
    <th>age</th>

  </tr>
  @foreach ($items as $item)
  <tr>

    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>

  </tr>
  @endforeach
</table>

@endsection
