<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TestSample - @yield('title','CodeAnts')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="/css/app.css">
    <script src="main.js"></script>
</head>
<body>
@include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
          @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
    
</body>
</html>