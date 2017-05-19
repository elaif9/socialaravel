<!DOCTYPE html>
<html>
    <head>
       <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <title>@yield('title')</title>
    </head>
    <body>
      @include('includes.header')
      <div class="container">
         @yield('content')
      </div>
    </body>
</html>
