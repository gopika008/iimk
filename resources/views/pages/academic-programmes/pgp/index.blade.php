@extends('layouts.app')

@section('title', 'Post Graduate Programme (PGP) | IIM Kozhikode')

@section('content')

<section class="pgp-hero">
    <div class="pgp-hero-overlay"></div>

    <div class="container position-relative">
        <div class="pgp-hero-content">

            <div class="breadcrumb-mini pgp-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-2">/</span>
                <span>Academic Programmes</span>
                <span class="mx-2">/</span>
                <span>Post Graduate Programme</span>
            </div>

            <div class="pgp-hero-badge">
                <i class="bi bi-mortarboard"></i>
                Flagship MBA Programme
            </div>

            <h1 class="pgp-hero-title">
                Post Graduate Programme in Management
            </h1>

            <p class="pgp-hero-sub">
                IIM Kozhikode's flagship Post Graduate Programme prepares young and dynamic graduates
                for leadership roles in industry and other sectors.
            </p>

            <div class="pgp-hero-actions">
                <a
                    href="https://iimk.ac.in/apps/Admission/PGP/Login"
                    target="_blank"
                    rel="noopener"
                    class="pgp-hero-btn"
                >
                    Stage 02 Score &amp; PI Status
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>

                <a
                    href="https://aims.iimk.ac.in/Login/Student"
                    target="_blank"
                    rel="noopener"
                    class="pgp-hero-btn pgp-hero-btn-alt"
                >
                    Stage 03 Offer / Waitlist Status
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.pgp_sidebar'), 'active' => 'pgp-about']) @endsection


<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
        @include('partials.inner-sidebar', ['items' => config('iimk_navigation.pgp_sidebar'),'title' => 'Post Graduate Programme',
                    'eyebrow' => 'About PGP',
                    'active' => 'pgp-about'])   
            </div>

            <div class="col-lg-9">
                <main class="pgp-home-card">

                    <section class="pgp-about-section">
                        <div class="section-kicker">About PGP</div>
                        <h2 class="section-heading">Post Graduate Programme (PGP)</h2>

                        <p class="lead-copy">
                            The Post-graduate Programme in Management is a flagship educational programme preparing
                            young and dynamic graduates for senior level positions in industry and other sectors.
                        </p>

                        <div class="pgp-about-highlight">
                            <div class="pgp-about-highlight-icon">
                                <i class="bi bi-stars"></i>
                            </div>

                            <div>
                                <span>Learning Philosophy</span>
                                <h3>Knowledge assimilation, application and leadership development</h3>
                                <p>
                                    The PGP programme lays greater emphasis on knowledge assimilation and its effective use
                                    than on its mere reproduction. The learning experience combines academic depth,
                                    practical exposure and social concern.
                                </p>
                            </div>
                        </div>

                        <div class="pgp-about-grid mt-4">

                            <article class="pgp-about-card">
                                <div class="pgp-about-card-icon">
                                    <i class="bi bi-journal-richtext"></i>
                                </div>

                                <h3>Multiple Pedagogical Tools</h3>
                                <p>
                                    Instructors choose from lectures, case studies, exercises, role-plays, simulation,
                                    video shows and other learning methods to facilitate effective learning.
                                </p>
                            </article>

                            <article class="pgp-about-card">
                                <div class="pgp-about-card-icon">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>

                                <h3>Rigorous Continuous Evaluation</h3>
                                <p>
                                    The evaluation system comprises quizzes, assignments, mid-term examinations,
                                    end-term examinations and other academic assessments.
                                </p>
                            </article>

                            <article class="pgp-about-card">
                                <div class="pgp-about-card-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <h3>Collaborative Learning</h3>
                                <p>
                                    The programme emphasizes library-based self-study, group work, open-ended discussions
                                    and real-life projects.
                                </p>
                            </article>

                        </div>

                        <div class="pgp-growth-section mt-4">
                            <div class="pgp-growth-content">
                                <div class="section-kicker">Since 1997</div>
                                <h2>One of India's fastest growing management schools</h2>

                                <p>
                                    Starting in 1997 with a batch of 42 students, the PGP intake has consistently increased,
                                    making it the fastest growing management school in the country to reach that landmark.
                                    This growth has been achieved while keeping the quality of the programme high.
                                </p>

                                <p>
                                    The Institute continues to maintain its sound placement record and ranks among the top
                                    few institutes in the country.
                                </p>
                            </div>

                            <div class="pgp-growth-stat">
                                <strong>1997</strong>
                                <span>Programme started with a batch of 42 students</span>
                            </div>
                        </div>

                        <div class="pgp-image-card mt-4">
                            <img
                                src="https://beta.iimk.ac.in/uploads/userfiles/StudentsGraduated2021.jpg"
                                alt="IIM Kozhikode PGP graduating students"
                                loading="lazy"
                            >

                            <div class="pgp-image-caption">
                                <span>PGP Community</span>
                                <h3>Dream ' Innovate ' Achieve</h3>
                                <p>
                                    Students inculcate the spirit of 'dream-innovate-achieve' and imbibe social concern
                                    as an integral part of the learning process.
                                </p>
                            </div>
                        </div>

                        <div class="pgp-action-panel mt-4">
                            <div>
                                <span>Admissions Updates</span>
                                <h3>Check PGP admission status</h3>
                                <p>
                                    Use the official links below to access Stage 02 and Stage 03 admission status portals.
                                </p>
                            </div>

                            <div class="pgp-action-buttons">
                                <a
                                    href="https://iimk.ac.in/apps/Admission/PGP/Login"
                                    target="_blank"
                                    rel="noopener"
                                    class="pgp-action-btn pgp-action-btn-green"
                                >
                                    Stage 02 Score &amp; PI Status
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>

                                <a
                                    href="https://aims.iimk.ac.in/Login/Student"
                                    target="_blank"
                                    rel="noopener"
                                    class="pgp-action-btn"
                                >
                                    Stage 03 Offer / Waitlist Status
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="pgp-final-note mt-4">
                            <div class="pgp-final-note-icon">
                                <i class="bi bi-building-check"></i>
                            </div>

                            <p>
                                Indian Institute of Management Kozhikode is on a high growth trajectory today,
                                offering the widest range of academic programmes in the field of management education.
                            </p>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection