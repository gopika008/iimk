@extends('layouts.app')

@section('title', 'Board of Governors | IIM Kozhikode')

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ url('/about') }}">About</a>
            <span class="mx-2">/</span>
            <span>Governance</span>
            <span class="mx-2">/</span>
            <span>Board of Governors</span>
        </div>

        <h1 class="hero-title">Board of Governors</h1>
        <p class="hero-sub">
            The Board of Governors provides strategic direction, governance oversight and institutional stewardship for IIM Kozhikode.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'bog'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'bog'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="bog-intro-section">
                        <div class="section-kicker">Governance</div>
                        <h2 class="section-heading">Governance at IIM Kozhikode</h2>

                        <p class="lead-copy">
                            The Board brings together leaders from government, industry, academia and public life.
                        </p>

                        <p>
                            Their collective experience supports the Institute’s mission to advance management education,
                            research, innovation and responsible leadership.
                        </p>
                    </section>

                    <section class="bog-chair-section" aria-labelledby="chairpersonTitle">
                        <div class="section-kicker">Chairperson</div>
                        <h2 class="section-heading" id="chairpersonTitle">Chairperson, BoG IIM Kozhikode</h2>

                        <div class="bog-chair-card">
                            <div class="bog-chair-avatar">
                                BoG
                            </div>

                            <div>
                                <span class="bog-chair-badge">Chairperson</span>
                                <h3>Chairperson, BoG IIM Kozhikode</h3>
                                <p>
                                    Leadership and stewardship for institutional governance and strategic direction.
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="bog-members-section">
                        <div class="section-kicker">Members</div>
                        <h2 class="section-heading">Members of the Board of Governors</h2>

                        <div class="bog-governors-grid" aria-label="Members of the Board of Governors">

                            <article class="bog-governor-card">
                                <div class="bog-avatar">PB</div>
                                <div>
                                    <h3>Shri. P.K. Banerjee</h3>
                                    <p>Joint Secretary, Department of Higher Education, Ministry of Education, New Delhi</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">SJ</div>
                                <div>
                                    <h3>Dr. Sharmila Mary Joseph, IAS</h3>
                                    <p>Additional Chief Secretary, Higher Education Department, Kerala</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">VN</div>
                                <div>
                                    <h3>Shri. V.P Nandakumar</h3>
                                    <p>CMD, Manappuram Finance Pvt Ltd</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">VB</div>
                                <div>
                                    <h3>Smt. Vinita Bajoria</h3>
                                    <p>Chairperson, NICCO Cables</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">RK</div>
                                <div>
                                    <h3>Shri. Raj Kamble</h3>
                                    <p>Founder &amp; Chief Creative Officer, Famous Innovations</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">SM</div>
                                <div>
                                    <h3>Ms. Suparna Mitra</h3>
                                    <p>MD &amp; CEO, TeamLease Services Limited</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">DC</div>
                                <div>
                                    <h3>Prof. Debashis Chatterjee</h3>
                                    <p>Director, IIM Kozhikode</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">RU</div>
                                <div>
                                    <h3>Prof. Rajesh Srinivas Upadhyayula</h3>
                                    <p>Professor, IIM Kozhikode</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">AP</div>
                                <div>
                                    <h3>Prof. Anindita Paul</h3>
                                    <p>Associate Professor, IIM Kozhikode</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">UR</div>
                                <div>
                                    <h3>Ms. Kasoji Uma Rani</h3>
                                    <p>Co-Founder, Femmevista Technologies</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">SC</div>
                                <div>
                                    <h3>Shri. Sandeep Chatterjee</h3>
                                    <p>Supply Chain and Sustainability Leader, IBM Consulting</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">SR</div>
                                <div>
                                    <h3>Ms. Sreedevi Raghavan</h3>
                                    <p>Founder-Director, Tattvamassi Coaching &amp; Consultancy (OPC) Pvt Ltd</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">KG</div>
                                <div>
                                    <h3>Ms. Kamalika Gangoly</h3>
                                    <p>Strategy Senior Manager, Accenture</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">RP</div>
                                <div>
                                    <h3>Shri. Ronald Philip</h3>
                                    <p>Vice President - Portfolio Investment, Dubai World Trade Centre</p>
                                </div>
                            </article>

                            <article class="bog-governor-card">
                                <div class="bog-avatar">JG</div>
                                <div>
                                    <h3>Lt. Col. M. Julius George (Retd)</h3>
                                    <p>Secretary to Board of Governors</p>
                                </div>
                            </article>

                        </div>
                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection