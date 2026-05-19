@extends('layouts.app')

@section('title', 'Green Initiatives | IIM Kozhikode')

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ url('/about') }}">About IIMK</a>
            <span class="mx-2">/</span>
            <span>Green Initiatives</span>
        </div>

        <h1 class="hero-title">Green Initiatives</h1>
        <p class="hero-sub">
            IIM Kozhikode's commitment towards sustainability, responsible campus development,
            energy awareness and environmental stewardship.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'green-initiatives'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                   @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'green-initiatives'])              
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="green-section">
                        <div class="section-kicker">Sustainability</div>
                        <h2 class="section-heading">Green Initiatives at IIM Kozhikode</h2>

                        <p class="lead-copy">
                            IIM Kozhikode continues to strengthen its sustainability practices through green campus
                            initiatives, energy audits, carbon footprint assessment and responsible institutional planning.
                        </p>

                        <div class="green-feature-card">
                            <div class="green-feature-icon">
                                <i class="bi bi-tree"></i>
                            </div>

                            <div>
                                <h3>Building a Responsible and Sustainable Campus</h3>
                                <p>
                                    The following documents highlight IIMK's initiatives and assessments related to
                                    green rating, habitat assessment, energy audit and carbon-neutral campus planning.
                                </p>
                            </div>
                        </div>

                        <div class="green-doc-grid mt-4">

                            <a
                                href="https://iimk.ac.in/uploads/userfiles/Certificate_IIM Kozhikode.pdf"
                                target="_blank"
                                rel="noopener"
                                class="green-doc-card"
                            >
                                <div class="green-doc-number">01</div>
                                <div class="green-doc-content">
                                    <h3>Certificate on Green Rating for Integrated Habitat Assessment</h3>
                                    <p>GRIHA certification document for IIM Kozhikode.</p>
                                </div>
                                <div class="green-doc-action">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/uploads/userfiles/Report_IIM Kozhikode.pdf"
                                target="_blank"
                                rel="noopener"
                                class="green-doc-card"
                            >
                                <div class="green-doc-number">02</div>
                                <div class="green-doc-content">
                                    <h3>Report from GRIHA</h3>
                                    <p>Green Rating for Integrated Habitat Assessment report.</p>
                                </div>
                                <div class="green-doc-action">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/uploads/userfiles/Office Order No_ 173 (Carbon -neutral Campus Technical Committee).pdf"
                                target="_blank"
                                rel="noopener"
                                class="green-doc-card"
                            >
                                <div class="green-doc-number">03</div>
                                <div class="green-doc-content">
                                    <h3>Carbon-neutral Campus Technical Committee</h3>
                                    <p>Office Order No. 01-10(173)/2022-IIMK.DO dated 29.09.2022.</p>
                                </div>
                                <div class="green-doc-action">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/uploads/userfiles/KSPC Audit report for carbon footprint_.pdf"
                                target="_blank"
                                rel="noopener"
                                class="green-doc-card"
                            >
                                <div class="green-doc-number">04</div>
                                <div class="green-doc-content">
                                    <h3>Report on Energy Audit</h3>
                                    <p>Audit report related to energy use and carbon footprint assessment.</p>
                                </div>
                                <div class="green-doc-action">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </div>
                            </a>

                            <a
                                href="https://iimk.ac.in/uploads/userfiles/_IIM Kozhikode Carbon Audit Final Report 22_4_25_docx.pdf"
                                target="_blank"
                                rel="noopener"
                                class="green-doc-card green-doc-card-highlight"
                            >
                                <div class="green-doc-number">05</div>
                                <div class="green-doc-content">
                                    <h3>IIMK Carbon Audit - Final Report</h3>
                                    <p>Final carbon audit report documenting IIMK�s carbon footprint assessment.</p>
                                </div>
                                <div class="green-doc-action">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </div>
                            </a>

                        </div>
                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection