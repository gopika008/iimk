@props([
    'items' => [],
    'active' => null
])

<div class="inner-mobile-nav d-lg-none">
    <div class="container">

        <button
            class="inner-mobile-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="innerMobilePanel"
        >
            <span>
                <i class="bi bi-grid-3x3-gap me-2"></i>
                Section Menu
            </span>

            <i class="bi bi-chevron-down inner-mobile-toggle-icon"></i>
        </button>

        <div
            class="inner-mobile-panel"
            id="innerMobilePanel"
            aria-label="Inner page navigation"
        >
            @foreach($items as $item)

                @if(!empty($item['children']))

                    @php
                        $hasActiveChild = collect($item['children'])
                            ->contains(fn($child) => ($child['key'] ?? null) === $active);

                        $isOpen = $hasActiveChild;
                    @endphp

                    <div class="inner-mobile-group {{ $isOpen ? 'open' : '' }}">
                        <button
                            class="inner-mobile-group-toggle"
                            type="button"
                            aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
                        >
                            <span>{{ $item['label'] }}</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>

                        <div class="inner-mobile-submenu">
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
                        class="inner-mobile-link {{ (($item['key'] ?? null) === $active) ? 'active' : '' }}"
                    >
                        <span>{{ $item['label'] }}</span>
                        <i class="bi bi-arrow-right-short"></i>
                    </a>

                @endif

            @endforeach
        </div>

    </div>
</div>