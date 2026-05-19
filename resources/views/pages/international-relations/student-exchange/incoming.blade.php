@extends('layouts.app')

@section('title', 'Incoming Student Exchange | International Relations | IIM Kozhikode')

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
                <span>Incoming Student Exchange</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-arrow-down-left-circle"></i>
                Student Exchange
            </div>

            <h1 class="international-hero-title">
                Incoming Student Exchange
            </h1>

            <p class="international-hero-sub">
                Welcoming students from international partner institutions to study at IIM Kozhikode
                and experience academic, cultural and campus life in India.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-incoming-student-exchange'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
            @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-incoming-student-exchange'
                ])
             
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-incoming-section">
                        <div class="ir-page-action">
                            <a
                                href="https://iimk.ac.in/uploads/userfiles/IIMK%20Factsheet_2024-25.pdf"
                                target="_blank"
                                rel="noopener"
                                class="ir-factsheet-btn"
                            >
                                <i class="bi bi-file-earmark-pdf"></i>
                                Guidelines &amp; Fact Sheet
                            </a>
                        </div>

                        <div class="section-kicker">Student Exchange</div>
                        <h2 class="section-heading">Incoming Student Exchange</h2>

                        <p class="lead-copy">
                            Students from international partner institutions can join IIM Kozhikode as exchange students
                            during the second year of the two-year programme.
                        </p>

                        <div class="ir-incoming-highlight">
                            <div class="ir-incoming-highlight-icon">
                                <i class="bi bi-globe2"></i>
                            </div>

                            <div>
                                <span>Exchange Opportunity</span>
                                <h3>Study at IIM Kozhikode during Terms IV, V or VI</h3>
                                <p>
                                    Exchange students from partner institutions may be admitted to any of the three terms
                                    in the second year, subject to eligibility and application requirements.
                                </p>
                            </div>
                        </div>

                        <div class="ir-incoming-grid mt-4">

                            <article class="ir-incoming-card">
                                <div class="ir-incoming-card-head">
                                    <div class="ir-incoming-card-icon">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <h3>Admission</h3>
                                </div>

                                <p>
                                    The students from partner institutions in the international exchanges can be admitted
                                    to any of the three Terms in the second year, i.e., Terms IV, V or VI of the two-year programme.
                                </p>

                                <p>
                                    They should have completed the first half, corresponding to the first year of a two-year
                                    MBA Programme, of a recognized Post-Graduate Programme in Management at their home institution,
                                    i.e., at the international partner institution, and should hold at least a Bachelors' degree
                                    in any field of study.
                                </p>

                                <p>
                                    At the time of application through the web portal, the choice of elective courses should
                                    also be indicated.
                                </p>

                                <div class="ir-info-note">
                                    <i class="bi bi-info-circle"></i>
                                    <p>
                                        For further information related to tentative list of courses offered, accommodation expenses,
                                        academic calendar, programme structure, credit conversion etc.,
                                        <a
                                            href="https://iimk.ac.in/uploads/userfiles/IIMK%20Factsheet_2024-25.pdf"
                                            target="_blank"
                                            rel="noopener"
                                        >
                                            please refer to the Brochure.
                                        </a>
                                    </p>
                                </div>
                            </article>

                            <article class="ir-incoming-card">
                                <div class="ir-incoming-card-head">
                                    <div class="ir-incoming-card-icon">
                                        <i class="bi bi-passport"></i>
                                    </div>
                                    <h3>Visa Formalities</h3>
                                </div>

                                <p>
                                    Exchange students should complete their visa formalities on their own. All international
                                    students will need a visa to study in India, and an ordinary tourist visa will not be sufficient.
                                </p>

                                <p>
                                    Students should contact the Indian Embassy in their home country for further details
                                    after the formal exchange programme application has been sent to IIM Kozhikode.
                                </p>

                                <div class="ir-warning-box">
                                    <i class="bi bi-exclamation-triangle"></i>
                                    <p>
                                        In case of any particular stamp/seal on visa, the students are advised to bring
                                        the notice of the same to IIMK International Exchange Office. It will enable the IE Office
                                        to complete necessary formalities with the local authorities.
                                    </p>
                                </div>
                            </article>

                        </div>

                        <div class="ir-video-section mt-4">
                            <div class="ir-video-section-header">
                                <div>
                                    <span>Student Experience</span>
                                    <h3>Incoming Students Testimonial</h3>
                                </div>
                                <p>
                                    Hear from incoming exchange students about their experience at IIM Kozhikode.
                                </p>
                            </div>

                            <div class="ir-video-card">
                                <div class="ir-video-label">
                                    <i class="bi bi-play-circle"></i>
                                    Incoming Students Testimonial
                                </div>

                                <div class="ir-video-frame">
                                    <iframe
                                        src="https://www.youtube.com/embed/jtyY_SdztWk"
                                        title="IE Incoming students Testimonial"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        referrerpolicy="strict-origin-when-cross-origin">
                                    </iframe>
                                </div>
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