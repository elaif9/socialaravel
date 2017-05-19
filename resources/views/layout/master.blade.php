<!DOCTYPE html>
<html>
    <head>
      {{ HTML::style('css/bootstrap/css/bootstrap.min.css')}}
      <title>@yield('title')</title>
    </head>
    <body>
      <div class="container">
         @yield('content')
      </div>
    </body>
</html>
