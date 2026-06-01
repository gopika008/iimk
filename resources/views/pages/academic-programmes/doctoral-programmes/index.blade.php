@extends('layouts.app')

@section('title', 'Doctoral Programmes | IIM Kozhikode')

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
                <span>Doctoral Programmes</span>
            </div>

            <div class="doctoral-hero-badge">
                <i class="bi bi-mortarboard"></i>
                Academic Programmes
            </div>

            <h1 class="doctoral-hero-title">
                Doctoral Programmes in Management
            </h1>

            <p class="doctoral-hero-sub">
                Developing rigorous, independent and thoughtful researchers in management through structured doctoral learning,
                disciplinary depth and original scholarly work.
            </p>

        </div>
    </div>
</section>
@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.academic_programmes_sidebar'), 'active' => 'doctoral-overview']) @endsection

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                   @include('partials.inner-sidebar', ['items' => config('iimk_navigation.academic_programmes_sidebar'),'title' => 'Doctoral Programmes',
                    'eyebrow' => 'Academic Programmes',
                    'active' => 'doctoral-overview'])
              
            </div>

            <div class="col-lg-9">
                <main class="doctoral-home-card">

                    <section class="doctoral-overview-section">
                        <div class="section-kicker">Doctoral Programmes</div>
                        <h2 class="section-heading">Overview</h2>

                        <p class="lead-copy">
                            The Doctoral Programmes in Management at IIM Kozhikode are designed to develop doctoral students
                            who can undertake rigorous and independent research in management.
                        </p>

                        <p>
                            These programmes represent the Institute�s highest academic qualifications and follow a structured
                            academic and research progression that builds disciplinary grounding, methodological competence,
                            and the capacity to produce original scholarly work.
                        </p>

                        <div class="doctoral-highlight-card">
                            <div class="doctoral-highlight-icon">
                                <i class="bi bi-award"></i>
                            </div>

                            <div>
                                <span>Highest Academic Qualification</span>
                                <h3>Structured doctoral learning with research depth</h3>
                                <p>
                                    The programmes typically span five years. Doctoral students begin with coursework that introduces
                                    foundational research concepts, methodological tools, and Area-specific perspectives, and later
                                    work closely with faculty members to refine their research interests.
                                </p>
                            </div>
                        </div>

                        <div class="doctoral-key-grid mt-4">
                            <div class="doctoral-key-card">
                                <i class="bi bi-calendar4-week"></i>
                                <strong>Five-Year Journey</strong>
                                <span>Structured academic and research progression</span>
                            </div>

                            <div class="doctoral-key-card">
                                <i class="bi bi-hourglass-split"></i>
                                <strong>Minimum Three Years</strong>
                                <span>Required before draft thesis submission eligibility</span>
                            </div>

                            <div class="doctoral-key-card">
                                <i class="bi bi-search"></i>
                                <strong>Original Research</strong>
                                <span>Focused on independent scholarly contribution</span>
                            </div>
                        </div>

                        <div class="doctoral-programmes-block mt-4">
                            <div class="doctoral-block-header">
                                <div>
                                    <span>Programmes Offered</span>
                                    <h3>Three Doctoral Pathways</h3>
                                </div>
                                <p>
                                    IIM Kozhikode offers three doctoral programmes aligned to a common academic and research framework.
                                </p>
                            </div>

                            <div class="doctoral-programme-grid">

                            <article class="doctoral-programme-card" id="dpm">
                                <div class="doctoral-programme-top">
                                    <div class="doctoral-programme-icon">
                                        <i class="bi bi-journal-richtext"></i>
                                    </div>
                                    <span>DPM</span>
                                </div>

                                <h3>Doctoral Programme in Management</h3>

                                <p>
                                    The DPM is a full-time doctoral programme intended for doctoral students who seek to pursue
                                    academic careers in management research and teaching.
                                </p>

                                <p>
                                    It includes coursework in management foundations, research methodology, and Area-specific scholarship.
                                    Doctoral students complete all doctoral milestones and receive a tuition waiver and monthly fellowship
                                    during the programme.
                                </p>
                            </article>

                            <article class="doctoral-programme-card" id="dpm-teaching-track">
                                <div class="doctoral-programme-top">
                                    <div class="doctoral-programme-icon">
                                        <i class="bi bi-display"></i>
                                    </div>
                                    <span>Teaching Track</span>
                                </div>

                                <h3>Doctoral Programme in Management Teaching Track</h3>

                                <p>
                                    The DPM Teaching Track is designed for doctoral students who prefer a blended mode of coursework
                                    delivery and require a compact academic structure.
                                </p>

                                <p>
                                    The programme combines online and in-campus coursework and focuses on building research foundations
                                    and Area-specific learning while progressing through core doctoral milestones.
                                </p>
                            </article>

                            <article class="doctoral-programme-card doctoral-programme-wide" id="dpm-practice-track">
                                <div class="doctoral-programme-top">
                                    <div class="doctoral-programme-icon">
                                        <i class="bi bi-briefcase"></i>
                                    </div>
                                    <span>Practice Track</span>
                                </div>

                                <h3>Doctoral Programme in Management Practice Track</h3>

                                <p>
                                    The DPM Practice Track is intended for experienced professionals who wish to integrate managerial
                                    or industry experience with structured doctoral research.
                                </p>

                                <p>
                                    Doctoral students in this programme engage with practice-oriented research questions while completing
                                    a compact coursework structure delivered in a blended mode.
                                </p>

                                <p>
                                    The programme supports research that draws on professional contexts while being informed by relevant
                                    academic frameworks.
                                </p>
                            </article>

                        </div>
                        </div>

                        <div class="doctoral-areas-block mt-4"  id="areas-of-specialization">
                            <div class="section-kicker">Academic Areas</div>
                            <h2 class="section-heading">Academic Areas of Specialization</h2>

                            <p class="lead-copy">
                                The doctoral programmes are offered across eight Academic Areas of Specialization,
                                which structure the coursework and shape the direction of doctoral research.
                            </p>

                            <div class="doctoral-area-grid">

                                <div class="doctoral-area-card">
                                    <i class="bi bi-diagram-3"></i>
                                    <span>Decision Sciences and Operations Management</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <span>Economics</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-cash-coin"></i>
                                    <span>Finance, Accounting &amp; Control</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-chat-square-text"></i>
                                    <span>Humanities &amp; Liberal Arts in Management</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-cpu"></i>
                                    <span>Information Systems</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-megaphone"></i>
                                    <span>Marketing Management</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-people"></i>
                                    <span>Organizational Behaviour and Human Resource Management</span>
                                </div>

                                <div class="doctoral-area-card">
                                    <i class="bi bi-compass"></i>
                                    <span>Strategic Management</span>
                                </div>

                            </div>
                        </div>

                        <div class="doctoral-vision-block mt-4" id="programme-vision-goals">
                            <div class="doctoral-vision-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>

                            <div>
                                <div class="section-kicker">Vision and Goals</div>
                                <h2>Programme Vision and Goals</h2>

                                <p>
                                    The doctoral programmes at IIM Kozhikode are guided by a vision to develop rigorous,
                                    independent, and thoughtful researchers in management.
                                </p>

                                <p>
                                    The programmes aim to nurture doctoral students who possess strong disciplinary grounding,
                                    methodological capability, and the ability to engage critically with complex managerial and
                                    societal issues.
                                </p>

                                <p>
                                    Aligned with this vision, the programmes seek to build the theoretical depth, methodological
                                    skills, analytical abilities, and scholarly communication capabilities required for high-quality research.
                                </p>

                              
                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection