<!DOCTYPE html>
<html>
    <head>
       <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
       <link href="{{ asset('css/main.css') }}" rel="stylesheet">
      <title>@yield('title')</title>
    </head>
    <body>
      @include('includes.header')
      <div class="container">
         @yield('content')
      </div>
      <script src="{{ asset('jquery/jquery-1.12.0.min.js') }}"></script>
      <script src="{{ asset('jquery/jquery-migrate-1.2.1.min.js') }}"></script>
      <script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('jquery/app.js') }}"></script>
    </body>
</html>