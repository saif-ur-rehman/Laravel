<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/local/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
