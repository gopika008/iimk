@extends('layouts.app')

@section('title', 'Admission & Selection Process | International Relations | IIM Kozhikode')

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
                <span>Admission & Selection Process</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-check2-circle"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Admission & Selection Process
            </h1>

            <p class="international-hero-sub">
                Admission cycle, application fee, virtual interview process, final selection and Study in India portal registration details.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-selection-process'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                     @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-selection-process'
        ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-selection-section">
                        <div class="section-kicker">2026-28 Batch</div>
                        <h2 class="section-heading">Admission & Selection Process</h2>

                        <p class="lead-copy">
                            The admission and selection process for international candidates includes application submission,
                            eligibility screening, virtual interview and offer acceptance.
                        </p>

                        <div class="ir-admission-alert">
                            <i class="bi bi-info-circle"></i>
                            <div>
                                <strong>Admission cycle closed for 2026-28 Batch</strong>
                                <p>
                                    Admissions will be conducted in two cycles each academic year.
                                </p>
                            </div>
                        </div>

                        <div class="ir-selection-timeline mt-4">

                            <article class="ir-selection-step">
                                <div class="ir-selection-step-number">01</div>
                                <div class="ir-selection-step-body">
                                    <h3>Admission Cycles</h3>
                                    <p>
                                        Admissions will be conducted in two cycles each academic year.
                                    </p>
                                </div>
                            </article>

                            <article class="ir-selection-step">
                                <div class="ir-selection-step-number">02</div>
                                <div class="ir-selection-step-body">
                                    <h3>Application Fee</h3>
                                    <p>
                                        The application fee is <strong>INR 850</strong> approximately <strong>USD 10</strong>.
                                    </p>

                                    <div class="ir-note-box mt-2">
                                        <i class="bi bi-gift"></i>
                                        <p>
                                            The fee is waived for applicants registered on the Study in India (SII) portal.
                                        </p>
                                    </div>

                                    <a
                                        href="https://www.studyinindia.gov.in/admission/registrations"
                                        target="_blank"
                                        rel="noopener"
                                        class="ir-inline-link"
                                    >
                                        Visit Study in India Registration Portal
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="ir-selection-step">
                                <div class="ir-selection-step-number">03</div>
                                <div class="ir-selection-step-body">
                                    <h3>Virtual Interview</h3>
                                    <p>
                                        All eligible applicants will be required to attend a virtual interview.
                                    </p>
                                </div>
                            </article>

                            <article class="ir-selection-step">
                                <div class="ir-selection-step-number">04</div>
                                <div class="ir-selection-step-body">
                                    <h3>Final Selection</h3>
                                    <p>
                                        Final selection will be based on the average score awarded by a panel comprising
                                        two or more IIM Kozhikode faculty members during the interview.
                                    </p>
                                </div>
                            </article>

                            <article class="ir-selection-step">
                                <div class="ir-selection-step-number">05</div>
                                <div class="ir-selection-step-body">
                                    <h3>Admission Offer</h3>
                                    <p>
                                        Admission offers will be communicated within one month of the application deadline.
                                    </p>
                                </div>
                            </article>

                            <article class="ir-selection-step">
                                <div class="ir-selection-step-number">06</div>
                                <div class="ir-selection-step-body">
                                    <h3>Acceptance Confirmation</h3>
                                    <p>
                                        Selected candidates must confirm their acceptance by paying
                                        <strong>USD 3,000</strong> within one month of receiving the offer.
                                    </p>
                                </div>
                            </article>

                        </div>

                        <div class="ir-sii-card mt-4">
                            <div class="ir-sii-card-header">
                                <div class="ir-sii-icon">
                                    <i class="bi bi-globe-central-south-asia"></i>
                                </div>
                                <div>
                                    <div class="section-kicker">Visa & Registration</div>
                                    <h3>Study in India (SII) Portal Registration</h3>
                                </div>
                            </div>

                            <div class="ir-sii-grid">
                                <div class="ir-sii-point">
                                    <i class="bi bi-person-vcard"></i>
                                    <p>
                                        All foreign nationals seeking admission to IIM Kozhikode must register on the
                                        Study in India (SII) portal and quote the Unique ID generated therein when applying
                                        for a student visa.
                                    </p>
                                </div>

                                <div class="ir-sii-point">
                                    <i class="bi bi-link-45deg"></i>
                                    <p>
                                        Registration Link:
                                        <a href="https://www.studyinindia.gov.in/admission/registrations" target="_blank" rel="noopener">
                                            https://www.studyinindia.gov.in/admission/registrations
                                        </a>
                                    </p>
                                </div>

                                <div class="ir-sii-point">
                                    <i class="bi bi-shield-exclamation"></i>
                                    <p>
                                        Student visa applications will not be processed without the SII Unique ID.
                                    </p>
                                </div>

                                <div class="ir-sii-point">
                                    <i class="bi bi-passport"></i>
                                    <p>
                                        The Ministry of Home Affairs (India) has introduced an e-Student Visa facility
                                        for eligible students (S-1 and S-3 visa categories) registered on the SII Portal.
                                        Student visa applications should be submitted through the Indian Visa Portal.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="ir-enquiry-card mt-4">
                            <div>
                                <span>Need help?</span>
                                <h3>For Enquiry, Please Click Here</h3>
                                <p>
                                    Submit your enquiry through the official form for assistance related to international admissions.
                                </p>
                            </div>

                            <a
                                href="https://forms.gle/kqzqvppHtBZv6QzHA"
                                target="_blank"
                                rel="noopener"
                                class="ir-enquiry-btn"
                            >
                                Enquiry Form
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection