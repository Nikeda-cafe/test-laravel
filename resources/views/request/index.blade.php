<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if ($name)
    <h1>{{$name}}</h1>
  @endif
  <form action="request" method="POST">
    @csrf
    name:<input type="text" name="name" id="">
    <input type="submit" value="送信">
  </form>
</body>
</html>
