@extends('layouts.app')

@section('title', 'Information Disclosed on Own Initiative | IIM Kozhikode')

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
            <span>Information Disclosed on Own Initiative</span>
        </div>

        <h1 class="hero-title">Information Disclosed on Own Initiative</h1>
        <p class="hero-sub">
            Proactive disclosure of information to help the public access key institutional details
            with minimum resort to the RTI Act.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-own-initiative'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-own-initiative'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="rti-section rti-organization-page">
                        <div class="section-kicker">RTI Disclosure</div>
                        <h2 class="section-heading">6 - Information Disclosed on Own Initiative</h2>

                        <p class="lead-copy">
                            Details of information proactively disclosed by the Institute and status related to
                            Guidelines for Indian Government Websites.
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

                            <a href="{{ url('/about/rti/e-governance') }}">
                                4 - E-Governance
                            </a>

                            <a href="{{ url('/about/rti/information-as-may-be-prescribed') }}">
                                5 - Information as may be Prescribed
                            </a>

                            <a class="active" href="{{ url('/about/rti/information-disclosed-on-own-initiative') }}">
                                6 - Information Disclosed on Own Initiative
                            </a>
                        </div>

                        <div class="rti-modern-list mt-4">

                            <div class="rti-disclosure-group">
                                <div class="rti-group-header">
                                    <span>6.1</span>
                                    <h3>Item / information disclosed so that public have minimum resort to use of RTI Act</h3>
                                    <small>Proactive Disclosure</small>
                                </div>

                                <div class="rti-card-grid">

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">6.1.1</div>

                                        <div class="rti-info-body">
                                            <h4>Item / information disclosed so that public have minimum resort to use of RTI Act to obtain information</h4>

                                            <p>
                                                Please click on the following links to view the details:
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/IIMK Guest House Allotment Norms-2023.pdf" target="_blank" rel="noopener">
                                                    Guest House Policy
                                                </a>

                                                <a href="https://iimk.ac.in/library" target="_blank" rel="noopener">
                                                    E-Resources
                                                </a>

                                                <a href="https://iimk.ac.in/uploads/userfiles/CPFRules2007.pdf" target="_blank" rel="noopener">
                                                    CPF Rules
                                                </a>

                                                <a href="https://iimk.ac.in/uploads/userfiles/Implementation of Official Language Act 1963.pdf" target="_blank" rel="noopener">
                                                    Implementation of Official Language Act, 1963
                                                </a>
                                            </div>

                                            <div class="rti-highlight-box mt-4">
                                                <h5>Independent External Members (IEM)</h5>

                                                <div class="rti-contact-grid mt-3" style="grid-template-columns: repeat(2, minmax(0, 1fr)) !important;">

                                                    <div class="rti-contact-box">
                                                        <h5>Smt. Aradhana Johri, IAS (Retd)</h5>
                                                        <p>
                                                            B-45, Mandir Marg,<br>
                                                            Mahanagar Extension,<br>
                                                            Lucknow - 226006
                                                        </p>
                                                        <p>
                                                            Email:
                                                            <a href="mailto:johri.aradhana@gmail.com">
                                                                johri.aradhana@gmail.com
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <div class="rti-contact-box">
                                                        <h5>Shri. Sadhu Ram Bansal</h5>
                                                        <p>
                                                            Ex-CMD (Corporation Bank)<br>
                                                            Second Floor, Plot No 29,<br>
                                                            Sector 12A, Dwarka,<br>
                                                            New Delhi - 110078
                                                        </p>
                                                        <p>
                                                            Email:
                                                            <a href="mailto:sr.bansal123@gmail.com">
                                                                sr.bansal123@gmail.com
                                                            </a>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>

                            <div class="rti-accordion">

                                <details open>
                                    <summary>
                                        <span>6.2</span>
                                        Guidelines for Indian Government Websites
                                        <small>GIGW</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>
                                                    Guidelines for Indian Government Websites (GIGW)
                                                </strong>

                                                <p>
                                                    Guidelines for Indian Government Websites (GIGW) is followed
                                                    (released in February 2009 and included in the Central Secretariat
                                                    Manual of Office Procedures (CSMOP) by Department of Administrative
                                                    Reforms and Public Grievances, Ministry of Personnel, Public
                                                    Grievances and Pension.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>6.2.1 Whether STQC certification obtained and its validity</strong>
                                                <p>
                                                    Institute has initiated the process to obtain the requisite certification.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>6.2.2 Does the website show the certificate on the Website?</strong>
                                                <p>
                                                    <strong>NIL</strong>
                                                </p>
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