<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google icon font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="nav-wraper teal lighten-3">
      <div class="cotainer">
　　　　<!--ハンバーガーメニューの開くアイコン-->
        <a href="#" class="sidenav-trigger right" data-target="mobile-links">
          <i class="material-icons">menu</i>
        </a>
        <div class="menu">
          <ul class="right hide-on-med-and-down">
            <li><a href="add" class="grey-text text-darken-3">ADD USER</a></li>
            <li><a href="#" class="grey-text text-darken-3">Contents2</a></li>
            <li><a href="#" class="grey-text text-darken-3">Contents3</a></li>
            <li><a href="#" class="grey-text text-darken-3">Contents4</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-links">
　　<!--ハンバーガーメニューの閉じるアイコン-->
    <a href="#" class="sidenav-close " data-target="mobile-links">
      <i class="material-icons close-icon">close</i>
    </a>

    <div class="menu">
      <li><a href="add">ADD USER</a></li>
      <li><a href="#">Contents2</a></li>
      <li><a href="#">Contents3</a></li>
      <li><a href="#">Contents4</a></li>
    </div>
  </ul>

  <div class="container">
    @yield('content')
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
     $('.sidenav').sidenav({
       edge: 'right',
     });
   })
 </script>
</body>
</html>
