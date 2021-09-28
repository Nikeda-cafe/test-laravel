@extends('layouts.helloapp')
@section('content')

  <div class="row"><h1 class="blue-text text-lighten-3">EDIT USER</h1></div>
  @if(count($errors) > 0)
    <p>error</p>
  @endif
  <form action="/public/people/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$items->id}}">
    name:<input type="text" name="name" id="" value="{{$items->name}}">
    {{-- @error('name') --}}
    mail:<input type="text" name="mail" id="" value="{{$items->mail}}">
    age:<input type="text" name="age" id="" value="{{$items->age}}">
    <button class="sb waves-effect waves-light btn-large" type="submit">UPDATE</button>
  </form>

@endsection
