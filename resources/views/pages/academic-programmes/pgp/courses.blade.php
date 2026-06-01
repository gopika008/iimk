@extends('layouts.app')

@section('title', 'Courses | Post Graduate Programme | IIM Kozhikode')

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
                <a href="{{ url('/academic-programmes/pgp') }}">Post Graduate Programme</a>
                <span class="mx-2">/</span>
                <span>Courses</span>
            </div>

            <div class="pgp-hero-badge">
                <i class="bi bi-journal-richtext"></i>
                PGP Curriculum
            </div>

            <h1 class="pgp-hero-title">
                Courses
            </h1>

            <p class="pgp-hero-sub">
                A two-year, six-term curriculum designed to build strong foundations in management,
                analytical thinking, ethics, social responsibility and functional depth.
            </p>

        </div>
    </div>
</section>
@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.pgp_sidebar'), 'active' => 'pgp-courses']) @endsection

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                   @include('partials.inner-sidebar', ['items' => config('iimk_navigation.pgp_sidebar'),'title' => 'Post Graduate Programme',
                    'eyebrow' => 'Academic Programmes',
                    'active' => 'pgp-courses'])   
                    
            </div>

            <div class="col-lg-9">
                <main class="pgp-home-card">

                    <section class="pgp-courses-section">
                        <div class="section-kicker">PGP Curriculum</div>
                        <h2 class="section-heading">Courses</h2>

                        <p class="lead-copy">
                            PGP is a two-year, six-term programme. The first-year courses, Terms I to III,
                            are aimed at building the foundations of the PGP.
                        </p>

                        <div class="pgp-course-highlight">
                            <div class="pgp-course-highlight-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>

                            <div>
                                <span>Curriculum Design</span>
                                <h3>Foundation, functional depth and managerial perspective</h3>
                                <p>
                                    The first-year core curriculum is compulsory and provides basic conceptual knowledge
                                    and analytical tools in different disciplines and functional areas of management.
                                    It also includes courses that inculcate ethical consciousness and social responsibility.
                                </p>
                            </div>
                        </div>

                        <div class="pgp-course-summary-grid mt-4">
                            <a href="#core-courses" class="pgp-course-summary-card">
                                <i class="bi bi-book"></i>
                                <strong>Core Courses</strong>
                                <span>Terms I, II and III</span>
                            </a>

                            <a href="#electives" class="pgp-course-summary-card">
                                <i class="bi bi-layers"></i>
                                <strong>Electives</strong>
                                <span>Functional and interdisciplinary areas</span>
                            </a>

                            <a href="#course-note" class="pgp-course-summary-card">
                                <i class="bi bi-info-circle"></i>
                                <strong>Course Note</strong>
                                <span>Course titles may change</span>
                            </a>
                        </div>

                        <div class="pgp-course-tabs mt-4">
                            <a href="#term-i" class="active">Term I</a>
                            <a href="#term-ii">Term II</a>
                            <a href="#term-iii">Term III</a>
                            <a href="#electives">Electives</a>
                        </div>

                        <div class="pgp-core-block mt-4" id="core-courses">
                            <div class="pgp-course-block-header">
                                <div>
                                    <span>First Year</span>
                                    <h3>Core Courses</h3>
                                </div>
                                <p>
                                    All students are required to complete the first-year core courses successfully.
                                </p>
                            </div>

                            <div class="pgp-term-grid">

                                <article class="pgp-term-card" id="term-i">
                                    <div class="pgp-term-head">
                                        <div class="pgp-term-icon">
                                            I
                                        </div>
                                        <div>
                                            <span>Foundation Term</span>
                                            <h4>Term I</h4>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Organization and Market Economics</li>
                                        <li>Organization Behaviour</li>
                                        <li>Financial Accounting</li>
                                        <li>Data Analysis</li>
                                        <li>Business Communication</li>
                                        <li>Marketing Management</li>
                                        <li>Financial Markets and Instruments</li>
                                    </ul>
                                </article>

                                <article class="pgp-term-card" id="term-ii">
                                    <div class="pgp-term-head">
                                        <div class="pgp-term-icon">
                                            II
                                        </div>
                                        <div>
                                            <span>Functional Core</span>
                                            <h4>Term II</h4>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Optimization with Spreadsheets</li>
                                        <li>Economic Environment</li>
                                        <li>Cost and Management Accounting</li>
                                        <li>Human Resource Management</li>
                                        <li>Information Systems</li>
                                        <li>Corporate Finance</li>
                                        <li>Legal and Ethical Perspectives for Managers</li>
                                    </ul>
                                </article>

                                <article class="pgp-term-card pgp-term-card-wide" id="term-iii">
                                    <div class="pgp-term-head">
                                        <div class="pgp-term-icon">
                                            III
                                        </div>
                                        <div>
                                            <span>Integration and Perspective</span>
                                            <h4>Term III</h4>
                                        </div>
                                    </div>

                                    <ul class="pgp-two-column-list">
                                        <li>Strategic Management</li>
                                        <li>Leadership and Change Management</li>
                                        <li>Business Models for Digital Economy</li>
                                        <li>Operations Management</li>
                                        <li>Innovation and Design Thinking</li>
                                        <li>Scientific Enquiry for Social Sciences</li>
                                        <li>Society and Business</li>
                                        <li>Sustainability and Business</li>
                                    </ul>
                                </article>

                            </div>

                            <div class="pgp-course-note mt-3" id="course-note">
                                <i class="bi bi-info-circle"></i>
                                <p>
                                    <em>Course title and contents are subject to change depending on curriculum and customization needs.</em>
                                </p>
                            </div>
                        </div>

                        <div class="pgp-elective-block mt-4" id="electives">
                            <div class="pgp-course-block-header">
                                <div>
                                    <span>Advanced Learning</span>
                                    <h3>Electives</h3>
                                </div>
                                <p>
                                    Electives allow students to deepen their learning across management areas.
                                </p>
                            </div>

                            <div class="pgp-elective-grid">

                                <article class="pgp-elective-card" id="economics">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        <h4>Economics</h4>
                                    </div>
                                    <ul>
                                        <li>Game Theory</li>
                                        <li>Business and Government</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="finance">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-cash-coin"></i>
                                        <h4>Finance, Accounting &amp; Control</h4>
                                    </div>
                                    <ul>
                                        <li>Financial Reporting &amp; Analysis</li>
                                        <li>Financial Derivatives</li>
                                        <li>Mergers, Acquisitions &amp; Corporate Restructuring</li>
                                        <li>Project Finance</li>
                                        <li>Management of Financial Services</li>
                                        <li>Investment Analysis &amp; Portfolio Management</li>
                                        <li>Commercial Bank Management</li>
                                        <li>Corporate Valuation</li>
                                        <li>Applied Financial Modelling</li>
                                        <li>Equity Research</li>
                                        <li>FinTech Foundations for Finance</li>
                                        <li>Financial Risk Measurement and Management</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="humanities">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-chat-square-text"></i>
                                        <h4>Humanities &amp; Liberal Arts in Management</h4>
                                    </div>
                                    <ul>
                                        <li>Advanced Corporate Communication (ACC): The Practitioners Approach</li>
                                        <li>Public Speaking</li>
                                        <li>Taxation Laws</li>
                                        <li>Cross Cultural Communication</li>
                                        <li>Written Analysis and Communication</li>
                                        <li>Intellectual Property Rights</li>
                                        <li>Law, Management and Entrepreneurship</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="it-systems">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-cpu"></i>
                                        <h4>Information Technology and Systems</h4>
                                    </div>
                                    <ul>
                                        <li>Artificial Intelligence for Business</li>
                                        <li>Blockchain in Business and Management</li>
                                        <li>Business Intelligence and Big Data</li>
                                        <li>Digital Advertising</li>
                                        <li>Digital Business Transformation</li>
                                        <li>Digital Disruptions Through Internet of Things</li>
                                        <li>E-Commerce</li>
                                        <li>Knowledge Management</li>
                                        <li>Social Media Analytics</li>
                                        <li>Management of IT Products &amp; Services</li>
                                        <li>Computational Advertising</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="marketing">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-megaphone"></i>
                                        <h4>Marketing Management</h4>
                                    </div>
                                    <ul>
                                        <li>Sales and Distribution Management</li>
                                        <li>Strategic Marketing</li>
                                        <li>Customer Analytics</li>
                                        <li>Experiential and Luxury Marketing</li>
                                        <li>Marketing of Services</li>
                                        <li>Consumer Behaviour</li>
                                        <li>Marketing Research for Business Decision Making</li>
                                        <li>Integrated Marketing Communications</li>
                                        <li>Product Policy &amp; Brand Management</li>
                                        <li>Retail Management</li>
                                        <li>Rural Marketing</li>
                                        <li>Advanced Methods in Marketing Research</li>
                                        <li>Managing Business Markets</li>
                                        <li>Hospitality and Tourism Marketing</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="obhr">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-people"></i>
                                        <h4>Organizational Behaviour and Human Resources</h4>
                                    </div>
                                    <ul>
                                        <li>Negotiations &amp; Conflicts Management</li>
                                        <li>Discovering Self</li>
                                        <li>Leadership : Inspiration, Dilemmas &amp; Action</li>
                                        <li>Labour Law and Industrial Relations</li>
                                        <li>Right Hire, Pay Fair</li>
                                        <li>Enhancing Employee Performance and Well-Being through Leadership, Justice, Support, and Spirituality</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="quant-operations">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-calculator"></i>
                                        <h4>Quantitative Methods &amp; Operations Management</h4>
                                    </div>
                                    <ul>
                                        <li>Supply Chain Management</li>
                                        <li>Project Management</li>
                                        <li>Six Sigma</li>
                                        <li>Lean Systems</li>
                                        <li>Operations Strategy</li>
                                        <li>Data Analytics Using R</li>
                                        <li>International Logistics</li>
                                        <li>Services Operations Management</li>
                                        <li>Supply Chain Management</li>
                                    </ul>
                                </article>

                                <article class="pgp-elective-card" id="strategy">
                                    <div class="pgp-elective-head">
                                        <i class="bi bi-compass"></i>
                                        <h4>Strategic Management</h4>
                                    </div>
                                    <ul>
                                        <li>Strategic Analysis of Joint Ventures and Alliances</li>
                                        <li>Economics of Strategy</li>
                                        <li>Mergers, Acquisitions, Joint Ventures &amp; Corporate Growth</li>
                                        <li>Strategy Implementation</li>
                                        <li>Strategic Management of Innovation</li>
                                        <li>Corporate Governance</li>
                                        <li>Global Business Strategy</li>
                                        <li>International Business</li>
                                        <li>Models and Frameworks of Strategic Analysis</li>
                                        <li>Strategic Business and Risk Analysis</li>
                                        <li>Strategic Flexibility &amp; Resource Leverage in Organisations</li>
                                        <li>Strategic Analytics - Insight from Sport</li>
                                        <li>Competitive Strategy: The Game of Poker</li>
                                        <li>Managing Family Business</li>
                                        <li>Corporate Strategic Leadership</li>
                                    </ul>
                                </article>

                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection