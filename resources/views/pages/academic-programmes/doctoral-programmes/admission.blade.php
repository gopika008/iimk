@extends('layouts.app')

@section('title', 'Admission | Doctoral Programmes | IIM Kozhikode')

@section('content')

<section class="doctoral-hero">
    <div class="doctoral-hero-overlay"></div>

    <div class="container position-relative">
        <div class="doctoral-hero-content">

            <div class="breadcrumb-mini doctoral-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-2">/</span>
                <span>Academic Programmes</span>
                <span class="mx-2">/</span>
                <a href="{{ url('/academic-programmes/doctoral-programmes') }}">Doctoral Programmes</a>
                <span class="mx-2">/</span>
                <span>Admission</span>
            </div>

            <div class="doctoral-hero-badge">
                <i class="bi bi-send-check"></i>
                Doctoral Programmes
            </div>

            <h1 class="doctoral-hero-title">
                Admission
            </h1>

            <p class="doctoral-hero-sub">
                Admission notification, application timelines, policy documents and application status
                for Doctoral Programmes in Management.
            </p>

        </div>
    </div>
</section>

@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.academic_programmes_sidebar'), 'active' => 'doctoral-admission']) @endsection


<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
            @include('partials.inner-sidebar', ['items' => config('iimk_navigation.academic_programmes_sidebar'),'title' => 'Doctoral Programmes',
                    'eyebrow' => 'Academic structure',
                    'active' => 'doctoral-admission'])   
            </div>

            <div class="col-lg-9">
                <main class="doctoral-home-card">

                    <section class="doctoral-admission-section">
                        <div class="section-kicker">Doctoral Admissions</div>
                        <h2 class="section-heading">Admission to Doctoral Programmes</h2>

                        <p class="lead-copy">
                            Admission to the doctoral programmes is announced annually through the official
                            <strong>Admission Notification</strong>.
                        </p>

                        <div class="doctoral-admission-hero">
                            <div class="doctoral-admission-hero-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>

                            <div>
                                <span>Admission Notification</span>
                                <h3>Review the official notification before applying</h3>
                                <p>
                                    The notification provides details on eligibility criteria for each programme,
                                    application timelines and important dates.
                                </p>
                            </div>
                        </div>

                        <div class="doctoral-admission-info-grid mt-4">

                            <article class="doctoral-admission-info-card">
                                <div class="doctoral-admission-info-icon">
                                    <i class="bi bi-person-check"></i>
                                </div>

                                <h3>Eligibility Criteria</h3>
                                <p>
                                    Applicants should review programme-specific eligibility criteria for DPM,
                                    DPM Teaching Track and DPM Practice Track before applying.
                                </p>
                            </article>

                            <article class="doctoral-admission-info-card">
                                <div class="doctoral-admission-info-icon">
                                    <i class="bi bi-calendar-event"></i>
                                </div>

                                <h3>Application Timelines</h3>
                                <p>
                                    Important dates and application timelines are published in the official
                                    Admission Notification.
                                </p>
                            </article>

                            <article class="doctoral-admission-info-card">
                                <div class="doctoral-admission-info-icon">
                                    <i class="bi bi-journal-check"></i>
                                </div>

                                <h3>Programme Selection</h3>
                                <p>
                                    Prospective applicants should carefully review details before submitting their application
                                    for DPM, DPM Teaching Track, or DPM Practice Track.
                                </p>
                            </article>

                        </div>

                        <div class="doctoral-admission-actions mt-4">
                            <div>
                                <span>Important Links</span>
                                <h3>Admission Documents & Application Portal</h3>
                                <p>
                                    Access the official admission notification, application status portal and admission policy.
                                </p>
                            </div>

                            <div class="doctoral-admission-btn-grid">
                                <a
                                    href="https://iimk.ac.in/uploads/userfiles/Admission Notification DPs2026.pdf"
                                    target="_blank"
                                    rel="noopener"
                                    class="doctoral-admission-btn"
                                >
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    Admission Notification 2026-27
                                </a>

                                <a
                                    href="https://iimk.ac.in/apps/Admission/DP/Login"
                                    target="_blank"
                                    rel="noopener"
                                    class="doctoral-admission-btn doctoral-admission-btn-green"
                                >
                                    <i class="bi bi-box-arrow-up-right"></i>
                                    View Application Status
                                </a>

                                <a
                                    href="https://iimk.ac.in/uploads/userfiles/Admissions_Policy_2026-27.pdf"
                                    target="_blank"
                                    rel="noopener"
                                    class="doctoral-admission-btn doctoral-admission-btn-outline"
                                >
                                    <i class="bi bi-file-earmark-text"></i>
                                    Admission Policy 2026-27
                                </a>
                            </div>
                        </div>

                        <div class="doctoral-admission-note mt-4">
                            <div class="doctoral-admission-note-icon">
                                <i class="bi bi-info-circle"></i>
                            </div>

                            <p>
                                Prospective applicants are advised to carefully review the Admission Notification before
                                submitting their application for the Doctoral Programme in Management, DPM Teaching Track,
                                or DPM Practice Track.
                            </p>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection