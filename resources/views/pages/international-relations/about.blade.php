@extends('layouts.app')

@section('title', 'International Relations | IIM Kozhikode')

@section('content')

<section class="international-hero">
    <div class="international-hero-overlay"></div>

    <div class="container position-relative">
        <div class="international-hero-content">

            <div class="breadcrumb-mini international-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-2">/</span>
                <span>International Relations</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-globe2"></i>
                Global Engagement
            </div>

            <h1 class="international-hero-title">
                International Relations
            </h1>

            <p class="international-hero-sub">
                Connecting IIM Kozhikode with the world through global partnerships,
                student exchange, research collaboration and cross-cultural learning.
            </p>

            <div class="international-hero-actions">
                <a href="#international-office" class="international-hero-btn">
                    Explore International Office
                    <i class="bi bi-arrow-down-short"></i>
                </a>
            </div>

        </div>
    </div>
</section>
@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'international-about'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

    <div class="col-lg-3">
        @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'international-about'
        ])
    </div>

    <div class="col-lg-9">
        <main class="ir-home-card">

            <section class="ir-office-section" id="international-office">

                <div class="ir-office-copy">
                    <div class="section-kicker">Global Engagement</div>
                    <h2 class="section-heading">International Relations Office</h2>

                    <p class="lead-copy">
                        The International Relations Office coordinates and supports international student admissions,
                        student exchanges, research opportunities, summer schools, immersion programs, and other
                        short-term programmes.
                    </p>

                    <p>
                        The activities of the International Relations Office foster mutually beneficial scholarly and
                        social engagements between students and faculty members across the globe. These engagements
                        encourage knowledge sharing on best practices in research, teaching, and learning experiences,
                        while also building an understanding of business practices and conventions in different countries.
                    </p>

                    <p>
                        They further enhance appreciation of the social, political, economic, and cultural dynamics
                        that impact global business operations.
                    </p>

                    <div class="ir-stat-grid">
                        <div class="ir-stat-card">
                            <strong>60</strong>
                            <span>Global University Partnerships</span>
                        </div>

                        <div class="ir-stat-card">
                            <strong>Global</strong>
                            <span>Student &amp; Faculty Engagement</span>
                        </div>
                    </div>

                    <div class="ir-global-note">
                        <i class="bi bi-globe2"></i>
                        <p>
                            IIM Kozhikode's commitment to internationalization is reflected through strategic
                            partnerships with 60 global universities and a strong international presence within
                            its student body.
                        </p>
                    </div>
                </div>

                <div class="ir-video-card mt-4">
                    <div class="ir-video-label">
                        <i class="bi bi-play-circle"></i>
                        Campus Experience
                    </div>

                    <div class="ir-video-frame">
                        <iframe
                            src="https://www.youtube.com/embed/ecD5gJMPIpw"
                            title="IIMK Campus Tour | 360 degree | IIM Kozhikode"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            referrerpolicy="strict-origin-when-cross-origin">
                        </iframe>
                    </div>
                </div>

            </section>

            <section class="ir-opportunities-section">
                <div class="section-kicker">What We Support</div>
                <h2 class="section-heading">International Opportunities</h2>

                <div class="ir-opportunity-grid">

                    <article class="ir-opportunity-card">
                        <div class="ir-opportunity-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h3>International Admissions</h3>
                        <p>
                            Supporting international student admissions and helping global learners connect with IIMK.
                        </p>
                    </article>

                    <article class="ir-opportunity-card">
                        <div class="ir-opportunity-icon">
                            <i class="bi bi-arrow-left-right"></i>
                        </div>
                        <h3>Student Exchanges</h3>
                        <p>
                            Enabling students to experience global classrooms, diverse academic cultures and international networks.
                        </p>
                    </article>

                    <article class="ir-opportunity-card">
                        <div class="ir-opportunity-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <h3>Research Opportunities</h3>
                        <p>
                            Encouraging research collaboration and scholarly exchange with partner institutions worldwide.
                        </p>
                    </article>

                    <article class="ir-opportunity-card">
                        <div class="ir-opportunity-icon">
                            <i class="bi bi-airplane"></i>
                        </div>
                        <h3>Immersion Programmes</h3>
                        <p>
                            Coordinating summer schools, immersion programmes and short-term international learning experiences.
                        </p>
                    </article>

                </div>
            </section>

        </main>
    </div>

</div>
    </div>
</section>

@endsection