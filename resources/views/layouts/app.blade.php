<!doctype html>
<html lang="en-IN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'IIM Kozhikode')</title>
  <meta name="description" content="@yield('meta_description', 'Indian Institute of Management Kozhikode')">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/iimk.css') }}?v={{ time() }}">
  @stack('styles')
</head>
<body>
  <a href="#main" class="skip-link">Skip to main content</a>
  @include('partials.header')
  @yield('hero')
  @yield('inner_mobile_menu')
  <main id="main">@yield('content')</main>
  @include('partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/iimk.js') }}"></script>
  @stack('scripts')
  @if(request()->is('international-relations*'))
    @include('partials.ir-floating-enquiry')
@endif
</body>
</html>
