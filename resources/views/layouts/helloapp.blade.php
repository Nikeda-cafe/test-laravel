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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="{{ asset('/js/jquery.qrcode.min.js') }}"></script>
  <title>Document</title>
</head>
<body>
  <div id="app">
    @include('components.nav')
    <div class="container">
      {{-- {!! QrCode::size(400)->generate(route('https://google.com')) !!} --}}
      @yield('content')
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    jQuery(function(){
      jQuery('#qrcode').qrcode("https://google.com");
    })
    </script>
</body>
</html>
