@extends('layouts.app')

@section('title', 'Apply Online | International Relations | IIM Kozhikode')

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
                <span>Apply Online</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-send-check"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Apply Online
            </h1>

            <p class="international-hero-sub">
                Start your international admissions application for IIM Kozhikode through the official online registration portal.
            </p>
        </div>
    </div>
</section>
@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-apply-online'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                              @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-apply-online'
        ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-apply-section">
                        <div class="section-kicker">International Admissions</div>
                        <h2 class="section-heading">Apply Online</h2>

                        <p class="lead-copy">
                            International candidates can submit their application through the official IIM Kozhikode
                            International Application Registration portal.
                        </p>

                        <div class="ir-apply-hero-card">
                            <div class="ir-apply-hero-icon">
                                <i class="bi bi-globe2"></i>
                            </div>

                            <div class="ir-apply-hero-content">
                                <span>Official Application Portal</span>
                                <h3>International Application Registration</h3>
                                <p>
                                    Complete your online registration and submit the required details through the
                                    official IIM Kozhikode admissions portal.
                                </p>

                                <a
                                    href="https://iimk.ac.in/apps/Admission/InternationalApplication/Registration/Registration"
                                    target="_blank"
                                    rel="noopener"
                                    class="ir-apply-main-btn"
                                >
                                    Apply Online Now
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ir-apply-steps mt-4">

                            <article class="ir-apply-step-card">
                                <div class="ir-apply-step-number">01</div>
                                <div>
                                    <h3>Review Eligibility</h3>
                                    <p>
                                        Check the eligibility requirements, educational qualifications, valid test scores
                                        and English language proficiency criteria before applying.
                                    </p>

                                    <a href="{{ url('/international-relations/admissions/eligibility') }}">
                                        View Eligibility
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="ir-apply-step-card">
                                <div class="ir-apply-step-number">02</div>
                                <div>
                                    <h3>Keep Documents Ready</h3>
                                    <p>
                                        Keep your passport details, academic records, test score details and other relevant
                                        information ready before starting the online application.
                                    </p>
                                </div>
                            </article>

                            <article class="ir-apply-step-card">
                                <div class="ir-apply-step-number">03</div>
                                <div>
                                    <h3>Submit Online Application</h3>
                                    <p>
                                        Fill in the application form through the official portal and submit the required
                                        details carefully.
                                    </p>

                                    <a
                                        href="https://iimk.ac.in/apps/Admission/InternationalApplication/Registration/Registration"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        Go to Application Portal
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="ir-apply-step-card">
                                <div class="ir-apply-step-number">04</div>
                                <div>
                                    <h3>Attend Selection Process</h3>
                                    <p>
                                        Eligible applicants will be required to attend the selection process as notified by
                                        IIM Kozhikode.
                                    </p>

                                    <a href="{{ url('/international-relations/admissions/selection-process') }}">
                                        View Selection Process
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                        </div>

                        <div class="ir-apply-help-card mt-4">
                            <div>
                                <span>Need assistance?</span>
                                <h3>Have questions before applying?</h3>
                                <p>
                                    Use the enquiry form for support related to international admissions, eligibility,
                                    application process or registration.
                                </p>
                            </div>

                            <a
                                href="https://forms.gle/kqzqvppHtBZv6QzHA"
                                target="_blank"
                                rel="noopener"
                                class="ir-apply-help-btn"
                            >
                                Enquiry Form
                                <i class="bi bi-chat-dots"></i>
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