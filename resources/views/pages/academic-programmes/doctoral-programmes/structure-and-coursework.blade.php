@extends('layouts.app')

@section('title', 'Programme Structure & Coursework | Doctoral Programmes | IIM Kozhikode')

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
                <span>Programme Structure & Coursework</span>
            </div>

            <div class="doctoral-hero-badge">
                <i class="bi bi-diagram-3"></i>
                Doctoral Programmes
            </div>

            <h1 class="doctoral-hero-title">
                Programme Structure & Coursework
            </h1>

            <p class="doctoral-hero-sub">
                A structured academic and research framework that develops disciplinary depth,
                methodological competence and independent research capability.
            </p>

        </div>
    </div>
</section>
@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.academic_programmes_sidebar'), 'active' => 'doctoral-structure']) @endsection

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.academic_programmes_sidebar'),'title' => 'Doctoral Programmes',
                    'eyebrow' => 'Academic structure',
                    'active' => 'doctoral-overview'])                
            </div>

            <div class="col-lg-9">
                <main class="doctoral-home-card">

                    <section class="doctoral-structure-section">
                        <div class="section-kicker">Academic Journey</div>
                        <h2 class="section-heading">Programme Structure & Coursework</h2>

                        <p class="lead-copy">
                            The doctoral programmes follow a structured academic and research framework common to all
                            three programmes. This framework supports the systematic development of disciplinary depth,
                            methodological competence, and independent research capability.
                        </p>

                        <div class="doctoral-structure-highlight">
                            <div class="doctoral-structure-highlight-icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>

                            <div>
                                <span>Doctoral Progression</span>
                                <h3>From coursework to thesis defence</h3>
                                <p>
                                    Doctoral students progress through coursework, qualifying examination, research seminars,
                                    draft thesis submission, final defence and final thesis submission.
                                </p>
                            </div>
                        </div>

                        <div class="doctoral-duration-grid mt-4">
                            <div class="doctoral-duration-card">
                                <i class="bi bi-calendar4-week"></i>
                                <strong>Typically 5 Years</strong>
                                <span>Overall programme duration</span>
                            </div>

                            <div class="doctoral-duration-card">
                                <i class="bi bi-hourglass-split"></i>
                                <strong>Minimum 3 Years</strong>
                                <span>Required before draft thesis submission</span>
                            </div>

                            <div class="doctoral-duration-card">
                                <i class="bi bi-clock-history"></i>
                                <strong>1 Credit = 10 Hours</strong>
                                <span>Classroom instruction equivalence</span>
                            </div>
                        </div>

                        <div class="doctoral-milestone-block mt-4">
                            <div class="doctoral-block-header">
                                <div>
                                    <span>Academic Structure</span>
                                    <h3>Research Milestones</h3>
                                </div>
                                <p>
                                    All doctoral students progress through a defined sequence of academic and research milestones.
                                </p>
                            </div>

                            <div class="doctoral-milestone-list">

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">01</div>
                                    <div>
                                        <h4>Coursework Completion</h4>
                                        <p>
                                            Provides foundational exposure to management theory, research methodology,
                                            and Area-specific learning.
                                        </p>
                                    </div>
                                </div>

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">02</div>
                                    <div>
                                        <h4>Comprehensive Qualifying Examination</h4>
                                        <p>
                                            Evaluates readiness to undertake independent doctoral research.
                                        </p>
                                    </div>
                                </div>

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">03</div>
                                    <div>
                                        <h4>Thesis Proposal Open Seminar</h4>
                                        <p>
                                            Presentation and discussion of the proposed research before the academic community.
                                        </p>
                                    </div>
                                </div>

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">04</div>
                                    <div>
                                        <h4>Pre-Submission Research-Thesis Open Seminar</h4>
                                        <p>
                                            Presentation of near-complete research work prior to draft-thesis submission.
                                        </p>
                                    </div>
                                </div>

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">05</div>
                                    <div>
                                        <h4>Draft-Thesis Submission</h4>
                                        <p>
                                            Submission of the draft thesis for formal evaluation.
                                        </p>
                                    </div>
                                </div>

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">06</div>
                                    <div>
                                        <h4>Final Thesis Open Defence & Viva Voce</h4>
                                        <p>
                                            Oral defence of the completed thesis before the examining committee.
                                        </p>
                                    </div>
                                </div>

                                <div class="doctoral-milestone-item">
                                    <div class="doctoral-milestone-no">07</div>
                                    <div>
                                        <h4>Final Thesis Submission</h4>
                                        <p>
                                            Completion of doctoral requirements after incorporating examiners� observations.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="doctoral-coursework-intro mt-4">
                            <div class="doctoral-coursework-icon">
                                <i class="bi bi-journal-richtext"></i>
                            </div>

                            <div>
                                <h3>Coursework Structure</h3>
                                <p>
                                    Coursework forms the academic foundation of the doctoral journey. It introduces
                                    theoretical perspectives, research methodologies, and Area-specific knowledge essential
                                    for developing a coherent and rigorous research agenda.
                                </p>

                                <p>
                                    Although the three programmes differ in structure and delivery, all coursework follows
                                    a common academic philosophy centered on building theoretical grounding, methodological
                                    capability, and scholarly competence.
                                </p>
                            </div>
                        </div>

                        <div class="doctoral-course-tabs mt-4">
                            <a href="#dpm-coursework" class="active">
                                <i class="bi bi-journal-richtext"></i>
                                DPM
                            </a>

                            <a href="#teaching-track-coursework">
                                <i class="bi bi-display"></i>
                                Teaching Track
                            </a>

                            <a href="#practice-track-coursework">
                                <i class="bi bi-briefcase"></i>
                                Practice Track
                            </a>
                        </div>

                        <div class="doctoral-coursework-block mt-4" id="dpm-coursework">
                            <div class="doctoral-coursework-header">
                                <div>
                                    <span>Full-Time Doctoral Programme</span>
                                    <h3>DPM Coursework Structure</h3>
                                </div>
                                <p>
                                    The DPM coursework is spread across three semesters with management foundation,
                                    doctoral core, methodology, Area and cross-Area courses.
                                </p>
                            </div>

                            <div class="doctoral-semester-grid">

                                <article class="doctoral-semester-card">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-1-circle"></i>
                                        </div>
                                        <div>
                                            <span>21-25 Credits</span>
                                            <h4>Semester 1</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <h5>Management Foundation Courses</h5>
                                        <p>
                                            Three to four courses, including one Home Area course and two to three courses
                                            from reference disciplines.
                                        </p>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <h5>Doctoral Core Courses</h5>
                                        <ul>
                                            <li>Philosophical Foundations of Management Research</li>
                                            <li>Research Design and Methodology</li>
                                            <li>Literature Review and Theory Development</li>
                                            <li>Statistical Foundations for Management Research</li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="doctoral-semester-card">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-2-circle"></i>
                                        </div>
                                        <div>
                                            <span>21-24 Credits</span>
                                            <h4>Semester 2</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <h5>Scholarly Communication</h5>
                                        <ul>
                                            <li>Academic Writing and Scholarly Communication</li>
                                        </ul>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <h5>Methodological Courses</h5>
                                        <p>Three methodological courses selected from:</p>
                                        <ul>
                                            <li>Survey and Experimental Research</li>
                                            <li>Multivariate Analysis</li>
                                            <li>Econometrics for Management Research</li>
                                            <li>Qualitative Research</li>
                                        </ul>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <h5>Area Learning</h5>
                                        <ul>
                                            <li>Area and Cross-Area Courses</li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="doctoral-semester-card doctoral-semester-wide">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-3-circle"></i>
                                        </div>
                                        <div>
                                            <span>18-21 Credits</span>
                                            <h4>Semester 3</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <h5>Teaching and Area Depth</h5>
                                        <ul>
                                            <li>Pedagogy in Management</li>
                                            <li>Area and Cross-Area Courses</li>
                                        </ul>
                                    </div>
                                </article>

                            </div>
                        </div>

                        <div class="doctoral-coursework-block mt-4" id="teaching-track-coursework">
                            <div class="doctoral-coursework-header">
                                <div>
                                    <span>Blended Mode</span>
                                    <h3>DPM Teaching Track Coursework Structure</h3>
                                </div>
                                <p>
                                    The Teaching Track follows a compact coursework structure delivered in a blended mode,
                                    focusing on research foundations and Area-specific learning.
                                </p>
                            </div>

                            <div class="doctoral-semester-grid">

                                <article class="doctoral-semester-card">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-wifi"></i>
                                        </div>
                                        <div>
                                            <span>45-60 Hours</span>
                                            <h4>Semester 0: Online Module</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <ul>
                                            <li>Management Foundations Module</li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="doctoral-semester-card">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-1-circle"></i>
                                        </div>
                                        <div>
                                            <span>12 Credits</span>
                                            <h4>Semester 1</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <ul>
                                            <li>Philosophical Foundations of Management Research</li>
                                            <li>Research Design and Methodology</li>
                                            <li>Quantitative Methods for Scholarly Inquiry</li>
                                            <li>Qualitative and Mixed Methods in Management Research</li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="doctoral-semester-card doctoral-semester-wide">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-2-circle"></i>
                                        </div>
                                        <div>
                                            <span>12 Credits</span>
                                            <h4>Semester 2</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <ul>
                                            <li>Area Compulsory Course</li>
                                            <li>Area or Cross-Area Elective I</li>
                                            <li>Area or Cross-Area Elective II</li>
                                            <li>Common Compulsory Course</li>
                                        </ul>
                                    </div>
                                </article>

                            </div>
                        </div>

                        <div class="doctoral-coursework-block mt-4" id="practice-track-coursework">
                            <div class="doctoral-coursework-header">
                                <div>
                                    <span>Professional Research Pathway</span>
                                    <h3>DPM Practice Track Coursework Structure</h3>
                                </div>
                                <p>
                                    The Practice Track parallels the Teaching Track and integrates professional experience
                                    with academic inquiry.
                                </p>
                            </div>

                            <div class="doctoral-semester-grid">

                                <article class="doctoral-semester-card">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-wifi"></i>
                                        </div>
                                        <div>
                                            <span>45-60 Hours</span>
                                            <h4>Semester 0: Online Module</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <ul>
                                            <li>Management Foundations Module</li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="doctoral-semester-card">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-1-circle"></i>
                                        </div>
                                        <div>
                                            <span>12 Credits</span>
                                            <h4>Semester 1</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <ul>
                                            <li>Philosophical Foundations of Management Research</li>
                                            <li>Research Design and Methodology</li>
                                            <li>Quantitative Methods for Scholarly Inquiry</li>
                                            <li>Qualitative and Mixed Methods in Management Research</li>
                                        </ul>
                                    </div>
                                </article>

                                <article class="doctoral-semester-card doctoral-semester-wide">
                                    <div class="doctoral-semester-head">
                                        <div class="doctoral-semester-icon">
                                            <i class="bi bi-2-circle"></i>
                                        </div>
                                        <div>
                                            <span>12 Credits</span>
                                            <h4>Semester 2</h4>
                                        </div>
                                    </div>

                                    <div class="doctoral-course-group">
                                        <ul>
                                            <li>Area Compulsory Course</li>
                                            <li>Area or Cross-Area Elective I</li>
                                            <li>Area or Cross-Area Elective II</li>
                                            <li>Common Compulsory Course</li>
                                        </ul>
                                    </div>
                                </article>

                            </div>
                        </div>

                        <div class="doctoral-calendar-actions mt-4">
                            <div>
                                <span>Academic Calendar</span>
                                <h3>Download Calendar Structure</h3>
                                <p>
                                    View academic calendar structures for DPM, DPM Teaching Track and DPM Practice Track.
                                </p>
                            </div>

                            <div class="doctoral-calendar-btns">
                                <a
                                    href="{{ url('/uploads/Academic_Calendar_Structure(DPM-TeachingTrack_And_DPM-PracticeTrack).pdf') }}"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    Teaching & Practice Track
                                    <i class="bi bi-file-earmark-pdf"></i>
                                </a>

                                <a
                                    href="{{ url('/uploads/Academic_Calendar_Structure_DPM20.pdf') }}"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    DPM Calendar Structure
                                    <i class="bi bi-file-earmark-pdf"></i>
                                </a>
                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection