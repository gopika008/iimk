<a
    href="{{ $partner['url'] }}"
    target="_blank"
    rel="noopener"
    class="ir-partner-card"
>
    <div class="ir-partner-logo">
        <img
            src="{{ $partner['logo'] }}"
            alt="{{ $partner['name'] }} logo"
            loading="lazy"
        >
    </div>

    <div class="ir-partner-info">
        <h4>{{ $partner['name'] }}</h4>
        <span>{{ $partner['country'] }}</span>
    </div>

    <div class="ir-partner-action">
        <i class="bi bi-box-arrow-up-right"></i>
    </div>
</a>