<!DOCTYPE html>
<html lang="en">
  <head>
    @include('page.partials.head')
    @stack('styles')
  </head>
  <body>
    @include('page.partials.navbar')
    @yield('content')
    @include('page.partials.footer')
    @stack('scripts')
  </body>
</html>