@extends('layouts.app')

@section('title', 'Deans & Administration | IIM Kozhikode')

@section('content')

    <section class="about-hero">
        <div class="container">
            <div class="breadcrumb-mini">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ url('/about') }}">About IIMK</a>
                <span class="mx-2">/</span>
                <span>Governance</span>
                <span class="mx-2">/</span>
                <span>Deans & Administration</span>
            </div>

            <h1 class="hero-title">Deans & Administration</h1>
            <p class="hero-sub">
                Our deans play a pivotal role in shaping academic excellence, strategic initiatives, executive education,
                institutional development and outreach at IIM Kozhikode.
            </p>
            <div class="gold-line"></div>
        </div>
    </section>

    @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'deans'])

    <section class="page-wrap">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-3">
                    @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'deans'])
                </div>

                <div class="col-lg-9">
                    <main class="content-card">

                        <section class="deans-intro-section">
                            <div class="section-kicker">Governance</div>
                            <h2 class="section-heading">Academic and Administrative Leadership</h2>

                            <p class="lead-copy">
                                The deans and administrative leaders of IIM Kozhikode guide the Institute’s academic,
                                executive education, faculty development and campus initiatives.
                            </p>

                            <p>
                                Through collaborative leadership, they support programme delivery, faculty administration,
                                institutional growth, global engagement and continuous improvement across the Institute.
                            </p>
                        </section>

                        <section class="deans-leadership-section">
                            <div class="section-kicker">Leadership</div>
                            <h2 class="section-heading">Deans & Administration</h2>

                            <div class="deans-leader-grid">

                                @foreach($members as $member)

                                                    <article class="dean-card-modern 
                                    {{ $loop->last ? 'dean-card-wide' : '' }}">

                                                        <div class="dean-photo-modern">
                                                            <img src="{{ asset('storage/' . $member->image) }}"
                                                                alt="{{ $member->role }}">
                                                        </div>

                                                        <div class="dean-info-modern">

                                                            <div class="dean-icon-bubble">
                                                                <i class="bi {{ $member->icon ?? 'bi-people' }}"></i>
                                                            </div>

                                                            <div class="dean-role">
                                                                {{ strtoupper($member->role) }}
                                                            </div>

                                                            <div class="dean-role-line"></div>

                                                            <div class="dean-name">
                                                                {{ $member->name }}
                                                            </div>

                                                            <p>
                                                                 {!! $member->description !!}
                                                            </p>

                                                        </div>

                                                    </article>

                                @endforeach

                            </div>
                        </section>

                        <section class="deans-quote-section">
                            <div class="deans-quote-box">
                                <div class="deans-quote-mark">“</div>
                                <blockquote>
                                    Our leadership is committed to nurturing talent, advancing knowledge and creating impact
                                    for a better tomorrow.
                                </blockquote>
                                <div class="gold-line"></div>
                            </div>
                        </section>

                    </main>
                </div>

            </div>
        </div>
    </section>

@endsection