@extends('layouts.app')

@section('title', 'Eligibility | International Relations | IIM Kozhikode')

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
                <span>Eligibility</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-person-check"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Eligibility
            </h1>

            <p class="international-hero-sub">
                Guidelines for foreign nationals, educational qualifications, valid test scores and English language proficiency.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-eligibility'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                     @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-eligibility'
        ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-eligibility-section">
                        <div class="section-kicker">2026-28 Batch</div>
                        <h2 class="section-heading">Eligibility Guidelines for International Students</h2>

                        <p class="lead-copy">
                            Guidelines for Foreign Nationals, Educational Qualifications &amp; English Language Proficiency
                            for the 2026-28 batch.
                        </p>

                        <div class="ir-eligibility-overview">
                            <div class="ir-eligibility-overview-item">
                                <i class="bi bi-passport"></i>
                                <div>
                                    <strong>Foreign Nationals</strong>
                                    <span>Valid non-Indian passport required</span>
                                </div>
                            </div>

                            <div class="ir-eligibility-overview-item">
                                <i class="bi bi-mortarboard"></i>
                                <div>
                                    <strong>Graduate Degree</strong>
                                    <span>Minimum 50% marks or equivalent CGPA</span>
                                </div>
                            </div>

                            <div class="ir-eligibility-overview-item">
                                <i class="bi bi-clipboard-check"></i>
                                <div>
                                    <strong>Valid Test Score</strong>
                                    <span>GMAT, GRE or CAT 2025</span>
                                </div>
                            </div>

                            <div class="ir-eligibility-overview-item">
                                <i class="bi bi-translate"></i>
                                <div>
                                    <strong>English Proficiency</strong>
                                    <span>TOEFL / IELTS or equivalent proof</span>
                                </div>
                            </div>
                        </div>

                        <div class="ir-eligibility-list mt-4">

                            <article class="ir-eligibility-card">
                                <div class="ir-eligibility-card-number">A</div>

                                <div class="ir-eligibility-card-body">
                                    <h3>Guidelines for Foreign Nationals</h3>

                                    <ul class="ir-clean-list">
                                        <li>
                                            Applicants must hold a valid passport issued by a country other than India.
                                        </li>
                                        <li>
                                            Foreign nationals currently residing in India may apply using either a valid
                                            CAT 2025 score or GMAT/GRE scores obtained within the last three years.
                                        </li>
                                    </ul>
                                </div>
                            </article>

                            <article class="ir-eligibility-card">
                                <div class="ir-eligibility-card-number">B</div>

                                <div class="ir-eligibility-card-body">
                                    <h3>Educational Qualifications</h3>

                                    <p>
                                        Candidates must hold a graduate degree or equivalent qualification in any discipline,
                                        with a minimum of 50% marks or equivalent CGPA.
                                    </p>

                                    <div class="ir-note-box">
                                        <i class="bi bi-info-circle"></i>
                                        <p>
                                            <strong>Note:</strong> If the degree was obtained from a foreign university,
                                            an equivalency certificate from the Association of Indian Universities (AIU)
                                            must be submitted at the time of registration.
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="ir-eligibility-card">
                                <div class="ir-eligibility-card-number">C</div>

                                <div class="ir-eligibility-card-body">
                                    <h3>Valid Test Scores</h3>

                                    <p>
                                        Applicants must provide a valid score in one of the following entrance tests,
                                        as of the application deadline.
                                    </p>

                                    <div class="ir-test-score-grid">

                                        <div class="ir-test-score-card">
                                            <div class="ir-test-score-head">
                                                <i class="bi bi-bar-chart"></i>
                                                <h4>GMAT</h4>
                                            </div>

                                            <p>Scores valid for the past three years.</p>

                                            <ul class="ir-clean-list">
                                                <li>
                                                    Classic Edition (10th Edition): Minimum overall score of <strong>560</strong>
                                                </li>
                                                <li>
                                                    Focus Edition: Minimum overall score of <strong>535</strong>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="ir-test-score-card">
                                            <div class="ir-test-score-head">
                                                <i class="bi bi-graph-up"></i>
                                                <h4>GRE</h4>
                                            </div>

                                            <p>Scores valid for the past three years.</p>

                                            <p>
                                                Minimum score of <strong>60th percentile in each section</strong> or a
                                                composite score of <strong>320</strong>, whichever is lower.
                                            </p>
                                        </div>

                                        <div class="ir-test-score-card">
                                            <div class="ir-test-score-head">
                                                <i class="bi bi-award"></i>
                                                <h4>CAT</h4>
                                            </div>

                                            <p>
                                                Minimum <strong>80th percentile</strong> in CAT 2025.
                                            </p>

                                            <p>
                                                Only scores from <strong>CAT 2025</strong> will be considered.
                                            </p>
                                        </div>

                                    </div>

                                    <div class="ir-warning-box mt-3">
                                        <i class="bi bi-exclamation-triangle"></i>
                                        <p>
                                            <strong>Note:</strong> Online or home-based test editions are not accepted.
                                        </p>
                                    </div>

                                    <div class="ir-score-forwarding-box mt-3">
                                        <h4>GMAT/GRE Official Score Forwarding for Verification</h4>

                                        <div class="ir-code-grid">
                                            <div class="ir-code-card">
                                                <span>GMAT Code</span>
                                                <strong>D3Z-SQ-77</strong>
                                                <p>Post Graduate Programme - International Students</p>
                                            </div>

                                            <div class="ir-code-card">
                                                <span>GRE Code</span>
                                                <strong>4748</strong>
                                                <p>Indian Institute of Management</p>
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-0">
                                            Please use these codes to have your scores sent directly to IIMK.
                                            Your official score report from Pearson / GMAC for the GMAT or ETS for the GRE
                                            will be used for verification.
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="ir-eligibility-card">
                                <div class="ir-eligibility-card-number">D</div>

                                <div class="ir-eligibility-card-body">
                                    <h3>English Language Proficiency</h3>

                                    <p>
                                        Candidates must satisfy English language proficiency through any one of the following:
                                    </p>

                                    <div class="ir-english-grid">

                                        <div class="ir-english-card">
                                            <i class="bi bi-pencil-square"></i>
                                            <h4>TOEFL / IELTS</h4>
                                            <p>
                                                A score above the <strong>70th percentile</strong> or equivalent in TOEFL or IELTS.
                                            </p>
                                        </div>

                                        <div class="ir-english-card">
                                            <i class="bi bi-building"></i>
                                            <h4>English-speaking Country</h4>
                                            <p>
                                                A degree from an institution located in an English-speaking country,
                                                for example India, USA, UK, Canada, Australia, New Zealand or South Africa.
                                            </p>
                                        </div>

                                        <div class="ir-english-card">
                                            <i class="bi bi-file-earmark-check"></i>
                                            <h4>Institution Certificate</h4>
                                            <p>
                                                A certificate from the last degree-awarding institution stating that the candidate
                                                has demonstrated proficiency in English as a foreign language.
                                            </p>
                                        </div>

                                    </div>
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