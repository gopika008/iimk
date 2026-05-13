@extends('layouts.app')

@section('title', 'Information as may be Prescribed | IIM Kozhikode')

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
            <span>Information as may be Prescribed</span>
        </div>

        <h1 class="hero-title">Information as may be Prescribed</h1>
        <p class="hero-sub">
            RTI disclosure details related to CPIO, First Appellate Authority, third-party audit,
            nodal officer appointment and committees for suo motu disclosure.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-prescribed'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-prescribed'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="rti-section rti-organization-page">
                        <div class="section-kicker">RTI Disclosure</div>
                        <h2 class="section-heading">5 - Information as may be Prescribed</h2>

                        <p class="lead-copy">
                            Disclosure covering current and earlier CPIOs and FAAs, third-party audit of voluntary disclosure,
                            appointment of nodal officers and committees related to suo motu disclosure.
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

                            <a class="active" href="{{ url('/about/rti/information-as-may-be-prescribed') }}">
                                5 - Information as may be Prescribed
                            </a>

                            <a href="{{ url('/about/rti/information-disclosed-on-own-initiative') }}">
                                6 - Information Disclosed on Own Initiative
                            </a>
                        </div>

                        <div class="rti-modern-list mt-4">

                            <div class="rti-disclosure-group">
                                <div class="rti-group-header">
                                    <span>5.1</span>
                                    <h3>Information as may be Prescribed</h3>
                                    <small>RTI Disclosure</small>
                                </div>

                                <div class="rti-card-grid">

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">5.1.1</div>
                                        <div class="rti-info-body">
                                            <h4>Name and details of current CPIO and FAAs, and earlier CPIO and FAAs from 1.1.2015</h4>

                                            <div class="rti-contact-grid">
                                                <div class="rti-contact-box">
                                                    <h5>Central Public Information Officer</h5>

                                                    <p>
                                                        <strong>Lt. Col. M. Julius George (Retd)</strong><br>
                                                        Head - Administration &amp; HR<br>
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

                                            <div class="rti-highlight-box mt-3">
                                                <h5>Earlier CPIO and FAAs from 1.1.2015</h5>

                                                <div class="rti-timeline-list">

                                                    <div class="rti-timeline-item">
                                                        <div class="rti-timeline-dot"></div>
                                                        <div>
                                                            <strong>Lt. Col. M. Julius George (Retd)</strong>
                                                            <p>
                                                                CPIO from 01.01.2015 to 30.11.2023<br>
                                                                Chief Administrative Officer<br>
                                                                Indian Institute of Management Kozhikode
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="rti-timeline-item">
                                                        <div class="rti-timeline-dot"></div>
                                                        <div>
                                                            <strong>Lt. Col. M. Julius George (Retd)</strong>
                                                            <p>
                                                                CPIO from 04.12.2023 to till date<br>
                                                                Head - Administration &amp; HR<br>
                                                                Indian Institute of Management Kozhikode
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="rti-timeline-item">
                                                        <div class="rti-timeline-dot"></div>
                                                        <div>
                                                            <strong>Prof. S.S.S Kumar</strong>
                                                            <p>
                                                                FAA from 01.01.2015<br>
                                                                Indian Institute of Management Kozhikode
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="rti-timeline-item">
                                                        <div class="rti-timeline-dot"></div>
                                                        <div>
                                                            <strong>Prof. Nandakumar M.K</strong>
                                                            <p>
                                                                FAA from 01.06.2017<br>
                                                                Indian Institute of Management Kozhikode
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="rti-timeline-item">
                                                        <div class="rti-timeline-dot"></div>
                                                        <div>
                                                            <strong>Prof. Ram Kumar P.N</strong>
                                                            <p>
                                                                FAA From 24.08.2021<br>
                                                                Indian Institute of Management Kozhikode
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="rti-timeline-item">
                                                        <div class="rti-timeline-dot"></div>
                                                        <div>
                                                            <strong>Prof. Thangamani G</strong>
                                                            <p>
                                                                FAA From 01.01 2025<br>
                                                                Indian Institute of Management Kozhikode
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">5.1.2</div>
                                        <div class="rti-info-body">
                                            <h4>Details of third-party audit of voluntary disclosure</h4>

                                            <p>
                                                <strong>Date of Audit:</strong> 15 May 2024
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/Auditor's Report of Transparency Audit of IIMK -   2023-24.pdf" target="_blank" rel="noopener">
                                                    Report of Third Party Audit of Proactive Disclosure of Information under RTI Act, 2005 for Year 2023-24
                                                </a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">5.1.3</div>
                                        <div class="rti-info-body">
                                            <h4>Appointment of Nodal Officers not below the rank of Joint Secretary / Additional HoD</h4>

                                            <p>
                                                Lt. Col. M. Julius George (Retd), Head - Administration &amp; HR
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/Officer Order - Nodal Officer for RTI matter under RTI Act, 2005(1).pdf" target="_blank" rel="noopener">
                                                    Office Order
                                                </a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">5.1.4</div>
                                        <div class="rti-info-body">
                                            <h4>Consultancy committee of key stake holders for advice on Suo Moto Disclosure</h4>

                                            <p>
                                                As per Committee constituted
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/Nomination of DPIOs for RTI Matters.pdf" target="_blank" rel="noopener">
                                                    Office Order
                                                </a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">5.1.5</div>
                                        <div class="rti-info-body">
                                            <h4>Committee of PIOs/FAAs with rich experience in RTI</h4>

                                            <p>
                                                Committee to identify frequently sought information under RTI.
                                            </p>

                                            <p>
                                                As per Committee constituted
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="http://iimk.ac.in/uploads/userfiles/Nomination of DPIOs for RTI Matters.pdf" target="_blank" rel="noopener">
                                                    Office Order
                                                </a>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>

                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection