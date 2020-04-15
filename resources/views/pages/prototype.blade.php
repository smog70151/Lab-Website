<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="en" >
  <head>
    @include('layouts.header')
    @yield('prototype-header')
  </head>
  <body>
    @include('layouts.navbar')
    @yield('prototype-content')
    @include('layouts.location')
    @include('layouts.footer')
  </body>
</html>
