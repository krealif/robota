<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.header')
  @stack('style')
</head>
<body>
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')
  @stack('script')
</body>
</html>