<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="1">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>mail</th>
    <th>age</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['mail']}}</td>
    <td>{{$item['age']}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>
