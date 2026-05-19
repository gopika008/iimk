@extends('layouts.app')

@section('title', 'Deans & Administration | IIM Kozhikode')

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ url('/about') }}">About IIMK</a>
            <span class="mx-2">/</span>
            <span>Governance</span>
            <span class="mx-2">/</span>
            <span>Deans & Administration</span>
        </div>

        <h1 class="hero-title">Deans & Administration</h1>
        <p class="hero-sub">
            Our deans play a pivotal role in shaping academic excellence, strategic initiatives, executive education,
            institutional development and outreach at IIM Kozhikode.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'deans'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
              @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'deans'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="deans-intro-section">
                        <div class="section-kicker">Governance</div>
                        <h2 class="section-heading">Academic and Administrative Leadership</h2>

                        <p class="lead-copy">
                            The deans and administrative leaders of IIM Kozhikode guide the Institute’s academic,
                            executive education, faculty development and campus initiatives.
                        </p>

                        <p>
                            Through collaborative leadership, they support programme delivery, faculty administration,
                            institutional growth, global engagement and continuous improvement across the Institute.
                        </p>
                    </section>

                    <section class="deans-leadership-section">
                        <div class="section-kicker">Leadership</div>
                        <h2 class="section-heading">Deans & Administration</h2>

                        <div class="deans-leader-grid">

                            <article class="dean-card-modern">
                                <div class="dean-photo-modern">
                                    <img src="https://placehold.co/500x650/e8eef6/03224d?text=Dean" alt="Dean Faculty Administration and Development">
                                </div>
                                <div class="dean-info-modern">
                                    <div class="dean-icon-bubble">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="dean-role">DEAN (Faculty Administration & Development)</div>
                                    <div class="dean-role-line"></div>
                                    <div class="dean-name">Prof. Name Here</div>
                                    <p>
                                        Oversees faculty administration, recruitment, development programmes and academic support initiatives.
                                    </p>
                                </div>
                            </article>

                            <article class="dean-card-modern">
                                <div class="dean-photo-modern">
                                    <img src="https://placehold.co/500x650/e8eef6/03224d?text=Dean" alt="Dean Executive Education">
                                </div>
                                <div class="dean-info-modern">
                                    <div class="dean-icon-bubble">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="dean-role">DEAN (Executive Education)</div>
                                    <div class="dean-role-line"></div>
                                    <div class="dean-name">Prof. Name Here</div>
                                    <p>
                                        Leads executive education programmes, industry partnerships and lifelong learning initiatives.
                                    </p>
                                </div>
                            </article>

                            <article class="dean-card-modern">
                                <div class="dean-photo-modern">
                                    <img src="https://placehold.co/500x650/e8eef6/03224d?text=Dean" alt="Dean Programmes">
                                </div>
                                <div class="dean-info-modern">
                                    <div class="dean-icon-bubble">
                                        <i class="bi bi-journal-richtext"></i>
                                    </div>
                                    <div class="dean-role">DEAN (Programmes)</div>
                                    <div class="dean-role-line"></div>
                                    <div class="dean-name">Prof. Name Here</div>
                                    <p>
                                        Responsible for design, delivery and continuous enhancement of IIMK’s academic programmes.
                                    </p>
                                </div>
                            </article>

                            <article class="dean-card-modern">
                                <div class="dean-photo-modern">
                                    <img src="https://placehold.co/500x650/e8eef6/03224d?text=Dean" alt="Associate Dean Kochi Campus">
                                </div>
                                <div class="dean-info-modern">
                                    <div class="dean-icon-bubble">
                                        <i class="bi bi-buildings"></i>
                                    </div>
                                    <div class="dean-role">ASSOCIATE DEAN (Kochi Campus)</div>
                                    <div class="dean-role-line"></div>
                                    <div class="dean-name">Prof. Name Here</div>
                                    <p>
                                        Oversees academic and administrative operations at the Kochi Campus and outreach initiatives.
                                    </p>
                                </div>
                            </article>

                            <article class="dean-card-modern dean-card-wide">
                                <div class="dean-photo-modern">
                                    <img src="https://placehold.co/500x650/e8eef6/03224d?text=Chair" alt="Executive Chair GLOBE">
                                </div>
                                <div class="dean-info-modern">
                                    <div class="dean-icon-bubble">
                                        <i class="bi bi-globe2"></i>
                                    </div>
                                    <div class="dean-role">Executive Chair - GLOBE</div>
                                    <div class="dean-role-line"></div>
                                    <div class="dean-name">Prof. Name Here</div>
                                    <p>
                                        Leads the Global Centre for Leadership, Operations & Business Excellence (GLOBE),
                                        promoting thought leadership, research and global collaborations.
                                    </p>
                                </div>
                            </article>

                        </div>
                    </section>

                    <section class="deans-quote-section">
                        <div class="deans-quote-box">
                            <div class="deans-quote-mark">“</div>
                            <blockquote>
                                Our leadership is committed to nurturing talent, advancing knowledge and creating impact for a better tomorrow.
                            </blockquote>
                            <div class="gold-line"></div>
                        </div>
                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection