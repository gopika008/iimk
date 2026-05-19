@extends('layouts.app')

@section('title', 'Programmes Offered | International Relations | IIM Kozhikode')

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
                <span>Programmes Offered</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-mortarboard"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Programmes Offered
            </h1>

            <p class="international-hero-sub">
                Explore full-time postgraduate programmes available for international students at IIM Kozhikode.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-programs-offered'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                   @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-programs-offered'
        ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-programmes-section">
                        <div class="section-kicker">International Students</div>
                        <h2 class="section-heading">Programmes for International Students</h2>

                        <p class="lead-copy">
                            IIM Kozhikode offers rigorous, globally relevant postgraduate programmes designed to prepare
                            students for leadership roles across industry, finance, management, entrepreneurship and people-facing sectors.
                        </p>

                        <div class="ir-programme-feature">
                            <div class="ir-programme-feature-icon">
                                <i class="bi bi-globe2"></i>
                            </div>

                            <div>
                                <h3>Learn in a globally connected academic environment</h3>
                                <p>
                                    International students become part of a learning ecosystem that combines academic depth,
                                    industry relevance, peer learning, leadership development and cross-cultural exposure.
                                </p>
                            </div>
                        </div>

                        <div class="ir-programme-grid mt-4">

                            <article class="ir-programme-card">
                                <div class="ir-programme-card-top">
                                    <div class="ir-programme-icon">
                                        <i class="bi bi-journal-richtext"></i>
                                    </div>

                                    <div class="ir-programme-tag">
                                        Flagship Programme
                                    </div>
                                </div>

                                <h3>Post Graduate Programme (PGP)</h3>

                                <p>
                                    The Post-graduate Programme in Management is a flagship educational programme preparing
                                    young and dynamic graduates for senior level positions in industry and other sectors.
                                </p>

                                <p>
                                    The PGP programme lays greater emphasis on knowledge assimilation and its effective use
                                    than on mere reproduction. Instructors use multiple pedagogical tools including lectures,
                                    case studies, exercises, role-plays, simulation and video shows to facilitate effective learning.
                                </p>

                                <p>
                                    The continuous evaluation system is rigorous, comprising quizzes, assignments, mid-term
                                    and end-term examinations. The programme also emphasizes library-based self-study,
                                    group work, open-ended discussions and real-life projects.
                                </p>

                                <div class="ir-programme-footer">
                                    <span>
                                        <i class="bi bi-stars"></i>
                                        Dream · Innovate · Achieve
                                    </span>

                                    <a href="https://iimk.ac.in/academic-programmes/pgp" target="_blank" rel="noopener">
                                        Read More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="ir-programme-card">
                                <div class="ir-programme-card-top">
                                    <div class="ir-programme-icon">
                                        <i class="bi bi-cash-coin"></i>
                                    </div>

                                    <div class="ir-programme-tag">
                                        Finance Focused
                                    </div>
                                </div>

                                <h3>Post Graduate Programme in Finance (PGP-Finance)</h3>

                                <p>
                                    PGP-Finance is a two-year full-time masters level programme designed to equip students
                                    to pursue careers in the financial world, including corporate finance, investment banking
                                    and wealth management.
                                </p>

                                <p>
                                    Developed in consultation with stakeholders in the core finance and allied services industry,
                                    the programme aspires to meet the significant unmet industry need in India and South Asia.
                                </p>

                                <p>
                                    The programme is benchmarked against similar global programmes in terms of content and coverage,
                                    while providing strong grounding in the Indian context through immersive courses, interaction
                                    with industry leaders and on-site or trading floor visits.
                                </p>

                                <div class="ir-programme-footer">
                                    <span>
                                        <i class="bi bi-graph-up-arrow"></i>
                                        Finance · Markets · Leadership
                                    </span>

                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Finance" target="_blank" rel="noopener">
                                        Read More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="ir-programme-card ir-programme-card-wide">
                                <div class="ir-programme-card-top">
                                    <div class="ir-programme-icon">
                                        <i class="bi bi-palette"></i>
                                    </div>

                                    <div class="ir-programme-tag">
                                        Liberal Studies & Management
                                    </div>
                                </div>

                                <h3>Post Graduate Programme in Liberal Studies &amp; Management (PGP-LSM)</h3>

                                <p>
                                    Management education draws heavily from scientific methods of fact-finding in controlled
                                    environments. In reality, business is often done in environments where judgments are made
                                    with messy, incomplete and incoherent data.
                                </p>

                                <p>
                                    The scientific method of teaching and learning alone is not sufficient for preparing future
                                    managers. In line with its vision to innovate and excel in business education, IIM Kozhikode
                                    introduced the Post Graduate Programme in Liberal Studies &amp; Management.
                                </p>

                                <p>
                                    PGP-LSM is a two-year full-time masters level programme designed to prepare participants
                                    for managerial roles in marketing, human resource management, media, social enterprise,
                                    hospitality, healthcare and other people-facing roles.
                                </p>

                                <p>
                                    The programme aims to develop a holistic perspective and diversity of thought by helping
                                    future managers acquire emotional, cultural and creative intelligence.
                                </p>

                                <div class="ir-programme-footer">
                                    <span>
                                        <i class="bi bi-lightbulb"></i>
                                        Diversity of Thought
                                    </span>

                                    <a href="https://iimk.ac.in/academic-programmes/PGPLSM" target="_blank" rel="noopener">
                                        Read More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                        </div>
                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection