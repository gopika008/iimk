@extends('layouts.app')

@section('title', 'Partner Institutions | International Relations | IIM Kozhikode')

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
                <span>Partner Institutions</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-buildings"></i>
                Student Exchange
            </div>

            <h1 class="international-hero-title">
                Partner Institutions
            </h1>

            <p class="international-hero-sub">
                Explore IIM Kozhikode’s international partner institutions across North America, Asia,
                Europe, Australia/Oceania, Africa and Russia.
            </p>
        </div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-partner-institutions'])
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
               @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-partner-institutions'
                ])
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-partners-section">
                        <div class="section-kicker">Global Network</div>
                        <h2 class="section-heading">Partner Institutions</h2>

                        <p class="lead-copy">
                            IIM Kozhikode collaborates with reputed universities and business schools across the world
                            to support student exchange, academic collaboration and international learning opportunities.
                        </p>

                        <div class="ir-partner-summary-grid">
                            <a href="#north-america" class="ir-partner-summary-card">
                                <i class="bi bi-globe-americas"></i>
                                <strong>North America</strong>
                                <span>2 institutions</span>
                            </a>

                            <a href="#asia" class="ir-partner-summary-card">
                                <i class="bi bi-globe-asia-australia"></i>
                                <strong>Asia</strong>
                                <span>10 institutions</span>
                            </a>

                            <a href="#europe" class="ir-partner-summary-card">
                                <i class="bi bi-globe-europe-africa"></i>
                                <strong>Europe</strong>
                                <span>40+ institutions</span>
                            </a>

                            <a href="#australia-oceania" class="ir-partner-summary-card">
                                <i class="bi bi-water"></i>
                                <strong>Australia/Oceania</strong>
                                <span>2 institutions</span>
                            </a>

                            <a href="#africa" class="ir-partner-summary-card">
                                <i class="bi bi-sun"></i>
                                <strong>Africa</strong>
                                <span>1 institution</span>
                            </a>

                            <a href="#russia" class="ir-partner-summary-card">
                                <i class="bi bi-snow"></i>
                                <strong>Russia</strong>
                                <span>1 institution</span>
                            </a>
                        </div>

                        <div class="ir-partner-region" id="north-america">
                            <div class="ir-region-header">
                                <div>
                                    <span>Region</span>
                                    <h3>North America</h3>
                                </div>
                            </div>

                            <div class="ir-partner-grid">
                                @foreach([
                                    [
                                        'name' => 'University of North Texas',
                                        'url' => 'https://www.unt.edu/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/b89d8dd9.png',
                                        'country' => 'USA'
                                    ],
                                    [
                                        'name' => 'University of Akron, Ohio',
                                        'url' => 'https://uakron.edu/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/6bb9a83e.png',
                                        'country' => 'USA'
                                    ],
                                ] as $partner)
                                    @include('partials.ir-partner-card', ['partner' => $partner])
                                @endforeach
                            </div>
                        </div>

                        <div class="ir-partner-region" id="asia">
                            <div class="ir-region-header">
                                <div>
                                    <span>Region</span>
                                    <h3>Asia</h3>
                                </div>
                            </div>

                            <div class="ir-partner-grid">
                                @foreach([
                                    [
                                        'name' => 'Abu Dhabi University',
                                        'url' => 'https://www.adu.ac.ae/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image/1.jpg',
                                        'country' => 'Abu Dhabi'
                                    ],
                                    [
                                        'name' => 'Asian Institute of Technology',
                                        'url' => 'https://www.ait.ac.th/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image/2.jpg',
                                        'country' => 'Thailand'
                                    ],
                                    [
                                        'name' => 'National Tsing Hua University',
                                        'url' => 'https://nthu-en.site.nthu.edu.tw/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image/37.jpg',
                                        'country' => 'Taiwan'
                                    ],
                                    [
                                        'name' => 'Foreign Trade University',
                                        'url' => 'https://english.ftu.edu.vn/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image/14.jpg',
                                        'country' => 'Vietnam'
                                    ],
                                    [
                                        'name' => 'University of Limassol',
                                        'url' => 'https://www.uol.ac.cy/en/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image/8.jpg',
                                        'country' => 'Cyprus'
                                    ],
                                    [
                                        'name' => 'College of Commerce, National Chengchi University',
                                        'url' => 'https://commerce.nccu.edu.tw/?locale=en',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image/6.jpg',
                                        'country' => 'Taiwan'
                                    ],
                                    [
                                        'name' => 'INTI International University',
                                        'url' => 'https://newinti.edu.my/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/inti.png',
                                        'country' => 'Malaysia'
                                    ],
                                    [
                                        'name' => 'Kainan University',
                                        'url' => 'https://www.knu.edu.tw/app/home.php',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/kainan.png',
                                        'country' => 'Taiwan'
                                    ],
                                    [
                                        'name' => 'Keio University',
                                        'url' => 'https://www.keio.ac.jp/en/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/image003.jpg',
                                        'country' => 'Japan'
                                    ],
                                    [
                                        'name' => 'Universiti Putra Malaysia',
                                        'url' => 'https://upm.edu.my/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/upm.png',
                                        'country' => 'Malaysia'
                                    ],
                                ] as $partner)
                                    @include('partials.ir-partner-card', ['partner' => $partner])
                                @endforeach
                            </div>
                        </div>

                        <div class="ir-partner-region" id="europe">
                            <div class="ir-region-header">
                                <div>
                                    <span>Region</span>
                                    <h3>Europe</h3>
                                </div>
                            </div>

                            <div class="ir-partner-grid">
                                @foreach([
                                    ['name' => 'Audencia Nantes School of Management', 'url' => 'http://www.audencia.com/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/3.jpg', 'country' => 'France'],
                                    ['name' => 'Bocconi University', 'url' => 'https://www.unibocconi.it/wps/wcm/connect/Bocconi/SitoPubblico_IT/Albero+di+navigazione/Home/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/4.jpg', 'country' => 'Italy'],
                                    ['name' => 'EDHEC Business School', 'url' => 'http://www.edhec.edu/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/9.jpg', 'country' => 'France'],
                                    ['name' => 'ESCP', 'url' => 'https://www.escpeurope.eu/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/11.jpg', 'country' => 'France'],
                                    ['name' => 'IESEG School of Management', 'url' => 'http://www.ieseg.fr/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/17.jpg', 'country' => 'France'],
                                    ['name' => 'Management Center Innsbruck', 'url' => 'http://www.mci.edu/en', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/23.jpg', 'country' => 'Austria'],
                                    ['name' => 'NEOMA Business School', 'url' => 'https://neoma-bs.com/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/24.jpg', 'country' => 'France'],
                                    ['name' => 'ESADE', 'url' => 'https://www.esade.edu/en', 'logo' => 'https://iimk.ac.in/uploads/userfiles/esade.png', 'country' => 'Spain'],
                                    ['name' => 'EM Strasbourg Business School', 'url' => 'http://www.em-strasbourg.eu/_en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/10.jpg', 'country' => 'France'],
                                    ['name' => 'ESSCA School of Management', 'url' => 'https://www.essca.fr/EN/Pages/Ecole-de-commerce.aspx', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/12.jpg', 'country' => 'France'],
                                    ['name' => 'Aston University', 'url' => 'https://www.aston.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/aston.jpg', 'country' => 'UK'],
                                    ['name' => 'Y School', 'url' => 'https://yschools.fr/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/yschool.png', 'country' => 'France'],
                                    ['name' => 'Telecom Ecole De Management', 'url' => 'https://www.imt-bs.eu/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/30.jpg', 'country' => 'France'],
                                    ['name' => 'ICN Business School', 'url' => 'https://www.icn-artem.com/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/16.jpg', 'country' => 'France'],
                                    ['name' => 'Cardiff Metropolitan University', 'url' => 'https://www.cardiffmet.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/cardiff.gif', 'country' => 'UK'],
                                    ['name' => 'Jean Moulin Lyon 3 University', 'url' => 'https://www.univ-lyon3.fr/accueil-en', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/41.jpg', 'country' => 'France'],
                                    ['name' => 'HHL Leipzig Graduate School of Management', 'url' => 'http://www.hhl.de/nc/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/22.jpg', 'country' => 'Germany'],
                                    ['name' => 'Università Ca’ Foscari Venezia', 'url' => 'https://www.unive.it/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/75b9e62f.png', 'country' => 'Italy'],
                                    ['name' => 'University of Excelia', 'url' => 'https://www.excelia-group.com/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/3523ecd7.png', 'country' => 'France'],
                                    ['name' => 'ISCTE University Institute of Lisbon', 'url' => 'http://www.iscte-iul.pt/home.aspx', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/18.jpg', 'country' => 'Portugal'],
                                    ['name' => 'Leeds University Business School', 'url' => 'http://business.leeds.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/21.jpg', 'country' => 'UK'],
                                    ['name' => 'Brunel University London', 'url' => 'https://www.brunel.ac.uk/study/undergraduate-study', 'logo' => 'https://iimk.ac.in/uploads/userfiles/Untitled(1).png', 'country' => 'UK'],
                                    ['name' => 'Norwegian School of Economics', 'url' => 'https://www.nhh.no/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image/25.jpg', 'country' => 'Norway'],
                                    ['name' => 'University of Bristol Business School', 'url' => 'https://www.bristol.ac.uk/business-school/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/bristol.png', 'country' => 'UK'],
                                    ['name' => 'University of Liverpool', 'url' => 'https://www.liverpool.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/8894fc79(1).png', 'country' => 'UK'],
                                    ['name' => 'TBS Education', 'url' => 'https://www.tbs-education.com/in/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/tbs.png', 'country' => 'France'],
                                    ['name' => "King's College London", 'url' => 'https://www.kcl.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/eu-uni.png', 'country' => 'UK'],
                                    ['name' => 'Kozminski University', 'url' => 'https://www.kozminski.edu.pl/en', 'logo' => 'https://iimk.ac.in/uploads/userfiles/45.jpg', 'country' => 'Poland'],
                                    ['name' => 'University of Hull', 'url' => 'https://www.hull.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/46.jpg', 'country' => 'UK'],
                                    ['name' => 'University of Salford', 'url' => 'https://www.salford.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/47.jpg', 'country' => 'UK'],
                                    ['name' => 'Skema Business School', 'url' => 'https://www.skema.edu/en', 'logo' => 'https://iimk.ac.in/uploads/userfiles/sbs.png', 'country' => 'France'],
                                    ['name' => 'Queen Mary University of London', 'url' => 'https://www.qmul.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/queenmary.png', 'country' => 'UK'],
                                    ['name' => 'ESDES Lyon Business School', 'url' => 'https://www.esdes.fr/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/esdes.png', 'country' => 'France'],
                                    ['name' => 'EM Normandie Business School', 'url' => 'https://www.em-normandie.in/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image005.jpg', 'country' => 'France'],
                                    ['name' => 'Emlyon Business School', 'url' => 'https://em-lyon.com/en', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image011.png', 'country' => 'France'],
                                    ['name' => 'ESC Clermont Graduate School of Management', 'url' => 'https://www.esc-clermont.fr/en/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image012.jpg', 'country' => 'France'],
                                    ['name' => 'IE Business School', 'url' => 'https://www.ie.edu/business-school/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image018.jpg', 'country' => 'Spain'],
                                    ['name' => 'KEDGE Business School', 'url' => 'https://student.kedge.edu/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image013.png', 'country' => 'France'],
                                    ['name' => 'University of Brighton', 'url' => 'https://www.brighton.ac.uk/index.aspx', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image019.jpg', 'country' => 'UK'],
                                    ['name' => 'University of Chester', 'url' => 'https://www.chester.ac.uk/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/image020.jpg', 'country' => 'UK'],
                                    ['name' => 'Sheffield University Management School', 'url' => 'https://www.sheffield.ac.uk/management', 'logo' => 'https://iimk.ac.in/uploads/userfiles/uos(1).jpg', 'country' => 'UK'],
                                    ['name' => 'Bologna University Business School', 'url' => 'https://www.bbs.unibo.eu/#gref', 'logo' => 'https://iimk.ac.in/uploads/userfiles/bbs(1).png', 'country' => 'Italy'],
                                    ['name' => 'Groupe IGS', 'url' => 'https://www.igensia-group-education.com/', 'logo' => 'https://iimk.ac.in/uploads/userfiles/igs.jpg', 'country' => 'France'],
                                ] as $partner)
                                    @include('partials.ir-partner-card', ['partner' => $partner])
                                @endforeach
                            </div>
                        </div>

                        <div class="ir-partner-region" id="australia-oceania">
                            <div class="ir-region-header">
                                <div>
                                    <span>Region</span>
                                    <h3>Australia/Oceania</h3>
                                </div>
                            </div>

                            <div class="ir-partner-grid">
                                @foreach([
                                    [
                                        'name' => 'Western Sydney University',
                                        'url' => 'https://www.westernsydney.edu.au/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/1(3).png',
                                        'country' => 'Australia'
                                    ],
                                    [
                                        'name' => 'University of Wollongong',
                                        'url' => 'https://www.uow.edu.au/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/aus-uni.png',
                                        'country' => 'Australia'
                                    ],
                                ] as $partner)
                                    @include('partials.ir-partner-card', ['partner' => $partner])
                                @endforeach
                            </div>
                        </div>

                        <div class="ir-partner-region" id="africa">
                            <div class="ir-region-header">
                                <div>
                                    <span>Region</span>
                                    <h3>Africa</h3>
                                </div>
                            </div>

                            <div class="ir-partner-grid">
                                @foreach([
                                    [
                                        'name' => 'Rabat Business School',
                                        'url' => 'https://rbs.uir.ac.ma/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/rbs.png',
                                        'country' => 'Morocco'
                                    ],
                                ] as $partner)
                                    @include('partials.ir-partner-card', ['partner' => $partner])
                                @endforeach
                            </div>
                        </div>

                        <div class="ir-partner-region" id="russia">
                            <div class="ir-region-header">
                                <div>
                                    <span>Region</span>
                                    <h3>Russia</h3>
                                </div>
                            </div>

                            <div class="ir-partner-grid">
                                @foreach([
                                    [
                                        'name' => 'HSE University',
                                        'url' => 'https://www.hse.ru/en/',
                                        'logo' => 'https://iimk.ac.in/uploads/userfiles/HSC University.jpg',
                                        'country' => 'Russia'
                                    ],
                                ] as $partner)
                                    @include('partials.ir-partner-card', ['partner' => $partner])
                                @endforeach
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