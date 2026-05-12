<html lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deans &amp; Administration | IIM Kozhikode</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <style>
        :root {
            --blue: #03224d;
            --blue-2: #0f4c81;
            --blue-soft: #eef6ff;
            --silver: #d9e3ef;
            --ink: #102033;
            --muted: #59677a;
            --gold: #c7922b;
            --shadow: 0 18px 45px rgba(3, 34, 77, .10);
            --radius: 22px;
        }

        body {
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--ink);
            background: #f6f9fd;
        }

        a {
            text-decoration: none;
        }

        .topbar {
            background: var(--blue);
            color: #fff;
            font-size: .84rem;
            padding: .35rem 0;
        }

        .topbar a {
            color: #fff;
            opacity: .94;
        }

        .main-header {
            background: #fff;
            border-bottom: 1px solid var(--silver);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 8px 24px rgba(3, 34, 77, .05);
        }

        .logo-img {
            width: 420px;
            max-width: 100%;
            height: auto;
        }

        .nav-link {
            color: #172033;
            font-weight: 500;
            border-radius: 14px;
            padding: .65rem .85rem !important;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--blue);
            background: #f1f6fc;
        }

        .page-wrap {
            padding: 2rem 0 3.5rem;
        }

        .side-card {
            background: #fff;
            border: 1px solid var(--silver);
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 1rem;
            position: sticky;
            top: 112px;
        }

        .side-kicker {
            color: #718096;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            font-weight: 800;
            margin: .25rem .45rem .35rem;
        }

        .side-title {
            font-size: 1.05rem;
            font-weight: 900;
            color: var(--blue);
            margin: 0 .45rem 1rem;
            padding-bottom: .9rem;
            border-bottom: 1px solid var(--silver);
        }

        .side-link,
        .side-toggle {
            width: 100%;
            border: 0;
            background: transparent;
            color: #243246;
            padding: .78rem .9rem;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 700;
            text-align: left;
        }

        .side-link:hover,
        .side-toggle:hover {
            background: #f2f7fd;
            color: var(--blue);
        }

        .side-link.active,
        .side-toggle.active {
            background: var(--blue);
            color: #fff;
            box-shadow: 0 10px 22px rgba(3, 34, 77, .18);
        }

        .side-submenu {
            padding: .45rem 0 .65rem .8rem;
        }

        .side-submenu a {
            display: block;
            padding: .55rem .8rem;
            border-radius: 12px;
            color: #405066;
            font-weight: 500;
            font-size: .92rem;
            border-left: 3px solid transparent;
        }

        .side-submenu a:hover {
            background: #f6f9fd;
            color: var(--blue);
        }

        .side-submenu a.current {
            color: var(--blue);
            font-weight: 800;
            border-left-color: var(--blue-2);
            background: #eef6ff;
        }

        .tour-card {
            margin-top: 1rem;
            border-radius: 18px;
            overflow: hidden;
            background: linear-gradient(135deg, var(--blue), #145da0);
            color: #fff;
            padding: 1rem;
            box-shadow: var(--shadow);
        }

        .tour-card p {
            color: rgba(255, 255, 255, .82);
            font-size: .9rem;
        }

        .hero-panel {
            position: relative;
            min-height: 330px;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--silver);
            background:
                linear-gradient(90deg, rgba(255, 255, 255, .96) 0%, rgba(255, 255, 255, .88) 45%, rgba(238, 246, 255, .76) 100%),
                url("https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1600&q=70") center/cover;
            box-shadow: var(--shadow);
            padding: 3rem;
            display: flex;
            align-items: center;
        }

        .breadcrumb-mini {
            color: #6b7a90;
            font-size: .88rem;
            margin-bottom: 1.2rem;
        }

        .hero-panel h1 {
            color: var(--blue);
            font-size: clamp(2rem, 4vw, 3.4rem);
            font-weight: 900;
            letter-spacing: -.04em;
            margin-bottom: 1rem;
        }

        .hero-panel p {
            color: #46576d;
            max-width: 620px;
            font-size: 1.05rem;
            line-height: 1.75;
        }

        .gold-line {
            width: 58px;
            height: 4px;
            background: var(--gold);
            border-radius: 999px;
            margin: 1.3rem 0 0;
        }

        .leader-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.25rem;
            margin-top: 1.4rem;
        }

        .dean-card {
            background: #fff;
            border: 1px solid var(--silver);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 14px 34px rgba(3, 34, 77, .08);
            display: grid;
            grid-template-columns: 165px 1fr;
            transition: .18s ease;
        }

        .dean-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 22px 55px rgba(3, 34, 77, .14);
        }

        .dean-photo {
            min-height: 230px;
            background: #e8eef6;
            position: relative;
            overflow: hidden;
        }

        .dean-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .dean-info {
            padding: 1.45rem;
            position: relative;
        }

        .icon-bubble {
            position: absolute;
            right: 1.2rem;
            top: 1.2rem;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #eaf3ff;
            color: var(--blue-2);
            font-size: 1.35rem;
        }

        .role {
            max-width: 75%;
            color: var(--blue);
            font-weight: 900;
            line-height: 1.35;
            font-size: 1.05rem;
            margin-bottom: .6rem;
        }

        .role-line {
            width: 38px;
            height: 3px;
            background: var(--gold);
            border-radius: 999px;
            margin: .65rem 0 1rem;
        }

        .name {
            font-weight: 800;
            color: #172033;
            margin-bottom: .35rem;
        }

        .desc {
            color: #526174;
            line-height: 1.65;
            font-size: .94rem;
            margin: 0;
        }

        .dean-card.wide {
            grid-column: 1 / -1;
            grid-template-columns: 165px 1fr;
        }

        .quote-band {
            margin-top: 1.6rem;
            border-radius: 22px;
            overflow: hidden;
            min-height: 190px;
            display: flex;
            align-items: center;
            color: #fff;
            background:
                linear-gradient(90deg, rgba(3, 34, 77, .96), rgba(3, 34, 77, .78), rgba(3, 34, 77, .26)),
                url("https://images.unsplash.com/photo-1607237138185-eedd9c632b0b?auto=format&fit=crop&w=1600&q=70") center/cover;
            box-shadow: var(--shadow);
            padding: 2.2rem;
        }

        .quote-band blockquote {
            max-width: 680px;
            margin: 0;
            font-size: 1.25rem;
            line-height: 1.7;
            font-weight: 600;
        }

        .quote-mark {
            font-size: 3rem;
            color: #8bb8f3;
            line-height: 1;
        }

        .footer {
            background: var(--blue);
            color: #d9e6f5;
            padding: 2.4rem 0 1.2rem;
        }

        .footer a {
            color: #fff;
        }

        .footer-title {
            color: #fff;
            font-weight: 800;
            margin-bottom: .75rem;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer li {
            margin: .35rem 0;
            font-size: .92rem;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .18);
            margin-top: 1.8rem;
            padding-top: 1rem;
            font-size: .85rem;
            color: #c7d7eb;
        }

        @media(max-width:1199.98px) {
            .logo-img {
                width: 330px;
            }
        }

        @media(max-width:991.98px) {
            .side-card {
                position: static;
                margin-bottom: 1.5rem;
            }

            .hero-panel {
                padding: 2rem;
            }

            .leader-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:575.98px) {
            .topbar .container {
                gap: .4rem;
            }

            .dean-card,
            .dean-card.wide {
                grid-template-columns: 1fr;
            }

            .dean-photo {
                height: 300px;
            }

            .role {
                max-width: 100%;
                padding-right: 3.5rem;
            }

            .hero-panel {
                min-height: 280px;
                padding: 1.4rem;
            }
        }
    </style>
