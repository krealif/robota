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
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>