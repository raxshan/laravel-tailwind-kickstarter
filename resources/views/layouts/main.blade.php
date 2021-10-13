<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
        <title>Kick Start - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine-ie11.min.js" defer></script>

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"
    ></script>
  </head>

  <body>
    <!-- @section('sidebar')
        This is the master sidebar.
    @show -->
     
    
  <div class="flex flex-col min-h-screen">
    @include('layouts.header')
    
    @yield('content')

  </div>
  </body>
</html>
