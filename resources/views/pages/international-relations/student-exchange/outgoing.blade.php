@extends('layouts.app')

@section('title', 'Outgoing Student Exchange | International Relations | IIM Kozhikode')

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
                <span>Outgoing Student Exchange</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-arrow-up-right-circle"></i>
                Student Exchange
            </div>

            <h1 class="international-hero-title">
                Outgoing Student Exchange
            </h1>

            <p class="international-hero-sub">
                Enabling IIM Kozhikode students to experience global classrooms, international perspectives
                and academic exchange opportunities at partner institutions.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-outgoing-student-exchange'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
             @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-outgoing-student-exchange'
                ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-outgoing-section">
                        <div class="section-kicker">Student Exchange</div>
                        <h2 class="section-heading">Outgoing Student Exchange</h2>

                        <p class="lead-copy">
                            The objective of IIMK’s International Exchange Programme is to provide opportunities
                            for IIMK’s PGP participants and students from partner institutions to broaden their
                            horizon and international perspective.
                        </p>

                        <div class="ir-outgoing-highlight">
                            <div class="ir-outgoing-highlight-icon">
                                <i class="bi bi-airplane-engines"></i>
                            </div>

                            <div>
                                <span>Global Exposure</span>
                                <h3>Broaden academic and international perspectives</h3>
                                <p>
                                    The programme helps students familiarize themselves with emerging global opportunities
                                    and exchange ideas and experiences with counterparts from other countries.
                                </p>
                            </div>
                        </div>

                        <div class="ir-outgoing-grid mt-4">

                            <article class="ir-outgoing-card">
                                <div class="ir-outgoing-card-head">
                                    <div class="ir-outgoing-card-icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                    <h3>Eligibility</h3>
                                </div>

                                <ul class="ir-clean-list">
                                    <li>
                                        A minimum aggregate CGPA, Terms I and II of PGP, of <strong>2.5</strong>.
                                    </li>
                                    <li>
                                        No deficit credit points, DCP’s, in Terms I and II.
                                    </li>
                                    <li>
                                        Students placed on academic probation/DPP/any disciplinary action at the time
                                        of registering for FOREX programme are not eligible for International Exchange.
                                    </li>
                                </ul>
                            </article>

                            <article class="ir-outgoing-card">
                                <div class="ir-outgoing-card-head">
                                    <div class="ir-outgoing-card-icon">
                                        <i class="bi bi-stars"></i>
                                    </div>
                                    <h3>Salient Features</h3>
                                </div>

                                <ul class="ir-clean-list">
                                    <li>
                                        Students normally proceed on international exchange during the
                                        <strong>fifth term</strong> of their PGP programme.
                                    </li>
                                    <li>
                                        The process for selection of students will be initiated by the International
                                        Relations Office during the end of Term III.
                                    </li>
                                    <li>
                                        The selection process is highly competitive with <strong>merit</strong> being
                                        the sole criterion.
                                    </li>
                                    <li>
                                        Students should pay the required tuition fees for Term V at IIMK.
                                        However, they need not pay any tuition fees at the partner institutions.
                                    </li>
                                    <li>
                                        Other expenses related to books, reading materials, security deposits,
                                        accommodation, insurance, travel etc., have to be borne by the students.
                                    </li>
                                </ul>
                            </article>

                        </div>

                        <div class="ir-outgoing-process mt-4">
                            <div class="ir-outgoing-process-header">
                                <div>
                                    <span>Exchange Journey</span>
                                    <h3>How the outgoing exchange process works</h3>
                                </div>
                                <p>
                                    A simple overview of the key stages students should expect.
                                </p>
                            </div>

                            <div class="ir-outgoing-step-grid">

                                <div class="ir-outgoing-step">
                                    <div class="ir-outgoing-step-no">01</div>
                                    <h4>Eligibility Review</h4>
                                    <p>
                                        Students must satisfy academic and disciplinary eligibility requirements.
                                    </p>
                                </div>

                                <div class="ir-outgoing-step">
                                    <div class="ir-outgoing-step-no">02</div>
                                    <h4>Selection Process</h4>
                                    <p>
                                        The International Relations Office initiates the selection process around the end of Term III.
                                    </p>
                                </div>

                                <div class="ir-outgoing-step">
                                    <div class="ir-outgoing-step-no">03</div>
                                    <h4>Partner Institution Allocation</h4>
                                    <p>
                                        Eligible students participate in a merit-based allocation process for international partner institutions.
                                    </p>
                                </div>

                                <div class="ir-outgoing-step">
                                    <div class="ir-outgoing-step-no">04</div>
                                    <h4>Exchange Term</h4>
                                    <p>
                                        Selected students normally proceed for international exchange during Term V of the PGP programme.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="ir-outgoing-fee-note mt-4">
                            <div class="ir-outgoing-fee-icon">
                                <i class="bi bi-wallet2"></i>
                            </div>

                            <div>
                                <h3>Fee and Expense Note</h3>
                                <p>
                                    Students should pay the required tuition fees for Term V at IIMK. They need not pay
                                    tuition fees at the partner institution. However, expenses related to books, reading
                                    materials, security deposits, accommodation, insurance, travel and other related costs
                                    must be borne by the students.
                                </p>
                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@include('partials.ir-floating-enquiry')

@endsection