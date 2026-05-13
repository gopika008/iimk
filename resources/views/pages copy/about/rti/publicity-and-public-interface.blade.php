@extends('layouts.app')

@section('title', 'Publicity and Public Interface | IIM Kozhikode')

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ url('/about') }}">About IIMK</a>
            <span class="mx-2">/</span>
            <span>RTI</span>
            <span class="mx-2">/</span>
            <span>Publicity and Public Interface</span>
        </div>

        <h1 class="hero-title">Publicity and Public Interface</h1>
        <p class="hero-sub">
            RTI disclosure details related to public consultation, public interface, dissemination of information,
            information manuals, handbooks and public access.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-publicity'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-publicity'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="rti-section rti-organization-page">
                        <div class="section-kicker">RTI Disclosure</div>
                        <h2 class="section-heading">3 - Publicity and Public Interface</h2>

                        <p class="lead-copy">
                            Disclosure under the Right to Information Act covering public consultation,
                            communication channels, information manuals, handbooks and public access to institutional information.
                        </p>

                        <div class="rti-tab-list">
                            <a href="{{ url('/about/rti/organization-and-function') }}">
                                1 - Organization and Function
                            </a>

                            <a href="{{ url('/about/rti/budget-and-programmes') }}">
                                2 - Budget and Programmes
                            </a>

                            <a class="active" href="{{ url('/about/rti/publicity-and-public-interface') }}">
                                3 - Publicity and Public Interface
                            </a>

                            <a href="{{ url('/about/rti/e-governance') }}">
                                4 - E-Governance
                            </a>

                            <a href="{{ url('/about/rti/information-as-may-be-prescribed') }}">
                                5 - Information as may be Prescribed
                            </a>

                            <a href="{{ url('/about/rti/information-disclosed-on-own-initiative') }}">
                                6 - Information Disclosed on Own Initiative
                            </a>
                        </div>

                        <div class="rti-modern-list mt-4">

                            <div class="rti-disclosure-group">
                                <div class="rti-group-header">
                                    <span>3.1</span>
                                    <h3>Arrangement for consultation with or representation by the public</h3>
                                    <small>Section 4(1)(b)(vii) | F No. 1/6/2011-IR dt. 15.04.2013</small>
                                </div>

                                <div class="rti-card-grid">

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">3.1.1</div>
                                        <div class="rti-info-body">
                                            <h4>Relevant Acts, Rules, Forms and other documents normally accessed by citizens</h4>

                                            <p>Please click the following links for details:</p>

                                            <h5>Acts and Rules</h5>
                                            <div class="rti-link-stack">
                                                <a href="http://iimk.ac.in/uploads/userfiles/IIM Act 2017(1).pdf" target="_blank" rel="noopener">Indian Institute of Management Act 2017</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/IIM Rules 2018.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules 2018</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">Indian Institute of Management Kozhikode Regulations 2021</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIM (Amendment) Act 2023 Gazette Notification.pdf" target="_blank" rel="noopener">IIM (Amendment) Act 2023</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Indian Institutes of Management Rules (Amendment) 2023.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules (Amendment) 2023</a>
                                            </div>

                                            <h5 class="mt-3">Regulations</h5>
                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/academic-programmes/pgp" target="_blank" rel="noopener">PGP</a>
                                                <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership" target="_blank" rel="noopener">PGP-BL</a>
                                                <a href="https://iimk.ac.in/academic-programmes/PGPLSM" target="_blank" rel="noopener">PGP-LSM</a>
                                                <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Finance" target="_blank" rel="noopener">PGP-FIN</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/DPM-17 Batch Handbook.pdf" target="_blank" rel="noopener">DPM Handbook</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/DPM 17 Admissions Policy.pdf" target="_blank" rel="noopener">DPM Admission Policy</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Academic Handbook 17.pdf" target="_blank" rel="noopener">EPGP Academic Handbook</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIMK-EPGP17-Brochure Final.pdf" target="_blank" rel="noopener">EPGP Brochure</a>
                                            </div>

                                            <h5 class="mt-3">Rules, Manuals and Policies</h5>
                                            <div class="rti-link-stack">
                                                <a href="http://iimk.ac.in/uploads/userfiles/DELEGATION OF FINANCIAL POWERS - DIRECTOR, HEAD OF DEPARTMENTS.pdf" target="_blank" rel="noopener">Delegations of Financial Powers and Rules</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">Public Procurement Procedure at IIM Kozhikode</a>
                                                <a href="https://dopt.gov.in/sites/default/files/Compilation_FR_SR_English.pdf" target="_blank" rel="noopener">Fundamental Rules & Supplementary Rules</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/GFR - 2017.pdf" target="_blank" rel="noopener">General Financial Rules 2017</a>
                                                <a href="https://dopt.gov.in/sites/default/files/CCS_Conduct_Rules_1964_Updated_27Feb15_0.pdf" target="_blank" rel="noopener">Administrative Procedures are as per the CCS Conduct Rules</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/Admission Policy - Combined.pdf" target="_blank" rel="noopener">Admission Policy</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/HOSTEL RULES AND REGULATION.pdf" target="_blank" rel="noopener">Hostel Rules</a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.2</div>
                                        <div class="rti-info-body">
                                            <h4>Arrangements for consultation with or representation by members of the public</h4>
                                            <p>
                                                Members of the public in policy formulation / policy implementation,
                                                day & time allotted for visitors, and contact details of Information & Facilitation Counter
                                                to provide publications frequently sought by RTI applicants.
                                            </p>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.3</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Details of Special Purpose Vehicle, if any</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.4</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Detailed project reports</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.5</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Concession agreements</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.6</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Operation and maintenance manuals</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.7</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Other documents generated as per implementation of the PPP</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.8</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Information relating to fees, tolls or other revenues</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.9</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Information relating to outputs and outcomes</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.10</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: Process of selection of the private sector party</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">3.1.11</div>
                                        <div class="rti-info-body">
                                            <h4>Public-private partnerships: All payment made under the PPP project</h4>
                                            <p><strong>Nil</strong></p>
                                        </div>
                                    </article>

                                </div>
                            </div>

                            <div class="rti-accordion">

                                <details open>
                                    <summary>
                                        <span>3.2</span>
                                        Details of Policies / Decisions which affect the public
                                        <small>Section 4(1)(c)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>3.2.1 Policy decisions / legislations taken in the previous one year</strong>
                                                <p>
                                                    Publish all relevant facts while formulating important policies or announcing decisions
                                                    which affect public to make the process more interactive.
                                                </p>
                                                <p><strong>Nil</strong></p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>3.2.2 Outline the Public consultation process</strong>
                                                <p>
                                                    Publish all relevant facts while formulating important policies or announcing decisions
                                                    which affect public to make the process more interactive.
                                                </p>
                                                <p><strong>Nil</strong></p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>3.2.3 Outline the arrangement for consultation before formulation of policy</strong>
                                                <p>
                                                    Publish all relevant facts while formulating important policies or announcing decisions
                                                    which affect public to make the process more interactive.
                                                </p>
                                                <p><strong>Nil</strong></p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>3.3</span>
                                        Dissemination of Information
                                        <small>Section 4(3)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>3.3.1 Use of the most effective means of communication - Internet (website)</strong>
                                                <p>
                                                    The information dissemination primarily happens through the Institute’s Website.
                                                    Please click
                                                    <a href="https://iimk.ac.in" target="_blank" rel="noopener">here</a>
                                                    to visit the Institute’s Website.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>3.4</span>
                                        Form of accessibility of Information Manual / Handbook
                                        <small>Section 4(1)(b)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>3.4.1 Information manual / handbook available in electronic format</strong>

                                                <h5>Annual Reports</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2019-20(1).pdf" target="_blank" rel="noopener">2019-20</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2021-22(1).pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/Annual_Report_2022_23_English.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIM%20Kozhikode%20AR%202023-24-%20English.pdf" target="_blank" rel="noopener">2023-24</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIMK%20%20Annual%20Report%202024-25.pdf" target="_blank" rel="noopener">2024-25</a>
                                                </div>

                                                <h5 class="mt-3">Annual Accounts</h5>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2019-20.pdf" target="_blank" rel="noopener">2019-20</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2021-22.pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Annual%20Accounts%202022-23.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Annual Accounts 2023-24.pdf" target="_blank" rel="noopener">2023-24</a>
                                                </div>

                                                <h5 class="mt-3">Recruitment and Promotion Rules</h5>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/RecruitmentRules(1).pdf" target="_blank" rel="noopener">
                                                        Recruitment and Promotion Rules of IIM Kozhikode
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>3.4.2 Information manual / handbook available in Printed format</strong>

                                                <h5>Annual Reports</h5>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2019-20(1).pdf" target="_blank" rel="noopener">2019-20</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2021-22(1).pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/Annual_Report_2022_23_English.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIM%20Kozhikode%20AR%202023-24-%20English.pdf" target="_blank" rel="noopener">2023-24</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIMK%20%20Annual%20Report%202024-25.pdf" target="_blank" rel="noopener">2024-25</a>
                                                </div>

                                                <h5 class="mt-3">Annual Accounts</h5>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2019-20.pdf" target="_blank" rel="noopener">2019-20</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2021-22(1).pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Annual%20Accounts%202022-23.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Annual Accounts 2023-24.pdf" target="_blank" rel="noopener">2023-24</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>3.5</span>
                                        Availability of Information Manual / Handbook free of cost
                                        <small>Section 4(1)(b)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>3.5.1 / 3.5.2 List of materials available free of cost / at reasonable cost of the medium</strong>

                                                <p>
                                                    All the information manual / handbook are provided free of cost.
                                                    Please click the following links for details.
                                                </p>

                                                <h5>Regulations Available Online</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/academic-programmes/pgp" target="_blank" rel="noopener">PGP</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership" target="_blank" rel="noopener">PGP-BL</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/PGPLSM" target="_blank" rel="noopener">PGP-LSM</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Finance" target="_blank" rel="noopener">PGP-FIN</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM-17 Batch Handbook.pdf" target="_blank" rel="noopener">DPM Handbook</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM 17 Admissions Policy.pdf" target="_blank" rel="noopener">DPM Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Academic Handbook 17.pdf" target="_blank" rel="noopener">EPGP Academic Handbook</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK-EPGP17-Brochure Final.pdf" target="_blank" rel="noopener">EPGP Brochure</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/DELEGATION OF FINANCIAL POWERS - DIRECTOR, HEAD OF DEPARTMENTS.pdf" target="_blank" rel="noopener">Delegations of Financial Powers and Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">Public Procurement Procedure at IIM Kozhikode</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/Compilation_FR_SR_English.pdf" target="_blank" rel="noopener">Fundamental Rules & Supplementary Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/GFR - 2017.pdf" target="_blank" rel="noopener">General Financial Rules 2017</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/CCS_Conduct_Rules_1964_Updated_27Feb15_0.pdf" target="_blank" rel="noopener">Administrative Procedures are as per the CCS Conduct Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Admission Policy - Combined.pdf" target="_blank" rel="noopener">Admission Policy</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/HOSTEL RULES AND REGULATION.pdf" target="_blank" rel="noopener">Hostel Rules</a>
                                                </div>

                                                <h5 class="mt-3">Additional Information</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/tender-archives/" target="_blank" rel="noopener">Tenders - Live / Closed / Cancelled</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Research Projects (Completed and Ongoing).pdf" target="_blank" rel="noopener">Ongoing Research Projects</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Admission Policy - Combined(2).pdf" target="_blank" rel="noopener">PGP Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM 17 Admissions Policy(2).pdf" target="_blank" rel="noopener">DPM Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Faculty Recruitment Notifications.pdf" target="_blank" rel="noopener">Faculty Recruitment Notifications</a>
                                                    <a href="http://iimk.ac.in/vacancy" target="_blank" rel="noopener">Non-Faculty Recruitment Notifications</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/RecruitmentRules(1).pdf" target="_blank" rel="noopener">Recruitment and Promotion Rules of IIM Kozhikode</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                            </div>

                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection