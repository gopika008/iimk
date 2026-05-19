@extends('layouts.app')

@section('title', 'Events | International Relations | IIM Kozhikode')

@section('content')

<section class="international-hero">
    <div class="international-hero-overlay"></div>

    <div class="container position-relative">
        <div class="international-hero-content">
            <div class="breadcrumb-mini international-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ url('/international-relations') }}">International Relations</a>
                <span class="mx-2">/</span>
                <span>Events</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-images"></i>
                Student Exchange
            </div>

            <h1 class="international-hero-title">
                Events
            </h1>

            <p class="international-hero-sub">
                Explore student-led events and special activities organised for international students at IIM Kozhikode.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-events'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
               @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-events'
                ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-events-section">
                        <div class="section-kicker">Campus & Culture</div>
                        <h2 class="section-heading">International Relations Events</h2>

                        <p class="lead-copy">
                            A large number of events are organised by students throughout the year. In addition,
                            special events are organised for international students to help them experience campus life,
                            cultural exchange and community engagement.
                        </p>

                        <div class="ir-events-feature">
                            <div class="ir-events-feature-icon">
                                <i class="bi bi-camera"></i>
                            </div>

                            <div>
                                <span>Photo Gallery</span>
                                <h3>Moments from International Student Life</h3>
                                <p>
                                    Click on any event card below to view more photos from the official gallery.
                                </p>
                            </div>
                        </div>

                        <div class="ir-events-grid mt-4">

                            <a
                                href="https://iimk.ac.in/gallery/ir-events/Calicut-Marathon"
                                target="_blank"
                                rel="noopener"
                                class="ir-event-card ir-event-card-large"
                            >
                                <div class="ir-event-image">
                                    <img
                                        src="https://iimk.ac.in/uploads/photogallery/medium/60077866_2024-08-09_03-26-25.jpeg"
                                        alt="Calicut Marathon"
                                        loading="lazy"
                                    >
                                </div>

                                <div class="ir-event-overlay">
                                    <div class="ir-event-badge">
                                        <i class="bi bi-eye"></i>
                                        View Photos
                                    </div>

                                    <div>
                                        <span>Student Event</span>
                                        <h3>Calicut Marathon</h3>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/gallery/ir-events/Cultual-Events-on-Campus"
                                target="_blank"
                                rel="noopener"
                                class="ir-event-card"
                            >
                                <div class="ir-event-image">
                                    <img
                                        src="https://iimk.ac.in/uploads/photogallery/medium/462712352_2024-08-09_03-21-13.JPG"
                                        alt="Cultural Events on Campus"
                                        loading="lazy"
                                    >
                                </div>

                                <div class="ir-event-overlay">
                                    <div class="ir-event-badge">
                                        <i class="bi bi-eye"></i>
                                        View Photos
                                    </div>

                                    <div>
                                        <span>Campus Life</span>
                                        <h3>Cultural Events on Campus</h3>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/gallery/ir-events/International-Day-for-IE-Students"
                                target="_blank"
                                rel="noopener"
                                class="ir-event-card"
                            >
                                <div class="ir-event-image">
                                    <img
                                        src="https://iimk.ac.in/uploads/photogallery/medium/468011413_2024-08-09_03-16-49.JPG"
                                        alt="International Day for IE Students"
                                        loading="lazy"
                                    >
                                </div>

                                <div class="ir-event-overlay">
                                    <div class="ir-event-badge">
                                        <i class="bi bi-eye"></i>
                                        View Photos
                                    </div>

                                    <div>
                                        <span>International Students</span>
                                        <h3>International Day for IE Students</h3>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/gallery/ir-events/Heritage-Trip-for-IE-Students"
                                target="_blank"
                                rel="noopener"
                                class="ir-event-card ir-event-card-wide"
                            >
                                <div class="ir-event-image">
                                    <img
                                        src="https://iimk.ac.in/uploads/photogallery/medium/1376245015_2024-08-09_03-14-23.jpg"
                                        alt="Heritage Trip for IE Students"
                                        loading="lazy"
                                    >
                                </div>

                                <div class="ir-event-overlay">
                                    <div class="ir-event-badge">
                                        <i class="bi bi-eye"></i>
                                        View Photos
                                    </div>

                                    <div>
                                        <span>Heritage Experience</span>
                                        <h3>Heritage Trip for IE Students</h3>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@include('partials.ir-floating-enquiry')

@endsection