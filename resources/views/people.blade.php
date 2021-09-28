@extends('layouts.helloapp')
@section('content')
<h1 class="blue-text text-lighten-3">Show People</h1>
<table class="striped">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>mail</th>
    <th>age</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
  </tr>
  @endforeach
</table>
{{$items->links('vendor.pagination.materialize')}}
{{-- <div class="row">
  <a href="add">
    <button class="light-green lighten-2 waves-effect waves-light btn-large" type="submit">add user</button>
  </a>
</div> --}}
@endsection
