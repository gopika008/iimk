@extends('layouts.app')

@section('title', 'Organization and Function | IIM Kozhikode')

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
            <span>Organization and Function</span>
        </div>

        <h1 class="hero-title">Organization and Function</h1>
        <p class="hero-sub">
            RTI disclosure details related to organisation, functions, duties, decision-making process,
            institutional records, committees and public information officers.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-organization'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
				@include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-organization'])
               
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="rti-section rti-organization-page">
                        <div class="section-kicker">RTI Disclosure</div>
                        <h2 class="section-heading">1 - Organization and Function</h2>

                        <p class="lead-copy">
                            Disclosure under Section 4 of the Right to Information Act, covering organisation,
                            functions, duties, decision-making process, rules, records, committees and public information officers.
                        </p>

                        <div class="rti-tab-list">
                            <a class="active" href="{{ url('/about/rti/organization-and-function') }}">
                                1 - Organization and Function
                            </a>

                            <a href="{{ url('/about/rti/budget-and-programmes') }}">
                                2 - Budget and Programmes
                            </a>

                            <a href="{{ url('/about/rti/publicity-and-public-interface') }}">
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
                                    <span>1.1</span>
                                    <h3>Particulars of Organisation, Functions and Duties</h3>
                                    <small>Section 4(1)(b)(i)</small>
                                </div>

                                <div class="rti-card-grid">

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">1.1.1</div>
                                        <div class="rti-info-body">
                                            <h4>Name and Address of the Organization</h4>

                                            <p>
                                                Indian Institute of Management Kozhikode, IIM Kozhikode Campus – P.O,
                                                Kunnamangalam, Kozhikode-673570, Kerala
                                            </p>

                                            <p>
                                                Indian Institute of Management Kozhikode Kochi Campus, First Floor,
                                                Software Development Block, Athulya IT Complex, Infopark,
                                                Infopark – Post, Kochi-682042, Kerala
                                            </p>

                                            <p>
                                                Website:
                                                <a href="https://iimk.ac.in/" target="_blank" rel="noopener">
                                                    https://iimk.ac.in
                                                </a>
                                            </p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">1.1.2</div>
                                        <div class="rti-info-body">
                                            <h4>Head of the organization</h4>

                                            <p><strong>Prof. Debashis Chatterjee, Director</strong></p>
                                            <p>Email: director@iimk.ac.in</p>
                                            <p>Tel No: 0495 2809200</p>
                                            <p>Date of Joining IIM Kozhikode: 21-06-2023</p>

                                            <a href="https://iimk.ac.in/faculty-profiles/DEBASHIS-CHATTERJEE" target="_blank" rel="noopener">
                                                View Profile of the Director
                                            </a>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">1.1.3</div>
                                        <div class="rti-info-body">
                                            <h4>Vision, Mission and Key objectives</h4>

                                            <p>
                                                <strong>Vision:</strong> Globalizing Indian Thought by Inculcating
                                                Authenticity (Satyam), Sustainability (Nityam) and Fulfillment (Purnam).
                                            </p>

                                            <p>
                                                <strong>Mission:</strong> The Institute seeks to inculcate a spirit of wholesome learning
                                                and create a unique space of global reckoning thereby nurturing capable and dependable
                                                management thinkers in the pursuit of developing socially responsible and environmentally
                                                friendly practitioners, leaders and educators who will contribute towards creating a better world.
                                            </p>

                                            <h5>Objectives</h5>

                                            <ol class="rti-clean-list">
                                                <li>Produce world class research relevant to the needs of Indian society and industry.</li>
                                                <li>Create and sustain innovative educational programmes in the areas of management, public policy and liberal studies targeted towards the emerging needs of Indian society and economy.</li>
                                                <li>Provide training and consulting support to the industry, government and non-government organisations to strengthen the existing management process.</li>
                                                <li>Achieve world class standards in infrastructure, faculty student ratio, quantity and quality of publications as benchmarked against the best institutes in the world.</li>
                                                <li>Maintain excellent outcomes in terms of graduating student’s academic performance, satisfaction and long term career progression.</li>
                                                <li>Promote research and dissemination of knowledge in Indian and indigenous traditions in management thought.</li>
                                            </ol>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">1.1.4</div>
                                        <div class="rti-info-body">
                                            <h4>Functions and Duties</h4>

                                            <p><strong>Management Education and Research</strong>, as per:</p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIM Act 2017(1).pdf" target="_blank" rel="noopener">Indian Institute of Management Act 2017</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIM Rules 2018.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules 2018</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">Indian Institute of Management Kozhikode Regulations 2021</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIM (Amendment) Act 2023 Gazette Notification.pdf" target="_blank" rel="noopener">IIM (Amendment) Act 2023</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Indian Institutes of Management Rules (Amendment) 2023.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules (Amendment) 2023</a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">1.1.5</div>
                                        <div class="rti-info-body">
                                            <h4>Organization Chart</h4>

                                            <p>Please click the link below to view the Organization Chart.</p>

                                            <a href="https://iimk.ac.in/uploads/userfiles/IIMK Organogram-2025_2_4.pdf" target="_blank" rel="noopener">
                                                View Organization Chart
                                            </a>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">1.1.6</div>
                                        <div class="rti-info-body">
                                            <h4>Genesis, inception, formation, departments, HoDs and committees</h4>

                                            <p>
                                                Indian Institute of Management Kozhikode (IIMK) spread over about 112.5 acres of land
                                                was set up in the year 1996. The Institute has a built up area of <strong>1,03,000</strong>
                                                sq. meter built in Five Phases besides, the Institute has an off Campus located in Info park,
                                                Kakkanad, Kochi, Kerala in a leased Premise having an approx. area of 12500 Square feet.
                                                The Institute has 20 well-designed hostels capable of accommodating about 1400 students.
                                                All the hostel rooms have been provided with a LAN and Wi-Fi connection to cater to the
                                                computing needs of the students. The Vision of IIMK is <strong>‘Globalizing Indian Thought’</strong>
                                                by Inculcating Authenticity (Satyam), Sustainability (Nityam) and Fulfillment (Purnam).
                                            </p>

                                            <p>
                                                The Institute started its first course of Post Graduate Program (PGP) in the year 1997
                                                with 42 students but has grown tremendously over the years with a current strength of more
                                                than 1200 students pursuing different programmes in Post Graduate Programme (PGP) and
                                                Doctoral Programme in Management (DPM) courses, making it the fastest growing management
                                                school in the country. Currently the Institute has a strength of 100 full time faculty members
                                                and 90 Non-Teaching staff, in addition to the support staff to look after the academic and
                                                administrative functioning of IIM Kozhikode.
                                            </p>

                                            <div class="rti-highlight-box">
                                                <p>
                                                    <strong>The Academic Programs are</strong> – Doctoral Program in Management,
                                                    PGP Flagship Program, PGP-Business Leadership, PGP-Finance and PGP-Liberal Studies in management.
                                                </p>

                                                <p>
                                                    <strong>The Executive Programs are</strong> – PhD in Management (Practice Track),
                                                    MBA (from IIMK Kochi campus), Executive Post Graduate Programmes
                                                    (interactive Distance Learning Mode), Management development program (MDP)
                                                    and Faculty Development program (FDP).
                                                </p>
                                            </div>

                                            <p>
                                                The IT setup at IIMK comprises of a multi layered, fully enabled IT services in the campus with latest IT resources available.
                                                The entire campus has been Wi-Fi enabled to provide mobility to the users in accessing various services available on institute's network.
                                                All the buildings including hostels in the campus are part of the campus LAN and all the services available on the LAN can be accessed from any node.
                                                IIMK library has become one of the finest and best in class management information centers in the country, complemented with state-of-art technology supports to the users.
                                                It is a cornerstone that supports learning, teaching, and research activities.
                                            </p>

                                            <p>
                                                The Institute has a strong International Exchange Programme for students and faculty with several leading Management Institutes in EU and ASEAN countries
                                                like SDA, Bacconi, Jonkoping, Sweden, Copenhagen Business School, Denmark, ESCAP-EAP, France; University of Queensland, Austria,
                                                Victoria University of Wellington and so on. An active member of the Strategic Management Forum, IIMK lays stress on organizing Seminar/Conferences
                                                and conducts management programs for teachers. Leading Management Institutions like IIM Ahmedabad, Bangalore, Calcutta, Indore and Lucknow
                                                along with MDI, Gurgaon, XLRI, Jamshedpur and IIFT, New Delhi join hands to conduct week long faculty development Programme on various subjects
                                                in the field of Strategic Management.
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/Power-and-Duties-of-Officer-of-IIM-Kozhikode" target="_blank" rel="noopener">Departments and HoDs</a>
                                                <a href="https://www.iimk.ac.in/board-of-governors" target="_blank" rel="noopener">Board of Governors</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Office Order No_ 298 (Constitution of IFC).pdf" target="_blank" rel="noopener">Finance Committee</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Academic Committee(1).pdf" target="_blank" rel="noopener">Academic Committee</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/SC%20ST%20OM0001.pdf" target="_blank" rel="noopener">Internal Complaints Committee on Caste based Discrimination</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/ICC IIM Kozhikode-Kochi-22OCT25.pdf" target="_blank" rel="noopener">Internal Complaints Committee on Sexual Harassment</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Staff advisory committee.pdf" target="_blank" rel="noopener">Staff Advisory Committee</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/ICC IIM Kozhikode-Kochi-22OCT25.pdf" target="_blank" rel="noopener">Internal Complaints Committee on Sexual Harassment at Kochi Campus</a>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>

                            <div class="rti-accordion">

                                <details open>
                                    <summary>
                                        <span>1.2</span>
                                        Power and Duties of its Officers and Employees
                                        <small>Section 4(1)(b)(ii)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>1.2.1 Powers and Duties of Officers</strong>
                                                <p>
                                                    The Powers and Duties of the Officers and Employees are derived from the IIM Act,
                                                    IIM Rules and IIM Kozhikode Regulations and exercised as per the details provided
                                                    in the following links:
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Act 2017(1).pdf" target="_blank" rel="noopener">Indian Institute of Management Act 2017</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Rules 2018.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules 2018</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">Indian Institute of Management Kozhikode Regulations 2021</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIM (Amendment) Act 2023 Gazette Notification.pdf" target="_blank" rel="noopener">IIM (Amendment) Act 2023</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Indian Institutes of Management Rules (Amendment) 2023.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules (Amendment) 2023</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.2.2 Power and Duties of other Employees</strong>
                                                <p>
                                                    Please click
                                                    <a href="https://iimk.ac.in/Power-and-Duties-of-Officer-of-IIM-Kozhikode" target="_blank" rel="noopener">here</a>
                                                    to view the powers and duties of Group A Officers.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.2.3 / 1.2.4 Rules/orders under which powers and duty are derived and exercised</strong>
                                                <p>
                                                    The admission of students for various Post Graduate Management Programmes and Doctoral
                                                    Programme in Management (PhD) is based on rules/policies framed for admission to these courses.
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DELEGATION OF FINANCIAL POWERS TO THE OFFICERS AT THE LEVEL OF HEAD OF DEPARTMENTS OF IIM KOZHIKODE.pdf" target="_blank" rel="noopener">Delegations of Financial Powers and Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">Public Procurement Procedure at IIM Kozhikode</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/Compilation_FR_SR_English.pdf" target="_blank" rel="noopener">Fundamental Rules & Supplementary Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/GFR - 2017.pdf" target="_blank" rel="noopener">General Financial Rules 2017</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/CCS_Conduct_Rules_1964_Updated_27Feb15_0.pdf" target="_blank" rel="noopener">Administrative Procedures as per CCS Conduct Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order No_ 276 (Reconstitution of EPGP Admissions Committee &amp; Executive Committee) (1).pdf" target="_blank" rel="noopener">EPGP Executive Committee</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/EPGP-Kochi-Executive-Committee.pdf" target="_blank" rel="noopener">EPGP-Kochi Executive Committee</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Appointment of Associate Dean-Kochi Campus.pdf" target="_blank" rel="noopener">Appointment of Associate Dean-Kochi Campus</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.2.5 Work allocation</strong>
                                                <p>As per details in 1.2.1 and 1.2.2.</p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>1.3</span>
                                        Procedure followed in decision-making process
                                        <small>Section 4(1)(b)(iii)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.3.1 Process of decision making: Identify key decision-making points</strong>
                                                <p>
                                                    Decisions are taken in accordance with the provisions of the Act/Rules/Regulations/
                                                    Academic Rules & Regulations/Policies, Orders etc. of the Institute, directions/orders
                                                    received from Ministry of Education and the decisions taken by BoG from time to time
                                                    and procedures/practices of the Institute. Policy matters are decided at the level of Director/BoG.
                                                </p>
                                                <p>
                                                    The Director, Deans, Chief Administrative Officer and Officers of the Institute have been
                                                    authorised by the IIM Act 2017, IIM Rules 2018 and IIM Kozhikode Regulations 2021 and
                                                    through the Delegation of Financial Powers to take key decisions.
                                                </p>
                                                <p>
                                                    The Institute has adopted a decentralized administrative structure, thereby enabling Departments
                                                    to take decisions in conformity with the rules of the Institute and within the delegated powers.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.3.2 Final decision-making authority</strong>
                                                <p>
                                                    The Director in most day to day cases and the Board of Governors in specific cases as mandated
                                                    in the IIM Act 2017, IIM Rules 2018 and IIM Kozhikode Regulations 2021.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.3.3 Related provisions, acts, rules etc.</strong>
                                                <p>Please click the following links for details:</p>

                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Act 2017(1).pdf" target="_blank" rel="noopener">Indian Institute of Management Act 2017</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Rules 2018.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules 2018</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">Indian Institute of Management Kozhikode Regulations 2021</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/DELEGATION OF FINANCIAL POWERS - DIRECTOR, HEAD OF DEPARTMENTS.pdf" target="_blank" rel="noopener">Delegations of Financial Powers and Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">Public Procurement Procedure at IIM Kozhikode</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/Compilation_FR_SR_English.pdf" target="_blank" rel="noopener">Fundamental Rules & Supplementary Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/GFR - 2017.pdf" target="_blank" rel="noopener">General Financial Rules 2017</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/CCS_Conduct_Rules_1964_Updated_27Feb15_0.pdf" target="_blank" rel="noopener">Administrative Procedures are as per the CCS Conduct Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIM (Amendment) Act 2023 Gazette Notification.pdf" target="_blank" rel="noopener">IIM (Amendment) Act 2023</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Indian Institutes of Management Rules (Amendment) 2023.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules (Amendment) 2023</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.3.4 Time limit for taking decisions, if any</strong>
                                                <p>Time taken for taking various decisions in various sections are as follows:</p>

                                                <ul class="rti-clean-list">
                                                    <li>Academics - As per Programmes and Schedule of events</li>
                                                    <li>
                                                        <a href="https://iimk.ac.in/uploads/userfiles/Time Limit for payment Actions.pdf" target="_blank" rel="noopener">Finance & Accounts</a>
                                                    </li>
                                                    <li>
                                                        Stores and Purchase – As per
                                                        <a href="https://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">
                                                            Public Procurement Procedure at IIM Kozhikode
                                                        </a>
                                                    </li>
                                                    <li>
                                                        Administration - Decisions are taken as per priority of the functional requirement
                                                        of the day to day activities of various Departments/Sections.
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.3.5 Channel of Supervision and accountability</strong>
                                                <p>
                                                    As per the
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK Organogram-2025_2_4(1).pdf" target="_blank" rel="noopener">
                                                        Organizational Chart and Hierarchy of the institute
                                                    </a>.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>1.4</span>
                                        Norms for Discharge of Functions
                                        <small>Section 4(1)(b)(iv)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.4.1 Nature of functions/services offered</strong>
                                                <p>
                                                    To provide high quality education in Management, create and sustain innovative educational programmes
                                                    in the areas of management, public policy and liberal studies targeted towards the emerging needs
                                                    of Indian society and economy and provide a creative atmosphere for inter-disciplinary research
                                                    both by the students and the faculty.
                                                </p>
                                                <p>
                                                    Provide training and consulting support to the industry, government and non-government organisations
                                                    to strengthen the existing management process.
                                                </p>
                                                <p>
                                                    Promote research and dissemination of knowledge in Indian and indigenous traditions in management thought.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.4.2 Norms/standards for functions/service delivery</strong>
                                                <p>
                                                    Norms and Standards for various activities of the Institute are those as laid down by the competent authority,
                                                    such as, the BoG. The Annual Report prepared under the direction of BoG and its annual meetings along with audited accounts,
                                                    etc., of the Institute.
                                                </p>
                                                <p>
                                                    The Annual Report of the Institute along with Audited Accounts are placed on the table of both the Houses of the Parliament.
                                                </p>
                                                <p>
                                                    IIM Kozhikode is an Institute of National Importance and International Repute imparting higher learning in various
                                                    post graduate management programmes and devoted to teaching and research. All the Administrative Offices, Central Facilities,
                                                    Libraries, Computer Lab, Hostels etc. are co-located on its Campus which facilitate quick communication channels to and from.
                                                    The general code for discharge of its daily functions is to accomplish work on day-to-day basis, keeping in view the requirement
                                                    and urgency of each case.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.4.3 Process by which these services can be accessed</strong>
                                                <p>Please click the following links for details on the facilities available at IIM Kozhikode:</p>
                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/library" target="_blank" rel="noopener">Library</a>
                                                    <a href="https://iimk.ac.in/rainwater-harvesting" target="_blank" rel="noopener">Water Resource Management - Rain Water Harvesting</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.4.4 Time limit for achieving the targets</strong>
                                                <p>As per Ser No. 1.3.4</p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.4.5 Process of redressal of Grievances</strong>
                                                <p>
                                                    RTI applications can be filed
                                                    <a href="https://iimk.ac.in/How-to-access-Information" target="_blank" rel="noopener">here</a>.
                                                </p>

                                                <ol class="rti-clean-list">
                                                    <li>
                                                        Internal Grievance Resolution Cell. A Cell has been constituted to develop a responsible and accountable attitude among all
                                                        the staff and faculty in order to maintain a harmonious atmosphere in the institute. The details can be seen
                                                        <a href="https://iimk.ac.in/uploads/userfiles/ICC IIM Kozhikode(1).pdf" target="_blank" rel="noopener">here</a>.
                                                    </li>
                                                    <li>
                                                        Internal Complaints Committee on caste-based discrimination. A Committee has been constituted to address the complaints
                                                        on caste-based discrimination against SC/ST/OBCs, Differently abled Students, Staff and Faculty. The details can be seen
                                                        <a href="https://iimk.ac.in/uploads/userfiles/SC%20ST%20OM0001.pdf" target="_blank" rel="noopener">here</a>.
                                                    </li>
                                                    <li>
                                                        Internal Complaints Committee on Sexual Harassment. A Committee has been constituted to go into and recommend necessary steps
                                                        with regard to complaints on sexual harassment and to address issues related to Prevention, Prohibition and Redressal of such complaints
                                                        as per POSH Act. The details can be seen
                                                        <a href="https://iimk.ac.in/uploads/userfiles/ICC at Kozhikode and Kochi_2025.pdf" target="_blank" rel="noopener">here</a>.
                                                    </li>
                                                    <li>
                                                        Please click
                                                        <a href="https://pgportal.gov.in/" target="_blank" rel="noopener">here</a>
                                                        to go to the Central Public Grievance Portal (CPGRAMS).
                                                    </li>
                                                    <li>
                                                        Nodal Officer: Lt. Col. M. Julius George (Retd), Head - Administration & HR IIM Kozhikode.
                                                    </li>
                                                    <li>
                                                        Chief Vigilance Officer: Professor M. Geetha, Professor, IIM Kozhikode.
                                                    </li>
                                                    <li>
                                                        <a href="https://iimk.ac.in/uploads/userfiles/Anti-ragging Committee and Anti-ragging Squad.pdf" target="_blank" rel="noopener">
                                                            Anti-ragging Committee and Squad
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://iimk.ac.in/uploads/userfiles/UGC_Programme.pdf" target="_blank" rel="noopener">
                                                            National Ragging Prevention Programme Details
                                                        </a>
                                                    </li>
                                                </ol>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>1.5</span>
                                        Rules, Regulations, Instructions Manual and Records for Discharging Functions
                                        <small>Section 4(1)(b)(v)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.5.1 Title and nature of the record/manual/instruction</strong>
                                                <p>
                                                    The admission of students and research scholars to various undergraduate and post graduate courses
                                                    and PhD is based on guidelines framed for admission to these courses.
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/DELEGATION OF FINANCIAL POWERS - DIRECTOR, HEAD OF DEPARTMENTS.pdf" target="_blank" rel="noopener">Delegations of Financial Powers and Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">Public Procurement Procedure at IIM Kozhikode</a>
                                                    <a href="http://dopt.gov.in/sites/default/files/Compilation_FR_SR_English.pdf" target="_blank" rel="noopener">Fundamental Rules & Supplementary Rules</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/GFR - 2017.pdf" target="_blank" rel="noopener">General Financial Rules 2017</a>
                                                    <a href="https://dopt.gov.in/sites/default/files/CCS_Conduct_Rules_1964_Updated_27Feb15_0.pdf" target="_blank" rel="noopener">Administrative Procedures are as per the CCS Conduct Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Admission Policy - Combined.pdf" target="_blank" rel="noopener">Admission Policy</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/pgp" target="_blank" rel="noopener">PGP</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership" target="_blank" rel="noopener">PGP-BL</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/PGPLSM" target="_blank" rel="noopener">PGP-LSM</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Finance" target="_blank" rel="noopener">PGP-FIN</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/HOSTEL RULES AND REGULATION.pdf" target="_blank" rel="noopener">Hostel Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM-17 Batch Handbook.pdf" target="_blank" rel="noopener">DPM Handbook</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM 17 Admissions Policy.pdf" target="_blank" rel="noopener">DPM Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Academic Handbook 17.pdf" target="_blank" rel="noopener">EPGP Academic Handbook</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK-EPGP17-Brochure Final.pdf" target="_blank" rel="noopener">EPGP Brochure</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.5.2 List of Rules, regulations, instructions manuals and records</strong>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">IIM Kozhikode Regulations 2021</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/pgp" target="_blank" rel="noopener">PGP</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership" target="_blank" rel="noopener">PGP-BL</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/PGPLSM" target="_blank" rel="noopener">PGP-LSM</a>
                                                    <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Finance" target="_blank" rel="noopener">PGP-FIN</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/HOSTEL RULES AND REGULATION.pdf" target="_blank" rel="noopener">Hostel Rules</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM-17 Batch Handbook.pdf" target="_blank" rel="noopener">DPM Handbook</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/DPM 17 Admissions Policy.pdf" target="_blank" rel="noopener">DPM Admission Policy</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Academic Handbook 17.pdf" target="_blank" rel="noopener">EPGP Academic Handbook</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK-EPGP17-Brochure Final.pdf" target="_blank" rel="noopener">EPGP Brochure</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Public Procurement Procedure at IIM Kozhikode(1).pdf" target="_blank" rel="noopener">Public Procurement Procedure at IIM Kozhikode</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.5.3 Acts/Rules manuals etc.</strong>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Act 2017(1).pdf" target="_blank" rel="noopener">Indian Institute of Management Act 2017</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Rules 2018.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules 2018</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">Indian Institute of Management Kozhikode Regulations 2021</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIM (Amendment) Act 2023 Gazette Notification.pdf" target="_blank" rel="noopener">IIM (Amendment) Act 2023</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Indian Institutes of Management Rules (Amendment) 2023.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules (Amendment) 2023</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.5.4 Transfer Policy and Transfer Orders</strong>
                                                <p><strong>Transfer policy</strong></p>
                                                <p>
                                                    There is no transfer policy for the faculty of the Institute.
                                                    Transfer of Non-Teaching employees is done as per functional requirement arising from time to time
                                                    in various Departments/Sections/Kochi Campus.
                                                </p>
                                                <p>
                                                    Transfer Orders of previous years can be viewed here:
                                                </p>
                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Transfer Orders -2021, 2022, 2023.pdf" target="_blank" rel="noopener">(1)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/1.pdf" target="_blank" rel="noopener">(2)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2.pdf" target="_blank" rel="noopener">(3)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3.pdf" target="_blank" rel="noopener">(4)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4.pdf" target="_blank" rel="noopener">(5)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/5.pdf" target="_blank" rel="noopener">(6)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 1.pdf" target="_blank" rel="noopener">(7)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 2.pdf" target="_blank" rel="noopener">(8)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 3.pdf" target="_blank" rel="noopener">(9)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 4.pdf" target="_blank" rel="noopener">(10)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 5.pdf" target="_blank" rel="noopener">(11)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 6.pdf" target="_blank" rel="noopener">(12)</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>1.6</span>
                                        Categories of Documents held by the Authority under its Control
                                        <small>Section 4(1)(b)(vi)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.6.1 Categories of documents</strong>
                                                <p>
                                                    IIM Kozhikode has been declared as an Institute of National Importance as per Indian Institute
                                                    of Management Act 2017. The following are the documents held under its control.
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Act 2017(1).pdf" target="_blank" rel="noopener">Indian Institute of Management Act 2017</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Rules 2018.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules 2018</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/IIM Kozhikode Regulations 2021.pdf" target="_blank" rel="noopener">Indian Institute of Management Kozhikode Regulations 2021</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/MoU Between IIMK and DOHED, MoE.pdf" target="_blank" rel="noopener">Memorandum of Understanding between Ministry of Education and IIM Kozhikode</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK - GST Registration Certificate.pdf" target="_blank" rel="noopener">Certificate of GST Registration</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIMK - PAN.pdf" target="_blank" rel="noopener">PAN Card</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Graduated Students Details.pdf" target="_blank" rel="noopener">Record of Degrees Awarded</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/IIM (Amendment) Act 2023 Gazette Notification.pdf" target="_blank" rel="noopener">IIM (Amendment) Act 2023</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Indian Institutes of Management Rules (Amendment) 2023.pdf" target="_blank" rel="noopener">Indian Institute of Management Rules (Amendment) 2023</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.6.2 Custodian of documents/categories</strong>
                                                <p>
                                                    Please click
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Custodian of Documents.pdf" target="_blank" rel="noopener">here</a>
                                                    to view the details of custodian of various documents.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>1.7</span>
                                        Boards, Councils, Committees and other Bodies
                                        <small>Section 4(1)(b)(viii)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.7.1 / 1.7.2 / 1.7.3 Name, Composition and Date of Constitution</strong>

                                                <div class="rti-link-stack">
                                                    <a href="https://www.iimk.ac.in/board-of-governors" target="_blank" rel="noopener">Board of Governors</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Finance Committee Order - Mar 2024(1).pdf" target="_blank" rel="noopener">Finance Committee</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Academic Committee(3).pdf" target="_blank" rel="noopener">Academic Committee</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.7.4 Term/Tenure</strong>
                                                <p>
                                                    The Boards/Committees are perpetual in nature and are constituted as per the terms of the
                                                    IIM Act 2017, IIM Rules 2018 and the Regulations of the institute.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.7.5 Powers and Functions</strong>
                                                <p>
                                                    As defined in the IIM Act, 2017, IIM Rules and IIM Kozhikode Regulations 2021.
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Academic Committee.pdf" target="_blank" rel="noopener">Academic Committees</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Functions of IFC.pdf" target="_blank" rel="noopener">IFC</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.7.6 Whether their meetings are open to the public?</strong>
                                                <p>No</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.7.7 Whether the minutes of the meetings are open to the public?</strong>
                                                <p>Yes, as on need basis</p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.7.8 Place where the minutes if open to the public are available?</strong>
                                                <p>Minutes of the Meetings of Board of Governors (Held with Secretary BoG)</p>
                                                <p>Minutes of the Meetings of Finance Committee (Held with Financial Controller)</p>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/BOG-Minutes" target="_blank" rel="noopener">Minutes of the Meetings of Board of Governors (Staff Matters)</a>
                                                    <a href="https://iimk.ac.in/BOG-Minutes-Faculty-Matters" target="_blank" rel="noopener">Minutes of the Meetings of Board of Governors (Faculty Matters)</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>1.8 - 1.13</span>
                                        Directory, remuneration, PIO, disciplinary action, RTI programmes and transfer orders
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>1.8 Directory of Officers and Employees</strong>
                                                <p>
                                                    Please click for the details:
                                                    <a href="https://iimk.ac.in/faculty-profiles/" target="_blank" rel="noopener">faculty</a>,
                                                    <a href="https://iimk.ac.in/directory-of-staff" target="_blank" rel="noopener">staff</a>.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.9 Monthly Remuneration</strong>
                                                <p>
                                                    Salary payment being remitted to the bank accounts of employees on monthly basis.
                                                    Please click
                                                    <a href="https://iimk.ac.in/uploads/userfiles/20260226164224247.pdf" target="_blank" rel="noopener">here</a>
                                                    for viewing the Pay Structure.
                                                </p>
                                                <p>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Benefits and incentives to Faculty members and Staff of IIM Kozhikode.pdf" target="_blank" rel="noopener">
                                                        Benefits and Incentives for the Permanent Employees
                                                    </a>
                                                    of the Institute as per the 7th CPC guidelines.
                                                </p>
                                                <p>
                                                    Remuneration and Compensation for
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Remunaration of Faculty - IIMs.pdf" target="_blank" rel="noopener">Faculty</a>
                                                    &
                                                    <a href="https://iimk.ac.in/uploads/userfiles/20260226164224247(1).pdf" target="_blank" rel="noopener">Non-Faculty</a>.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.10 Public Information Officers</strong>

                                                <p>
                                                    Deemed Public Information Officers please, click
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Nomination of DPIOs for RTI Matters(1).pdf" target="_blank" rel="noopener">here</a>.
                                                </p>

                                                <div class="rti-contact-grid">
                                                    <div class="rti-contact-box">
                                                        <h5>Central Public Information Officer</h5>
                                                        <p>
                                                            <strong>Lt. Col. M. Julius George (Retd)</strong><br>
                                                            Head - Administration & HR<br>
                                                            Indian Institute of Management Kozhikode<br>
                                                            IIM Kozhikode Campus P.O,<br>
                                                            Kozhikode - District,<br>
                                                            Kerala, Pin Code: 673570<br>
                                                            Phone: (0495) 2803004, 2809130<br>
                                                            E-mail:
                                                            <a href="mailto:head-ahr@iimk.ac.in">head-ahr@iimk.ac.in</a>
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Nodal Officer</h5>
                                                        <p>
                                                            <strong>Lt. Col. M. Julius George (Retd)</strong><br>
                                                            Head - Administration & HR
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>First Appellate Authority</h5>
                                                        <p>
                                                            Prof. G. Thangamani<br>
                                                            Indian Institute of Management Kozhikode<br>
                                                            IIM Kozhikode Campus P.O,<br>
                                                            Kozhikode - District,<br>
                                                            Kerala, Pin Code: 673570<br>
                                                            Phone: (0495) 2809255<br>
                                                            E-mail:
                                                            <a href="mailto:gtmani@iimk.ac.in">gtmani@iimk.ac.in</a>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order - Appointment of Appellate Authority (wef 01_01_2025).pdf" target="_blank" rel="noopener">Office order FAA</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Officer Order - Nodal Officer for RTI matter under RTI Act, 2005.pdf" target="_blank" rel="noopener">Nodal Officer</a>
                                                </div>

                                                <p class="mt-3">
                                                    Please find the Contact Details of the Officials dealing with RTI:
                                                </p>

                                                <p>
                                                    Lt. Col. M. Julius George (Retd)<br>
                                                    Head - Administration & HR<br>
                                                    E-mail: head-ahr@iimk.ac.in<br>
                                                    Phone: (0495) 2809130
                                                </p>

                                                <p>
                                                    Prof. Thangamani G<br>
                                                    Professor<br>
                                                    E-mail: gtmani@iimk.ac.in<br>
                                                    Phone: (0495) 2809255
                                                </p>

                                                <p>
                                                    Indian Institute of Management Kozhikode<br>
                                                    IIM Kozhikode Campus P.O,<br>
                                                    Kozhikode - District,<br>
                                                    Kerala, Pin Code: 673570
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.11 Disciplinary Action</strong>
                                                <p>
                                                    No. of employees against whom disciplinary action has been pending for Minor penalty
                                                    or major penalty proceedings: <strong>01</strong>
                                                </p>
                                                <p>
                                                    Finalised for Minor penalty or major penalty proceedings: <strong>Nil</strong>
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>1.12 Programmes to Advance Understanding of RTI</strong>
                                                <p>Educational Programmes: Nil</p>
                                                <p>Webinars and Internal discussions are conducted periodically.</p>
                                                <p>The Institute has observed Vigilance Awareness Week.</p>
                                                <p>Integrity Pledge is administered to all the Employees as a part of the Vigilance Awareness Week conducted every year.</p>
                                                <p>Training of CPIO/DPIO: Nil.</p>
                                                <p>RTI Cell staff attended the online workshop for replying to the RTI queries.</p>
                                                <p>
                                                    Please click
                                                    <a href="https://iimk.ac.in/RTI" target="_blank" rel="noopener">here</a>
                                                    for viewing the Suo Moto Disclosure in the Institute’s Website.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>1.13 Transfer Policy and Transfer Orders</strong>
                                                <p><strong>Transfer policy</strong></p>
                                                <p>
                                                    There is no transfer policy for the faculty of the Institute.
                                                    Transfer of Non-Teaching employees is done as per functional requirement arising
                                                    from time to time in various Department/Sections.
                                                </p>
                                                <p>
                                                    <strong>Transfer Orders</strong> till date can be viewed here:
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Transfer Orders -2021, 2022, 2023.pdf" target="_blank" rel="noopener">Transfer Orders</a>
                                                    <a href="http://iimk.ac.in/uploads/userfiles/Transfer Orders -2021, 2022, 2023.pdf" target="_blank" rel="noopener">(1)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/1.pdf" target="_blank" rel="noopener">(2)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/2.pdf" target="_blank" rel="noopener">(3)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/3.pdf" target="_blank" rel="noopener">(4)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/4.pdf" target="_blank" rel="noopener">(5)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/5.pdf" target="_blank" rel="noopener">(6)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 1.pdf" target="_blank" rel="noopener">(7)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 2.pdf" target="_blank" rel="noopener">(8)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 3.pdf" target="_blank" rel="noopener">(9)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 4.pdf" target="_blank" rel="noopener">(10)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 5.pdf" target="_blank" rel="noopener">(11)</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Office Order-Transfer 6.pdf" target="_blank" rel="noopener">(12)</a>
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