@extends('layouts.app')

@section('title', 'Contact Us | Doctoral Programmes | IIM Kozhikode')

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
                <span>Contact Us</span>
            </div>

            <div class="doctoral-hero-badge">
                <i class="bi bi-envelope-paper"></i>
                Doctoral Programmes
            </div>

            <h1 class="doctoral-hero-title">
                Contact Us
            </h1>

            <p class="doctoral-hero-sub">
                Get in touch with the DPM Office for queries related to doctoral programme admissions.
            </p>

        </div>
    </div>
</section>

@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.academic_programmes_sidebar'), 'active' => 'doctoral-contact']) @endsection

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                    @include('partials.inner-sidebar', ['items' => config('iimk_navigation.academic_programmes_sidebar'),'title' => 'Doctoral Programmes',
                    'eyebrow' => 'Academic structure',
                    'active' => 'doctoral-contact'])   
            </div>

            <div class="col-lg-9">
                <main class="doctoral-home-card">

                    <section class="doctoral-contact-section">
                        <div class="section-kicker">DPM Office</div>
                        <h2 class="section-heading">Contact the Doctoral Programmes Office</h2>

                        <p class="lead-copy">
                            For more information regarding admission to the Doctoral Programmes in Management,
                            please contact the DPM Office using the phone numbers or email address below.
                        </p>

                        <div class="doctoral-contact-hero">
                            <div class="doctoral-contact-hero-icon">
                                <i class="bi bi-headset"></i>
                            </div>

                            <div>
                                <span>Admissions Support</span>
                                <h3>DPM Office</h3>
                                <p>
                                    The DPM Office assists prospective applicants with admission-related information,
                                    application queries and doctoral programme communication.
                                </p>
                            </div>
                        </div>

                        <div class="doctoral-contact-grid mt-4">

                            <article class="doctoral-contact-card">
                                <div class="doctoral-contact-card-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>

                                <div>
                                    <span>Phone</span>
                                    <h3>0495-2809 537</h3>
                                    <a href="tel:+914952809537">
                                        Call Now
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="doctoral-contact-card">
                                <div class="doctoral-contact-card-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>

                                <div>
                                    <span>Phone</span>
                                    <h3>0495-2809 381</h3>
                                    <a href="tel:+914952809381">
                                        Call Now
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                            <article class="doctoral-contact-card">
                                <div class="doctoral-contact-card-icon">
                                    <i class="bi bi-building"></i>
                                </div>

                                <div>
                                    <span>Office</span>
                                    <h3>0495-2809 131</h3>
                                    <a href="tel:+914952809131">
                                        Call Office
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>

                        </div>

                        <div class="doctoral-email-card mt-4">
                            <div class="doctoral-email-icon">
                                <i class="bi bi-envelope-at"></i>
                            </div>

                            <div>
                                <span>Email</span>
                                <h3>dpadmissions@iimk.ac.in</h3>
                                <p>
                                    Send your doctoral admissions queries to the official DPM admissions email address.
                                </p>
                            </div>

                            <a href="mailto:dpadmissions@iimk.ac.in" class="doctoral-email-btn">
                                Email DPM Office
                                <i class="bi bi-envelope"></i>
                            </a>
                        </div>

                        <div class="doctoral-contact-note mt-4">
                            <div class="doctoral-contact-note-icon">
                                <i class="bi bi-info-circle"></i>
                            </div>

                            <div>
                                <h3>Before contacting the office</h3>
                                <p>
                                    Applicants are encouraged to review the admission notification, admission policy,
                                    eligibility requirements and FAQ page before contacting the DPM Office.
                                </p>

                                <div class="doctoral-contact-note-actions">
                                    <a href="{{ url('/academic-programmes/doctoral-programmes/admission') }}">
                                        View Admission Page
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                    <a href="{{ url('/academic-programmes/doctoral-programmes/faq') }}">
                                        View FAQ
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection