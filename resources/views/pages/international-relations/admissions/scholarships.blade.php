@extends('layouts.app')

@section('title', 'Scholarships | International Relations | IIM Kozhikode')

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
                <span>Scholarships</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-award"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Scholarships
            </h1>

            <p class="international-hero-sub">
                Merit-based scholarships for outstanding international students across IIM Kozhikode’s MBA programmes.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-scholarships'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                         @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-scholarships'
        ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-scholarship-section">
                        <div class="section-kicker">International Students</div>
                        <h2 class="section-heading">Scholarships for International Students</h2>

                        <p class="lead-copy">
                            IIM Kozhikode offers merit-based scholarships to outstanding international students
                            across its MBA programmes. Scholarships are awarded in the form of fee waivers.
                        </p>

                        <div class="ir-scholarship-hero">
                            <div class="ir-scholarship-hero-icon">
                                <i class="bi bi-stars"></i>
                            </div>

                            <div>
                                <span>Fee Waiver Support</span>
                                <h3>50% and 25% Tuition Fee Waivers</h3>
                                <p>
                                    Scholarships are awarded based on academic performance, interview performance
                                    and socioeconomic background.
                                </p>
                            </div>
                        </div>

                        <div class="ir-scholarship-block mt-4">
                            <div class="ir-scholarship-block-header">
                                <div>
                                    <span>Per 10 Students</span>
                                    <h3>Scholarship Distribution</h3>
                                </div>
                                <p>
                                    Distribution of 50% and 25% fee waivers across international student admissions.
                                </p>
                            </div>

                            <div class="ir-scholarship-grid">

                                <article class="ir-scholarship-program-card">
                                    <div class="ir-scholarship-program-title">
                                        <i class="bi bi-journal-richtext"></i>
                                        <h4>PGP</h4>
                                    </div>

                                    <div class="ir-waiver-row">
                                        <div class="ir-waiver-card ir-waiver-primary">
                                            <span>50% Fee Waiver</span>
                                            <strong>3</strong>
                                            <small>Students</small>
                                        </div>

                                        <div class="ir-waiver-card">
                                            <span>25% Fee Waiver</span>
                                            <strong>6</strong>
                                            <small>Students</small>
                                        </div>
                                    </div>
                                </article>

                                <article class="ir-scholarship-program-card">
                                    <div class="ir-scholarship-program-title">
                                        <i class="bi bi-cash-coin"></i>
                                        <h4>PGP-Finance</h4>
                                    </div>

                                    <div class="ir-waiver-row">
                                        <div class="ir-waiver-card ir-waiver-primary">
                                            <span>50% Fee Waiver</span>
                                            <strong>1</strong>
                                            <small>Student</small>
                                        </div>

                                        <div class="ir-waiver-card">
                                            <span>25% Fee Waiver</span>
                                            <strong>2</strong>
                                            <small>Students</small>
                                        </div>
                                    </div>
                                </article>

                                <article class="ir-scholarship-program-card">
                                    <div class="ir-scholarship-program-title">
                                        <i class="bi bi-palette"></i>
                                        <h4>PGP-LSM</h4>
                                    </div>

                                    <div class="ir-waiver-row">
                                        <div class="ir-waiver-card ir-waiver-primary">
                                            <span>50% Fee Waiver</span>
                                            <strong>1</strong>
                                            <small>Student</small>
                                        </div>

                                        <div class="ir-waiver-card">
                                            <span>25% Fee Waiver</span>
                                            <strong>2</strong>
                                            <small>Students</small>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>

                        <div class="ir-scholarship-two-col mt-4">

                            <article class="ir-scholarship-info-card">
                                <div class="ir-scholarship-info-head">
                                    <div class="ir-scholarship-info-icon">
                                        <i class="bi bi-clipboard-data"></i>
                                    </div>
                                    <div>
                                        <span>Evaluation</span>
                                        <h3>Scholarship Selection Criteria</h3>
                                    </div>
                                </div>

                                <div class="ir-weightage-list">
                                    <div class="ir-weightage-item">
                                        <div class="ir-weightage-percent">50%</div>
                                        <div>
                                            <strong>GMAT/CAT Score Performance</strong>
                                            <p>Weightage based on entrance score performance.</p>
                                        </div>
                                    </div>

                                    <div class="ir-weightage-item">
                                        <div class="ir-weightage-percent">30%</div>
                                        <div>
                                            <strong>Personal Interview</strong>
                                            <p>Performance in the personal interview conducted by IIMK.</p>
                                        </div>
                                    </div>

                                    <div class="ir-weightage-item">
                                        <div class="ir-weightage-percent">20%</div>
                                        <div>
                                            <strong>Socioeconomic Background</strong>
                                            <p>Preference for candidates from limited financial means.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="ir-scholarship-info-card">
                                <div class="ir-scholarship-info-head">
                                    <div class="ir-scholarship-info-icon">
                                        <i class="bi bi-send-check"></i>
                                    </div>
                                    <div>
                                        <span>How to Apply</span>
                                        <h3>Scholarship Application Process</h3>
                                    </div>
                                </div>

                                <div class="ir-process-list">
                                    <div class="ir-process-item">
                                        <span>01</span>
                                        <p>
                                            The Admission Office will issue the offer letter, and the International Relations Office
                                            will share the scholarship application form.
                                        </p>
                                    </div>

                                    <div class="ir-process-item">
                                        <span>02</span>
                                        <p>
                                            Candidates must submit the completed scholarship form along with the seat confirmation payment.
                                        </p>
                                    </div>

                                    <div class="ir-process-item">
                                        <span>03</span>
                                        <p>
                                            Scholarship awards will be finalized within 15 days after the close of admissions.
                                        </p>
                                    </div>
                                </div>
                            </article>

                        </div>

                        <div class="ir-scholarship-policy mt-4">
                            <div class="ir-scholarship-policy-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <div>
                                <h3>Eligibility &amp; Disbursement</h3>

                                <ul>
                                    <li>Only foreign nationals are eligible to apply.</li>
                                    <li>Scholarships are awarded in the form of a 50% or 25% tuition fee waiver.</li>
                                </ul>

                                <p>
                                    As per IIMK policy, a student cannot hold more than one scholarship/stipend in the same
                                    academic year. If a student is awarded another scholarship from any source, they must
                                    return the IIMK scholarship or the scholarship from the other agency, as applicable.
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