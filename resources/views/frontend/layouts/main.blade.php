<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BlogLivester | {{$title}}</title>

  {{-- Bootstrap --}}
  <link rel="stylesheet" href="/css/bootstrap.css">

  {{-- Custom CSS --}}
  <link rel="stylesheet" href="/css/frontend.css">
</head>

<body>

  @include('frontend.layouts.navbar')
  @yield('container')
  @include('frontend.layouts.footer')

  <script src="/js/bootstrap.bundle.js" defer></script>
</body>

</html>