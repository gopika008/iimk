@props([
  'items' => [],
  'title' => 'Section Menu',
  'eyebrow' => 'About IIMK',
  'active' => null
])

<nav class="sidebar-nav-modern" aria-label="{{ $eyebrow }} navigation">
  <div class="sidebar-card">

    <div class="sidebar-card-top">
      <span class="sidebar-eyebrow">{{ $eyebrow }}</span>
      <h2 class="sidebar-title">{{ $title }}</h2>
    </div>

    @foreach($items as $item)

      @if(!empty($item['children']))
        @php
          $hasActiveChild = collect($item['children'])
            ->contains(fn($child) => ($child['key'] ?? null) === $active);

          // Only open the group that contains the active child
          $isOpen = $hasActiveChild;
        @endphp

        <div class="side-group-modern {{ $isOpen ? 'open' : '' }}">
          <button
            class="side-link-modern side-toggle {{ $isOpen ? 'active-parent' : '' }}"
            type="button"
            aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
          >
            <span>{{ $item['label'] }}</span>
            <i class="bi bi-chevron-down"></i>
          </button>

          <div class="side-submenu-modern">
            @foreach($item['children'] as $child)
              <a
                href="{{ $child['url'] }}"
                class="{{ (($child['key'] ?? null) === $active) ? 'active' : '' }}"
              >
                {{ $child['label'] }}
              </a>
            @endforeach
          </div>
        </div>

      @else
        <a
          href="{{ $item['url'] }}"
          class="side-link-modern {{ (($item['key'] ?? null) === $active) ? 'active' : '' }}"
        >
          <span>{{ $item['label'] }}</span>
          <i class="bi bi-arrow-right-short"></i>
        </a>
      @endif

    @endforeach

    <div class="side-cta">
      <div class="fw-bold text-primary mb-1">Discover IIMK</div>
      <p class="small text-secondary mb-3">
        Take a glimpse of our campus, culture and values.
      </p>
      <a href="#video" class="pill-btn py-2 px-3 small">
        Campus Tour <i class="bi bi-play-fill"></i>
      </a>
    </div>

  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.side-toggle').forEach(function (button) {
    button.addEventListener('click', function () {
      const currentGroup = button.closest('.side-group-modern');

      document.querySelectorAll('.side-group-modern').forEach(function (group) {
        if (group !== currentGroup) {
          group.classList.remove('open');

          const toggle = group.querySelector('.side-toggle');
          if (toggle) {
            toggle.classList.remove('active-parent');
            toggle.setAttribute('aria-expanded', 'false');
          }
        }
      });

      const isOpen = currentGroup.classList.toggle('open');
      button.classList.toggle('active-parent', isOpen);
      button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });
});
</script>