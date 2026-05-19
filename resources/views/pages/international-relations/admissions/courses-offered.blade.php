@extends('layouts.app')

@section('title', 'Courses Offered | International Relations | IIM Kozhikode')

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
                <span>Courses Offered</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-journal-richtext"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Courses Offered
            </h1>

            <p class="international-hero-sub">
                Explore core courses and electives offered across management areas for international students.
            </p>
        </div>
    </div>
</section>
@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-courses-offered'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-courses-offered'
        ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-courses-section">
                        <div class="section-kicker">Academic Curriculum</div>
                        <h2 class="section-heading">Courses Offered</h2>

                        <p class="lead-copy">
                            The curriculum combines foundational core courses with a wide range of electives across economics,
                            finance, marketing, strategy, systems, operations, humanities and organisational behaviour.
                        </p>

                        <div class="ir-course-summary-grid">
                            <div class="ir-course-summary-card">
                                <i class="bi bi-book"></i>
                                <strong>Core Courses</strong>
                                <span>Foundational management learning across key areas</span>
                            </div>

                            <div class="ir-course-summary-card">
                                <i class="bi bi-layers"></i>
                                <strong>Electives</strong>
                                <span>Specialised courses for deeper academic and career focus</span>
                            </div>

                            <div class="ir-course-summary-card">
                                <i class="bi bi-diagram-3"></i>
                                <strong>Multiple Areas</strong>
                                <span>Finance, Marketing, Strategy, Operations, IT and more</span>
                            </div>
                        </div>

                        <div class="ir-course-tabs mt-4">
                            <a href="#core-courses" class="active">
                                <i class="bi bi-check-circle"></i>
                                Core Courses
                            </a>

                            <a href="#electives">
                                <i class="bi bi-stars"></i>
                                Electives
                            </a>
                        </div>

                        <div id="core-courses" class="ir-course-block mt-4">
                            <div class="ir-course-block-header">
                                <div>
                                    <span>Foundation</span>
                                    <h3>Core Courses</h3>
                                </div>
                                <p>
                                    Core courses build the essential knowledge base for management education.
                                </p>
                            </div>

                            <div class="ir-course-area-grid">

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        <h4>Economics</h4>
                                    </div>
                                    <ul>
                                        <li>Organization and Market Economics</li>
                                        <li>Economic Environment</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-cash-coin"></i>
                                        <h4>Finance, Accounting &amp; Control</h4>
                                    </div>
                                    <ul>
                                        <li>Financial Accounting</li>
                                        <li>Financial Markets and Instruments</li>
                                        <li>Cost and Management Accounting</li>
                                        <li>Corporate Finance</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-chat-square-text"></i>
                                        <h4>Humanities &amp; Liberal Arts in Management</h4>
                                    </div>
                                    <ul>
                                        <li>Business Communication</li>
                                        <li>Legal and Ethical Perspectives for Managers</li>
                                        <li>Society and Business</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-cpu"></i>
                                        <h4>Information Technology and Systems</h4>
                                    </div>
                                    <ul>
                                        <li>Information Systems</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-megaphone"></i>
                                        <h4>Marketing Management</h4>
                                    </div>
                                    <ul>
                                        <li>Marketing Management</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-people"></i>
                                        <h4>Organizational Behaviour and Human Resources</h4>
                                    </div>
                                    <ul>
                                        <li>Organization Behaviour</li>
                                        <li>Human Resource Management</li>
                                        <li>Leadership and Change Management</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-calculator"></i>
                                        <h4>Quantitative Methods &amp; Operations Management</h4>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Spreadsheet Modelling and Optimisation</li>
                                        <li>Operations Management</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-compass"></i>
                                        <h4>Strategic Management</h4>
                                    </div>
                                    <ul>
                                        <li>Strategic Management</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card ir-course-area-wide">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-lightbulb"></i>
                                        <h4>Area Neutral</h4>
                                    </div>
                                    <ul class="ir-course-two-column-list">
                                        <li>Business Models for Digital Economy</li>
                                        <li>Innovation and Design Thinking</li>
                                        <li>Scientific Enquiry for Social Sciences</li>
                                        <li>Sustainability and Business</li>
                                    </ul>
                                </article>

                            </div>
                        </div>

                        <div id="electives" class="ir-course-block mt-4">
                            <div class="ir-course-block-header">
                                <div>
                                    <span>Specialisation</span>
                                    <h3>Electives</h3>
                                </div>
                                <p>
                                    Electives allow students to pursue focused learning across functional and interdisciplinary areas.
                                </p>
                            </div>

                            <div class="ir-course-area-grid">

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        <h4>Economics</h4>
                                    </div>
                                    <ul>
                                        <li>Game Theory</li>
                                        <li>Business and Government</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
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

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
                                        <i class="bi bi-chat-square-text"></i>
                                        <h4>Humanities &amp; Liberal Arts in Management</h4>
                                    </div>
                                    <ul>
                                        <li>Advanced Corporate Communication (ACC): The Practitioner's Approach</li>
                                        <li>Public Speaking</li>
                                        <li>Taxation Laws</li>
                                        <li>Cross Cultural Communication</li>
                                        <li>Written Analysis and Communication</li>
                                        <li>Intellectual Property Rights</li>
                                        <li>Law, Management and Entrepreneurship</li>
                                    </ul>
                                </article>

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
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

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
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

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
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

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
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

                                <article class="ir-course-area-card">
                                    <div class="ir-course-area-head">
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

@include('partials.ir-floating-enquiry')

@endsection