<div class="utility-bar" role="region" aria-label="Top utility bar">
  <div class="container">
    <div class="d-flex gap-2 align-items-center utility-desktop">
      <span class="opacity-75 fw-semibold">Information for:</span>
      <a class="utility-pill" href="#"><i class="bi bi-mortarboard"></i> Students</a>
      <a class="utility-pill" href="#"><i class="bi bi-people"></i> Faculty &amp; Staff</a>
      <a class="utility-pill" href="#"><i class="bi bi-geo-alt"></i> Visitors</a>
      <a class="utility-pill" href="#"><i class="bi bi-award"></i> Alumni</a>
    </div>
    <div class="d-flex gap-2 align-items-center ms-auto">
      <button class="a11y-btn" type="button">A-</button><button class="a11y-btn" type="button">A</button><button class="a11y-btn" type="button">A+</button>
      <a class="utility-pill" href="#">हिन्दी</a><a class="utility-pill" href="#">English</a><a class="utility-pill" href="#"><i class="bi bi-universal-access"></i> Screen Reader</a>
    </div>
  </div>
</div>
<header class="main-header" role="banner">
  <nav class="navbar navbar-expand-xl" id="primaryNav" aria-label="Primary navigation">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}" aria-label="IIM Kozhikode Home"><img src="https://iimk.ac.in/images/logo2.png" alt="Indian Institute of Management Kozhikode logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMegaMobile" aria-controls="mainMegaMobile" aria-label="Open menu"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse d-none d-xl-flex">
        <ul class="navbar-nav ms-auto align-items-xl-center gap-1">
          @foreach(config('iimk_navigation.main') as $item)
            @php $isActive = request()->is($item['active'] ?? trim($item['url'], '/')); @endphp
            @if(!empty($item['mega']))
              <li class="nav-item mega">
                <button class="nav-link mega-toggle {{ $isActive ? 'active' : '' }}" type="button">{{ $item['label'] }} <i class="bi bi-chevron-down small ms-1"></i></button>
                <div class="mega-menu"><div class="row g-4">
                  @foreach($item['mega'] as $group)
                    <div class="col-lg-4"><div class="mega-title">{{ $group['title'] }}</div>@foreach($group['links'] as $link)<a class="mega-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a>@endforeach</div>
                  @endforeach
                  <div class="col-lg-4"><div class="mega-card"><img src="{{ asset('assets/images/drone.jpg') }}" alt=""><div class="mega-title">Explore {{ $item['label'] }}</div><p class="mb-0 text-secondary">Quick access to key pages and resources.</p></div></div>
                </div></div>
              </li>
            @else
              <li class="nav-item"><a class="nav-link {{ $isActive ? 'active' : '' }}" href="{{ url($item['url']) }}">{{ $item['label'] }}</a></li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="offcanvas offcanvas-end" tabindex="-1" id="mainMegaMobile" aria-labelledby="mainMegaMobileLabel">
  <div class="offcanvas-header mobile-head"><h2 class="offcanvas-title h5" id="mainMegaMobileLabel">Menu</h2><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
  <div class="offcanvas-body">@foreach(config('iimk_navigation.main') as $item)<a class="mobile-menu-link" href="{{ url($item['url']) }}">{{ $item['label'] }}</a>@endforeach</div>
</div>
