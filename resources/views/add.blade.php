@extends('layouts.helloapp')
@section('content')
<h1 class="blue-text text-lighten-3">Regist People</h1>
  @if(count($errors) > 0)
    <p>error</p>
  @endif
  <form action="insert" method="post">
    @csrf
    name:<input type="text" name="name" id="" value="{{old('name')}}">
    {{-- @error('name') --}}
    mail:<input type="text" name="mail" id="" value="{{old('mail')}}">
    age:<input type="text" name="age" id="" value="{{old('age')}}">
    <button class="sb waves-effect waves-light btn-large" type="submit">regist</button>
  </form>
@endsection