</head>

<body>
    <a class="visually-hidden-focusable position-absolute top-0 start-0 bg-dark text-white p-2" href="#main">Skip to
        main content</a>

    <div class="topbar">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div><strong>IN</strong> <span class="mx-2">|</span> भारत सरकार | Government of India</div>
            <div class="d-flex gap-3 flex-wrap">
                <a href="#">Screen Reader Access</a>
                <a href="#">A-</a><a href="#">A</a><a href="#">A+</a>
                <a href="#">High Contrast</a>
                <a href="#"><i class="bi bi-search"></i></a>
            </div>
        </div>
    </div>

    <header class="main-header">
        <nav class="navbar navbar-expand-xl py-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo-img" src="https://iimk.ac.in/images/logo2.png"
                        alt="Indian Institute of Management Kozhikode">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav"
                    aria-label="Open menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-none d-xl-flex">
                    <ul class="navbar-nav ms-auto align-items-xl-center gap-1">
                        <li class="nav-item"><a class="nav-link" href="#">Academics <i
                                    class="bi bi-chevron-down small"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Research <i
                                    class="bi bi-chevron-down small"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Campus Life <i
                                    class="bi bi-chevron-down small"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Admission</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Infrastructure</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Centres</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="offcanvas offcanvas-end" id="mobileNav" tabindex="-1">
        <div class="offcanvas-header" style="background:#03224d;color:#fff;">
            <h5 class="offcanvas-title">Menu</h5>
            <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a class="d-block py-2 fw-semibold" href="#">Academics</a>
            <a class="d-block py-2 fw-semibold" href="#">Research</a>
            <a class="d-block py-2 fw-semibold" href="#">Campus Life</a>
            <a class="d-block py-2 fw-semibold" href="#">Admission</a>
            <a class="d-block py-2 fw-semibold text-primary" href="#">About</a>
            <a class="d-block py-2 fw-semibold" href="#">Infrastructure</a>
            <a class="d-block py-2 fw-semibold" href="#">Centres</a>
        </div>
    </div>

    <main id="main" class="page-wrap">
        <div class="container">
            <div class="row g-4">
                <aside class="col-lg-3">
                    <nav class="side-card" aria-label="About IIMK section menu">
                        <div class="side-kicker">About IIMK</div>
                        <div class="side-title">Section Menu</div>

                        <button class="side-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#instMenu">
                            The Institute <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="collapse" id="instMenu">
                            <div class="side-submenu">
                                <a href="#">Overview</a>
                                <a href="#">Vision &amp; Mission</a>
                                <a href="#">History</a>
                            </div>
                        </div>

                        <button class="side-toggle active" type="button" data-bs-toggle="collapse"
                            data-bs-target="#govMenu" aria-expanded="true">
                            Governance <i class="bi bi-chevron-up"></i>
                        </button>
                        <div class="collapse show" id="govMenu">
                            <div class="side-submenu">
                                <a href="#">Director</a>
                                <a href="#">Board of Governors</a>
                                <a class="current" href="#">Deans &amp; Administration</a>
                                <a href="#">Statutory Compliance</a>
                            </div>
                        </div>

                        <button class="side-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#leadMenu">
                            Leadership <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="collapse" id="leadMenu">
                            <div class="side-submenu">
                                <a href="#">Chairpersons</a>
                                <a href="#">Administrative Heads</a>
                            </div>
                        </div>

                        <a class="side-link" href="#">History <i class="bi bi-arrow-right"></i></a>
                        <a class="side-link" href="#">Vision &amp; Mission <i class="bi bi-arrow-right"></i></a>
                        <a class="side-link" href="#">Campus &amp; Infrastructure <i class="bi bi-arrow-right"></i></a>

                        <div class="tour-card">
                            <div class="fw-bold mb-2">Discover IIMK</div>
                            <p>Take a virtual tour of our beautiful green campus.</p>
                            <a class="btn btn-sm btn-light rounded-pill fw-bold" href="#">Campus Tour <i
                                    class="bi bi-play-fill"></i></a>
                        </div>
                    </nav>
                </aside>

                <section class="col-lg-9">
                    <div class="hero-panel">
                        <div>
                            <div class="breadcrumb-mini">Home <i class="bi bi-chevron-right mx-1"></i> About IIMK <i
                                    class="bi bi-chevron-right mx-1"></i> Governance <i
                                    class="bi bi-chevron-right mx-1"></i> <strong>Deans &amp; Administration</strong>
                            </div>
                            <h1>Deans &amp; Administration</h1>
                            <p>Our deans play a pivotal role in shaping academic excellence, strategic initiatives,
                                executive education, institutional development and outreach at IIM Kozhikode.</p>
                            <div class="gold-line"></div>
                        </div>
                    </div>

                    <div class="leader-grid">

                        @foreach($members as $member)
                            <article class="dean-card {{ $member->type === 'chair' ? 'wide' : '' }}">

                                <div class="dean-photo">
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                </div>

                                <div class="dean-info">
                                    <div class="icon-bubble">
                                        <i class="bi bi-people"></i>
                                    </div>

                                    <div class="role">
                                        {{ $member->designation }}
                                    </div>

                                    <div class="role-line"></div>

                                    <div class="name">
                                        {{ $member->name }}
                                    </div>

                                    <p class="desc">
                                        {!! $member->description !!}
                                    </p>
                                </div>

                            </article>
                        @endforeach

                    </div>

                    <div class="quote-band">
                        <div>
                            <div class="quote-mark">“</div>
                            <blockquote>Our leadership is committed to nurturing talent, advancing knowledge and
                                creating impact for a better tomorrow.</blockquote>
                            <div class="gold-line"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="footer-title">About IIMK</div>
                    <ul>
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Vision, Mission &amp; Values</a></li>
                        <li><a href="#">History &amp; Milestones</a></li>
                        <li><a href="#">Rankings &amp; Accreditations</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Programme</div>
                    <ul>
                        <li><a href="#">Post Graduate</a></li>
                        <li><a href="#">Executive Education</a></li>
                        <li><a href="#">Doctoral Programme</a></li>
                        <li><a href="#">Certificate Programmes</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Resources</div>
                    <ul>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Placements</a></li>
                        <li><a href="#">Tenders</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Connect</div>
                    <div class="d-flex gap-3 fs-5 mb-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                    <a class="btn btn-outline-light btn-sm rounded-pill" href="#">Website Feedback</a>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-between flex-wrap gap-2">
                <span>© <span id="year">2026</span> Indian Institute of Management Kozhikode. All rights
                    reserved.</span>
                <span><a href="#">Privacy Policy</a> &nbsp; | &nbsp; <a href="#">Terms of Use</a> &nbsp; | &nbsp; <a
                        href="#">Sitemap</a></span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>


</body>

</html>