@extends('layouts.app')

@section('title', 'E-Governance | IIM Kozhikode')

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
            <span>E-Governance</span>
        </div>

        <h1 class="hero-title">E-Governance</h1>
        <p class="hero-sub">
            RTI disclosure details related to electronic information, digital access, public facilities,
            grievance redressal, RTI applications, appeals and parliamentary replies.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-e-governance'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-e-governance'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="rti-section rti-organization-page">
                        <div class="section-kicker">RTI Disclosure</div>
                        <h2 class="section-heading">4 - E-Governance</h2>

                        <p class="lead-copy">
                            Disclosure under the Right to Information Act covering information available in electronic form,
                            facilities available to citizens for obtaining information, grievance redressal, RTI returns,
                            appeals and parliamentary questions.
                        </p>

                        <div class="rti-tab-list">
                            <a href="{{ url('/about/rti/organization-and-function') }}">
                                1 - Organization and Function
                            </a>

                            <a href="{{ url('/about/rti/budget-and-programmes') }}">
                                2 - Budget and Programmes
                            </a>

                            <a href="{{ url('/about/rti/publicity-and-public-interface') }}">
                                3 - Publicity and Public Interface
                            </a>

                            <a class="active" href="{{ url('/about/rti/e-governance') }}">
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
                                    <span>4.1</span>
                                    <h3>Language in which Information Manual / Handbook is available</h3>
                                    <small>F No. 1/6/2011-IR dt. 15.4.2013</small>
                                </div>

                                <div class="rti-card-grid">

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">4.1.1</div>
                                        <div class="rti-info-body">
                                            <h4>English</h4>

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
                                                <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2021-22.pdf" target="_blank" rel="noopener">2021-22</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Annual%20Accounts%202022-23.pdf" target="_blank" rel="noopener">2022-23</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Annual Accounts 2023-24.pdf" target="_blank" rel="noopener">2023-24</a>
                                            </div>

                                            <h5 class="mt-3">Other References</h5>
                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/RecruitmentRules(1).pdf" target="_blank" rel="noopener">
                                                    Recruitment and Promotion Rules of IIM Kozhikode
                                                </a>
                                                <a href="https://iimk.ac.in/RTI" target="_blank" rel="noopener">
                                                    Suo Moto Disclosure Page
                                                </a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">4.2.1</div>
                                        <div class="rti-info-body">
                                            <h4>Last Date of Annual Updating</h4>
                                            <p><strong>2024</strong></p>
                                        </div>
                                    </article>

                                </div>
                            </div>

                            <div class="rti-accordion">

                                <details open>
                                    <summary>
                                        <span>4.3</span>
                                        Information available in Electronic Form
                                        <small>Section 4(1)(b)(xiv)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.3.1 Details of information available in electronic form</strong>

                                                <p>Please click the following links for details.</p>

                                                <h5>Admission, Recruitment and Academic Information</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Admission Policy - Combined(1).pdf" target="_blank" rel="noopener">PGP Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM 17 Admissions Policy(1).pdf" target="_blank" rel="noopener">DPM Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/EPGP - 17 Admission Policy(1).pdf" target="_blank" rel="noopener">EPGP Admission Policy</a>
                                                    <a href="https://iimk.ac.in/vacancy" target="_blank" rel="noopener">Non-Faculty Recruitment Notifications</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RecruitmentRules(1).pdf" target="_blank" rel="noopener">Recruitment and Promotion Rules of IIM Kozhikode</a>
                                                    <a href="https://www.iimk.ac.in/academic-programmes" target="_blank" rel="noopener">Academic programs</a>
                                                </div>

                                                <h5 class="mt-3">Infrastructure & Development</h5>

                                                <div class="rti-link-stack">
                                                    <a href="https://www.iimk.ac.in/hostels-" target="_blank" rel="noopener">Hostels</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2_ Hostel Details.pdf" target="_blank" rel="noopener">Hostel Details</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK Guest House Allotment Norms-2023(2).pdf" target="_blank" rel="noopener">Guest Houses & Other Facilities</a>
                                                    <a href="https://www.iimk.ac.in/" target="_blank" rel="noopener">IIMK Website</a>
                                                </div>

                                                <p class="mt-3">
                                                    Other sports facilities in this Campus include- a multipurpose sports/football field,
                                                    Lawn Tennis courts (2 Nos.), Squash courts (2 Nos.) and a Swimming Pool.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.3.2 Name / title of the document / record / other information</strong>

                                                <h5>Academic</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Career Development.pdf" target="_blank" rel="noopener">Career Development</a>
                                                    <a href="https://iimk.ac.in/final-placements" target="_blank" rel="noopener">Placements report PGP</a>
                                                    <a href="https://iimk.ac.in/summer-placements" target="_blank" rel="noopener">Summer Placements report PGP</a>
                                                    <a href="https://iimk.ac.in/placement-report" target="_blank" rel="noopener">Placements report PGP BL</a>
                                                    <a href="https://www.iimk.ac.in/alumni" target="_blank" rel="noopener">Alumni Cell</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Career Development.pdf" target="_blank" rel="noopener">Special Lectures & Seminars</a>
                                                </div>

                                                <h5 class="mt-3">Curricular</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/academic-programmes/pgp/clubs" target="_blank" rel="noopener">Social Initiatives</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.3.3 / 4.3.4 Name / title of the document / record / other information and location where available</strong>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Student's Council.pdf" target="_blank" rel="noopener">Students Council</a>
                                                </div>

                                                <h5 class="mt-3">Co-Curricular Clubs</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3_ PGP Student Bodies.pdf" target="_blank" rel="noopener">PGP Student Bodies</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4_ PGP BL Student Bodies.pdf" target="_blank" rel="noopener">PGP BL Student Bodies</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Annexure 1 - PGP SCouncil.pdf" target="_blank" rel="noopener">PGP Scouncil</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Annexure 2 - PGP BL SCouncil.pdf" target="_blank" rel="noopener">PGP BL Scouncil</a>
                                                </div>

                                                <h5 class="mt-3">Annual Reports</h5>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2019-20(1).pdf" target="_blank" rel="noopener">2019-20</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2021-22(1).pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/Annual_Report_2022_23_English.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIM%20Kozhikode%20AR%202023-24-%20English.pdf" target="_blank" rel="noopener">2023-24</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIMK%20%20Annual%20Report%202024-25.pdf" target="_blank" rel="noopener">2024-25</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>4.4</span>
                                        Facilities available to Citizens for obtaining information
                                        <small>Section 4(1)(b)(xv)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.4.1 Name & location of the facilities</strong>

                                                <div class="rti-contact-grid">
                                                    <div class="rti-contact-box">
                                                        <h5>PGP</h5>
                                                        <p>
                                                            IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570
                                                        </p>
                                                        <a href="https://iimk.ac.in/academic-programmes/pgp" target="_blank" rel="noopener">View PGP</a>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>DPM</h5>
                                                        <p>
                                                            IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570
                                                        </p>
                                                        <a href="https://iimk.ac.in/academic-programmes/Fellow-Programme-in-Management" target="_blank" rel="noopener">View DPM</a>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>EPGP</h5>
                                                        <p>
                                                            IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570
                                                        </p>
                                                        <a href="https://iimk.ac.in/epgp" target="_blank" rel="noopener">View EPGP</a>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>EPGP Kochi Campus</h5>
                                                        <p>
                                                            Indian Institute of Management Kozhikode Kochi Campus,
                                                            First Floor, Software Development Block, Athulya IT Complex,
                                                            Infopark, Infopark – Post, Kochi-682042, Kerala
                                                        </p>
                                                        <a href="https://iimk.ac.in/academic-programmes/EPGP-KOCHI" target="_blank" rel="noopener">View EPGP Kochi</a>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>MDP</h5>
                                                        <p>
                                                            IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570
                                                        </p>
                                                        <a href="https://iimk.ac.in/academic-programmes/Management-Development-Programme-(MDP)" target="_blank" rel="noopener">View MDP</a>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Library</h5>
                                                        <p>
                                                            IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570
                                                        </p>
                                                        <a href="https://www.iimk.ac.in/library" target="_blank" rel="noopener">View Library</a>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>IIMK LIVE</h5>
                                                        <p>
                                                            IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570
                                                        </p>
                                                        <a href="https://www.iimklive.org/" target="_blank" rel="noopener">View IIMK LIVE</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.4.2 Details of Information made available</strong>

                                                <div class="rti-contact-grid">
                                                    <div class="rti-contact-box">
                                                        <h5>PGP Admission Enquiries</h5>
                                                        <p>
                                                            Admission Incharge, IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809213<br>
                                                            Email: admission-inc@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Doctoral Programme in Management</h5>
                                                        <p>
                                                            AO DPM Admissions, IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809380<br>
                                                            Email: dpm-inc@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>EPGP</h5>
                                                        <p>
                                                            AO EPGP Office, IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809417<br>
                                                            Email: aoepgp@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>EPGP Kochi Campus</h5>
                                                        <p>
                                                            Senior Administrative Officer, IIMK Kochi Campus,
                                                            First Floor, Software Development Block, Athulya IT Complex,
                                                            Infopark, Infopark – Post, Kochi-682042, Kerala<br>
                                                            Contact No: 0484-2415265<br>
                                                            Email: saokochi@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Management Development Programme</h5>
                                                        <p>
                                                            AO MDP Office, IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809208<br>
                                                            Email: mdp-inc@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Library</h5>
                                                        <p>
                                                            Library IIM Kozhikode, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809143<br>
                                                            Email: library@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Alumni Affairs</h5>
                                                        <p>
                                                            Alumni Affairs Office, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809414<br>
                                                            Email: alumnioffice@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>IIMK LIVE</h5>
                                                        <p>
                                                            General Manager IIM LIVE, IIM Kozhikode Campus – PO,
                                                            Kunnamangalam, Kozhikode-673570<br>
                                                            Contact No: 0495-2809669<br>
                                                            Email: lijo@iimklive.org
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>4.4.3 Working Hours of the facility</strong>

                                                <ul class="rti-clean-list">
                                                    <li><strong>IIMK Reception:</strong> 9:00 AM to 5.30 PM</li>
                                                    <li><strong>Library:</strong> 9:00 AM to 9.30 PM</li>
                                                    <li><strong>Computer Centre:</strong> 9:00 AM to 5.30 PM</li>
                                                    <li><strong>All Administrative Offices:</strong> 9:00 AM to 5.30 PM</li>
                                                    <li><strong>IIMK Dispensary:</strong> 24 x 7 Service</li>
                                                </ul>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.4.4 Contact person & contact details</strong>

                                                <div class="rti-contact-grid">
                                                    <div class="rti-contact-box">
                                                        <h5>IIMK Reception</h5>
                                                        <p>Contact No: 0495-2809100</p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>PGP Admission</h5>
                                                        <p>
                                                            Admission Incharge<br>
                                                            Contact No: 0495-2809213<br>
                                                            Email: <a href="mailto:admission-inc@iimk.ac.in">admission-inc@iimk.ac.in</a>
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Programme Office</h5>
                                                        <p>
                                                            Programme Office<br>
                                                            Contact No: 0495-2809262<br>
                                                            Email: csaa1@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>DPM Office</h5>
                                                        <p>
                                                            AO DPM Office<br>
                                                            Contact No: 0495-2809380<br>
                                                            Email: dpm-inc@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>EPGP Office</h5>
                                                        <p>
                                                            AO EPGP Office<br>
                                                            Contact No: 0495-2809417<br>
                                                            Email: aoepgp@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>EPGP Kochi Campus</h5>
                                                        <p>
                                                            Senior Administrative Officer IIMK Kochi Campus<br>
                                                            Contact No: 0484-2415265<br>
                                                            Email: saokochi@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>MDP Incharge</h5>
                                                        <p>
                                                            AO MDP Office<br>
                                                            Contact No: 0495-2809208<br>
                                                            Email: mdp-inc@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Alumni Affairs</h5>
                                                        <p>
                                                            AO Alumni Affairs Office<br>
                                                            Contact No: 0495-2809414<br>
                                                            Email: alumnioffice@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Library</h5>
                                                        <p>
                                                            Library Office<br>
                                                            Contact No: 0495-2809143<br>
                                                            Email: library@iimk.ac.in
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>IIMK LIVE</h5>
                                                        <p>
                                                            General Manager IIM LIVE<br>
                                                            Contact No: 0495-2809669<br>
                                                            Email: lijo@iimklive.org
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>4.5</span>
                                        Such other information as may be prescribed
                                        <small>Section 4(1)(b)(xvii)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>4.5.1 Grievance redressal mechanism</strong>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/SC%20ST%20OM0001.pdf" target="_blank" rel="noopener">Internal Complaints Committee on Caste based Discrimination</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/ICC IIM Kozhikode(5).pdf" target="_blank" rel="noopener">Internal Complaints Committee on Sexual Harassment</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Internal Grievance Resolution Cell (IGRC).pdf" target="_blank" rel="noopener">Internal Grievance Resolution Cell</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.5.2 Details of applications received under RTI and information provided</strong>

                                                <h5>2024-25</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return -1st Quarter.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return -IInd Quarter.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return - III Quarter.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return - IVth Quarter.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2023-24</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2023-2024.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2022-23</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2022-2023.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2022-2023.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2022-2023.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2022-2023.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2021-22</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2021-2022.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2021-2022.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2021-2022.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2021-2022.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2020-21</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2020-2021(1).pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2020-2021.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2020-2021.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2020-2021.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2019-20</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June) 2019-2020.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2019-2020.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2019-2020.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2019-2020.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.5.3 / 4.5.4 List of completed schemes/projects/programmes and schemes/projects/programmes underway</strong>

                                                <h5>Consultancy Projects</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Consultancy Project Completed during 2024-2025.pdf" target="_blank" rel="noopener">Completed Consultancy Projects 2024-25</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Consultancy Projects (2023-24).pdf" target="_blank" rel="noopener">Consultancy Projects 2023-24</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Consultancy Projects.pdf" target="_blank" rel="noopener">Consultancy Projects 2022-23</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Consultancy Projects.pdf" target="_blank" rel="noopener">Consultancy Projects 2021-22</a>
                                                </div>

                                                <h5 class="mt-3">Completed and Ongoing Consultancy Projects</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Consultancy Project Completed during 2024-2025.pdf" target="_blank" rel="noopener">Completed and Ongoing 2024-25</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Consultancy Projects (2023-24)(1).pdf" target="_blank" rel="noopener">Completed and Ongoing 2023-24</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Consultancy Projects.pdf" target="_blank" rel="noopener">Underway 2022-23</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Consultancy Projects.pdf" target="_blank" rel="noopener">Underway 2021-22</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.5.5 Details of all contracts entered into</strong>

                                                <p>
                                                    Details include name of the contractor, amount of contract and period of completion of contract.
                                                    Details regarding works contracts are available in the eWizard portal.
                                                </p>

                                                <div class="rti-highlight-box">
                                                    <p>
                                                        Please visit:
                                                        <a href="https://mhrd.ewizard.in" target="_blank" rel="noopener">
                                                            https://mhrd.ewizard.in
                                                        </a>
                                                    </p>

                                                    <p>
                                                        Live Tenders, Tender Closing in 48Hrs, Tenders Due for Open,
                                                        Opened and Awarded Tenders, Cancelled Tenders and Auctions are available through the portal.
                                                    </p>

                                                    <p>
                                                        Please click at "Tender Number" box and enter <strong><em>iimk</em></strong>,
                                                        then fill captcha and proceed.
                                                    </p>
                                                </div>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/tender-archives/" target="_blank" rel="noopener">
                                                        Procurement through IIMK Website
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>4.5.6 Annual Report</strong>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2019-20(1).pdf" target="_blank" rel="noopener">2019-20</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL REPORTS - 2021-22(1).pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/Annual_Report_2022_23_English.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIM%20Kozhikode%20AR%202023-24-%20English.pdf" target="_blank" rel="noopener">2023-24</a>
                                                    <a href="https://iimk.ac.in/uploads/Annual%20Reports/IIMK%20%20Annual%20Report%202024-25.pdf" target="_blank" rel="noopener">2024-25</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>4.5.7 Frequently Asked Questions</strong>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/FAQs.pdf" target="_blank" rel="noopener">FAQs</a>
                                                    <a href="https://iimk.ac.in/libportal/faqs.php" target="_blank" rel="noopener">FAQ on Library</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.5.8 Any other information</strong>

                                                <p>
                                                    Documents are accessible to the public in electronic form.
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Citizen's Charter.pdf" target="_blank" rel="noopener">Citizen's Charter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Emergency Contact Numbers.pdf" target="_blank" rel="noopener">Emergency Contact Numbers</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>4.6</span>
                                        Receipt & Disposal of RTI Applications and Appeals
                                        <small>F. No. 1/6/2011-IR dt. 15.04.2013</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.6.1 Details of applications received and disposed</strong>

                                                <h5>2024-25</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return -1st Quarter.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return -IInd Quarter.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return - III Quarter.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return - IVth Quarter.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2023-24</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2023-2024.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/2nd Quarter.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter(1).pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter(1).pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2022-23</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2022-2023.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2022-2023.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2022-2023.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2022-2023.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2021-22</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2021-2022.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2021-2022.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2021-2022.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2021-2022.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2020-21</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2020-2021(1).pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2020-2021.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2020-2021.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2020-2021.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2019-20</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June) 2019-2020.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2019-2020.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2019-2020.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2019-2020.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.6.2 Details of appeals received, and orders issued</strong>

                                                <p>Please click to view the details of appeals received and information provided.</p>

                                                <h5>2024-25</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return -1st Quarter.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return -IInd Quarter.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return - III Quarter.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/RTI Quarterly Return - IVth Quarter.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2023-24</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2023-2024.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2022-23</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2022-2023.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2022-2023.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2022-2023.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2022-2023.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2021-22</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2021-2022.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2021-2022.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2021-2022.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2021-2022.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2020-21</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June)2020-2021(1).pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2020-2021.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2020-2021.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2020-2021.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>

                                                <h5 class="mt-3">2019-20</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Ist Quarter (April-June) 2019-2020.pdf" target="_blank" rel="noopener">1st Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2nd Quarter (July-Sept)2019-2020.pdf" target="_blank" rel="noopener">2nd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3rd Quarter (Oct-Dec)2019-2020.pdf" target="_blank" rel="noopener">3rd Quarter</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4th Quarter (Jan-Mar)2019-2020.pdf" target="_blank" rel="noopener">4th Quarter</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>4.7</span>
                                        Replies to Questions asked in the Parliament
                                        <small>Section 4(1)(d)(2)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>4.7.1 Details of questions asked and replies given</strong>

                                                <p>
                                                    Please click the links below to view the queries received from the Parliament
                                                    and replies provided by the Institute.
                                                </p>

                                                <h5>2024-25</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Parliamentray Questions.pdf" target="_blank" rel="noopener">Parliamentary Questions and replies</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Lok Sabha Questions 2024-25.pdf" target="_blank" rel="noopener">Lok Sabha Question and replies</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Rajya Sabha  2024-25.pdf" target="_blank" rel="noopener">Rajya Sabha questions and replies</a>
                                                </div>

                                                <h5 class="mt-3">Previous Years</h5>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/queries.pdf" target="_blank" rel="noopener">2023-24</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Parliamentary Questions &amp; Reply 2022-23.pdf" target="_blank" rel="noopener">2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Parliamentary Questions &amp; Reply 2021-22.pdf" target="_blank" rel="noopener">2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Parliamentary Questions &amp; Reply 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Parliamentary Questions &amp; Reply 2019-20.pdf" target="_blank" rel="noopener">2019-20</a>
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