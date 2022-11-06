<!DOCTYPE html>
<html lang="en">
<head>
  @include('page.partials.head')
  @stack('style')
</head>
<body>
  @include('page.partials.navbar')
  @yield('content')
  @include('page.partials.footer')
  @stack('script')
</body>
</html>