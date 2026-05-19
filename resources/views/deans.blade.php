<<<<<<< HEAD
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
=======
<html lang="en-IN"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deans &amp; Administration | IIM Kozhikode</title>
  <meta name="description" content="Indian Institute of Management Kozhikode">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://192.168.15.30/css/iimk.css" rel="stylesheet">
  </head>
<body>
  <a href="#main" class="skip-link">Skip to main content</a>
  <div class="utility-bar" role="region" aria-label="Top utility bar">
  <div class="container">
    <div class="d-flex gap-2 align-items-center utility-desktop">
      <span class="opacity-75 fw-semibold">Information for:</span>
      <a class="utility-pill" href="#"><i class="bi bi-mortarboard"></i> Students</a>
      <a class="utility-pill" href="#"><i class="bi bi-people"></i> Faculty &amp; Staff</a>
      <a class="utility-pill" href="#"><i class="bi bi-geo-alt"></i> Visitors</a>
      <a class="utility-pill" href="#"><i class="bi bi-award"></i> Alumni</a>
    </div>
    <div class="d-flex gap-2 align-items-center ms-auto">
      <button class="a11y-btn" type="button">A-</button><button class="a11y-btn" type="button">A</button><button class="a11y-btn" type="button">A+</button>
      <a class="utility-pill" href="#">हिन्दी</a><a class="utility-pill" href="#">English</a><a class="utility-pill" href="#"><i class="bi bi-universal-access"></i> Screen Reader</a>
    </div>
  </div>
</div>
<header class="main-header" role="banner">
  <nav class="navbar navbar-expand-xl" id="primaryNav" aria-label="Primary navigation">
    <div class="container">
      <a class="navbar-brand" href="https://192.168.15.30" aria-label="IIM Kozhikode Home"><img src="https://iimk.ac.in/images/logo2.png" alt="Indian Institute of Management Kozhikode logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMegaMobile" aria-controls="mainMegaMobile" aria-label="Open menu"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse d-none d-xl-flex">
        <ul class="navbar-nav ms-auto align-items-xl-center gap-1">
                                                <li class="nav-item"><a class="nav-link active" href="https://192.168.15.30/about">About</a></li>
                                                            <li class="nav-item mega">
                <button class="nav-link mega-toggle " type="button">Academics <i class="bi bi-chevron-down small ms-1"></i></button>
                <div class="mega-menu"><div class="row g-4">
                                      <div class="col-lg-4"><div class="mega-title">Regular Programmes</div><a class="mega-link" href="#">Doctoral Programmes (PhD)</a><a class="mega-link" href="#">Post Graduate Programme (PGP)</a><a class="mega-link" href="#">PGP in Finance</a><a class="mega-link" href="#">PGP Liberal Studies &amp; Management</a><a class="mega-link" href="#">PGP in Business Leadership</a><a class="mega-link" href="#">Bachelor of Management Studies</a></div>
                                      <div class="col-lg-4"><div class="mega-title">Executive Programmes</div><a class="mega-link" href="#">MBA for Working Executives</a><a class="mega-link" href="#">Kochi Campus Programme</a><a class="mega-link" href="#">Diploma in Management</a><a class="mega-link" href="#">MDP</a><a class="mega-link" href="#">FDP</a></div>
                                    <div class="col-lg-4"><div class="mega-card"><img src="https://192.168.15.30/assets/images/drone.jpg" alt=""><div class="mega-title">Explore Academics</div><p class="mb-0 text-secondary">Quick access to key pages and resources.</p></div></div>
                </div></div>
              </li>
                                                            <li class="nav-item"><a class="nav-link " href="#">Research</a></li>
                                                            <li class="nav-item"><a class="nav-link " href="#">Campus Life</a></li>
                                                            <li class="nav-item"><a class="nav-link " href="#">Admission</a></li>
                                                            <li class="nav-item"><a class="nav-link " href="#">Infrastructure</a></li>
                                                            <li class="nav-item"><a class="nav-link " href="#">Centres</a></li>
                              </ul>
      </div>
    </div>
  </nav>
</header>
<div class="offcanvas offcanvas-end" tabindex="-1" id="mainMegaMobile" aria-labelledby="mainMegaMobileLabel">
  <div class="offcanvas-header mobile-head"><h2 class="offcanvas-title h5" id="mainMegaMobileLabel">Menu</h2><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
  <div class="offcanvas-body"><a class="mobile-menu-link" href="https://192.168.15.30/about">About</a><a class="mobile-menu-link" href="#">Academics</a><a class="mobile-menu-link" href="#">Research</a><a class="mobile-menu-link" href="#">Campus Life</a><a class="mobile-menu-link" href="#">Admission</a><a class="mobile-menu-link" href="#">Infrastructure</a><a class="mobile-menu-link" href="#">Centres</a></div>
</div>
      <main id="main">
<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="https://192.168.15.30">Home</a>
            <span class="mx-2">/</span>
            <a href="https://192.168.15.30/about">About IIMK</a>
            <span class="mx-2">/</span>
            <span>Governance</span>
            <span class="mx-2">/</span>
            <span>Deans &amp; Administration</span>
        </div>

        <h1 class="hero-title">Deans &amp; Administration</h1>
        <p class="hero-sub">
            Our deans play a pivotal role in shaping academic excellence, strategic initiatives, executive education,
            institutional development and outreach at IIM Kozhikode.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

<div class="inner-mobile-nav d-lg-none">
    <div class="container">

        <button class="inner-mobile-toggle" type="button" aria-expanded="false" aria-controls="innerMobilePanel">
            <span>
                <i class="bi bi-grid-3x3-gap me-2"></i>
                Section Menu
            </span>

            <i class="bi bi-chevron-down inner-mobile-toggle-icon"></i>
        </button>

        <div class="inner-mobile-panel" id="innerMobilePanel" aria-label="Inner page navigation">
            
                
                    
                    <div class="inner-mobile-group ">
                        <button class="inner-mobile-group-toggle" type="button" aria-expanded="false">
                            <span>The Institute</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>

                        <div class="inner-mobile-submenu">
                                                            <a href="/about#overview" class="">
                                    Overview
                                </a>
                                                            <a href="/about#vision" class="">
                                    Vision 2047
                                </a>
                                                            <a href="/about#programmes" class="">
                                    Programmes
                                </a>
                                                            <a href="/about#accreditations" class="">
                                    Accreditations &amp; Rankings
                                </a>
                                                            <a href="/about#innovation" class="">
                                    Innovation &amp; Inclusion
                                </a>
                                                            <a href="/about#international" class="">
                                    International Exchange
                                </a>
                                                            <a href="/about#centres" class="">
                                    Centres of Excellence
                                </a>
                                                    </div>
                    </div>

                
            
                
                    
                    <div class="inner-mobile-group open">
                        <button class="inner-mobile-group-toggle" type="button" aria-expanded="true">
                            <span>Governance</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>

                        <div class="inner-mobile-submenu">
                                                            <a href="/about/director" class="">
                                    Director
                                </a>
                                                            <a href="/about/board-of-governors" class="">
                                    Board of Governors
                                </a>
                                                            <a href="/about/deans" class="active">
                                    Deans &amp; Administration
                                </a>
                                                    </div>
                    </div>

                
            
                
                    
                    <div class="inner-mobile-group ">
                        <button class="inner-mobile-group-toggle" type="button" aria-expanded="false">
                            <span>RTI</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>

                        <div class="inner-mobile-submenu">
                                                            <a href="/about/rti/organization-and-function" class="">
                                    Organization and Function
                                </a>
                                                            <a href="/about/rti/budget-and-programmes" class="">
                                    Budget and Programmes
                                </a>
                                                            <a href="/about/rti/publicity-and-public-interface" class="">
                                    Publicity and Public Interface
                                </a>
                                                            <a href="/about/rti/e-governance" class="">
                                    E-Governance
                                </a>
                                                            <a href="/about/rti/information-as-may-be-prescribed" class="">
                                    Information as may be Prescribed
                                </a>
                                                            <a href="/about/rti/information-disclosed-on-own-initiative" class="">
                                    Information Disclosed on Own Initiative
                                </a>
                                                    </div>
                    </div>

                
            
                
                    <a href="/about/accreditation" class="inner-mobile-link ">
                        <span>Accreditation</span>
                        <i class="bi bi-arrow-right-short"></i>
                    </a>

                
            
                
                    <a href="/about/green-initiatives" class="inner-mobile-link ">
                        <span>Green Initiatives</span>
                        <i class="bi bi-arrow-right-short"></i>
                    </a>

                
                    </div>

    </div>
</div>
<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
              <nav class="sidebar-nav-modern" aria-label="About IIMK navigation">
  <div class="sidebar-card">

    <div class="sidebar-card-top">
      <span class="sidebar-eyebrow">About IIMK</span>
      <h2 class="sidebar-title">Section Menu</h2>
    </div>

    
              
        <div class="side-group-modern ">
          <button class="side-link-modern side-toggle " type="button" aria-expanded="false">
            <span>The Institute</span>
            <i class="bi bi-chevron-down"></i>
          </button>

          <div class="side-submenu-modern">
                          <a href="/about#overview" class="">
                Overview
              </a>
                          <a href="/about#vision" class="">
                Vision 2047
              </a>
                          <a href="/about#programmes" class="">
                Programmes
              </a>
                          <a href="/about#accreditations" class="">
                Accreditations &amp; Rankings
              </a>
                          <a href="/about#innovation" class="">
                Innovation &amp; Inclusion
              </a>
                          <a href="/about#international" class="">
                International Exchange
              </a>
                          <a href="/about#centres" class="">
                Centres of Excellence
              </a>
                      </div>
        </div>

      
    
              
        <div class="side-group-modern open">
          <button class="side-link-modern side-toggle active-parent" type="button" aria-expanded="true">
            <span>Governance</span>
            <i class="bi bi-chevron-down"></i>
          </button>

          <div class="side-submenu-modern">
                          <a href="/about/director" class="">
                Director
              </a>
                          <a href="/about/board-of-governors" class="">
                Board of Governors
              </a>
                          <a href="/about/deans" class="active">
                Deans &amp; Administration
              </a>
                      </div>
        </div>

      
    
              
        <div class="side-group-modern ">
          <button class="side-link-modern side-toggle " type="button" aria-expanded="false">
            <span>RTI</span>
            <i class="bi bi-chevron-down"></i>
          </button>

          <div class="side-submenu-modern">
                          <a href="/about/rti/organization-and-function" class="">
                Organization and Function
              </a>
                          <a href="/about/rti/budget-and-programmes" class="">
                Budget and Programmes
              </a>
                          <a href="/about/rti/publicity-and-public-interface" class="">
                Publicity and Public Interface
              </a>
                          <a href="/about/rti/e-governance" class="">
                E-Governance
              </a>
                          <a href="/about/rti/information-as-may-be-prescribed" class="">
                Information as may be Prescribed
              </a>
                          <a href="/about/rti/information-disclosed-on-own-initiative" class="">
                Information Disclosed on Own Initiative
              </a>
                      </div>
        </div>

      
    
              <a href="/about/accreditation" class="side-link-modern ">
          <span>Accreditation</span>
          <i class="bi bi-arrow-right-short"></i>
        </a>
      
    
              <a href="/about/green-initiatives" class="side-link-modern ">
          <span>Green Initiatives</span>
          <i class="bi bi-arrow-right-short"></i>
        </a>
      
    
    <div class="side-cta">
      <div class="fw-bold text-primary mb-1">Discover IIMK</div>
      <p class="small text-secondary mb-3">
        Take a glimpse of our campus, culture and values.
      </p>
      <a href="#video" class="pill-btn py-2 px-3 small">
        Campus Tour <i class="bi bi-play-fill"></i>
      </a>
    </div>

  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.side-toggle').forEach(function (button) {
    button.addEventListener('click', function () {
      const currentGroup = button.closest('.side-group-modern');

      document.querySelectorAll('.side-group-modern').forEach(function (group) {
        if (group !== currentGroup) {
          group.classList.remove('open');

          const toggle = group.querySelector('.side-toggle');
          if (toggle) {
            toggle.classList.remove('active-parent');
            toggle.setAttribute('aria-expanded', 'false');
          }
        }
      });

      const isOpen = currentGroup.classList.toggle('open');
      button.classList.toggle('active-parent', isOpen);
      button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });
});
</script>            </div>

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
                        <h2 class="section-heading">Deans &amp; Administration</h2>

<div class="deans-leader-grid">

    @foreach($members as $member)

        <article class="dean-card-modern 
            {{ $loop->last ? 'dean-card-wide' : '' }}">

            <div class="dean-photo-modern">
                <img 
                    src="{{ asset('storage/' . $member->image) }}" 
                    alt="{{ $member->designation }}"
                >
            </div>

            <div class="dean-info-modern">

                <div class="dean-icon-bubble">
                    <i class="bi {{ $member->icon ?? 'bi-people' }}"></i>
                </div>

                <div class="dean-role">
                    {{ strtoupper($member->designation) }}
                </div>

                <div class="dean-role-line"></div>

                <div class="dean-name">
                    {{ $member->name }}
                </div>

                <p>
                    {{ $member->description }}
                </p>

            </div>

        </article>

    @endforeach

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

</main>
  <section class="contact-strip">
  <div class="container contact-grid">
    <div class="contact-item"><i class="bi bi-geo-alt"></i><div><strong>Location</strong><span>IIM Kozhikode Campus P.O., Kunnamangalam, Kozhikode, Kerala</span></div></div>
    <div class="contact-item"><i class="bi bi-telephone"></i><div><strong>Phone</strong><span>+91 495 280 9100<br>+91 495 280 9200</span></div></div>
    <div class="contact-item"><i class="bi bi-envelope"></i><div><strong>Email</strong><span>info@iimk.ac.in</span></div></div>
    <div class="contact-item"><i class="bi bi-clock"></i><div><strong>Working Hours</strong><span>Mon - Fri: 9:00 AM - 5:30 PM</span></div></div>
  </div>
</section>
<footer class="site-footer" role="contentinfo"><div class="container"><div class="row g-4">
  <div class="col-lg-4"><img class="footer-logo" src="https://iimk.ac.in/images/logo2.png" alt="IIM Kozhikode"><p class="mt-3 text-white-50">Globalizing Indian Thought.</p></div>
  <div class="col-6 col-lg-2"><div class="footer-title">About IIMK</div><a class="d-block mb-1" href="#">Overview</a><a class="d-block mb-1" href="#">History</a><a class="d-block mb-1" href="#">Leadership</a><a class="d-block mb-1" href="#">Rankings</a></div>
  <div class="col-6 col-lg-2"><div class="footer-title">Programmes</div><a class="d-block mb-1" href="#">Post Graduate</a><a class="d-block mb-1" href="#">Doctoral</a><a class="d-block mb-1" href="#">Executive</a><a class="d-block mb-1" href="#">Certificate</a></div>
  <div class="col-6 col-lg-2"><div class="footer-title">Resources</div><a class="d-block mb-1" href="#">Library</a><a class="d-block mb-1" href="#">Careers</a><a class="d-block mb-1" href="#">Tenders</a><a class="d-block mb-1" href="#">Contact</a></div>
  <div class="col-6 col-lg-2"><div class="footer-title">Connect</div><a class="d-inline-flex me-2" href="#"><i class="bi bi-facebook"></i></a><a class="d-inline-flex me-2" href="#"><i class="bi bi-twitter-x"></i></a><a class="d-inline-flex me-2" href="#"><i class="bi bi-linkedin"></i></a><a class="d-inline-flex" href="#"><i class="bi bi-youtube"></i></a></div>
</div><div class="footer-bottom d-flex flex-wrap gap-2 justify-content-between"><span>© <span id="year">2026</span> Indian Institute of Management Kozhikode. All rights reserved.</span><span>Privacy Policy &nbsp; | &nbsp; Terms of Use &nbsp; | &nbsp; Sitemap</span></div></div></footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://192.168.15.30/js/iimk.js"></script>
  <style> .leader-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 34px;
    align-items: stretch;
}

/* CARD */
.dean-card {
    position: relative;
    display: flex;
    overflow: hidden;

    background: #ffffff;
    border-radius: 28px;

    min-height: 320px;

    border: 1px solid rgba(3, 34, 77, 0.08);

    box-shadow:
        0 10px 30px rgba(2, 18, 46, 0.05),
        0 2px 8px rgba(2, 18, 46, 0.04);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}

/* HOVER */
.dean-card:hover {
    transform: translateY(-6px);

    border-color: rgba(180, 140, 40, 0.18);

    box-shadow:
        0 20px 45px rgba(2, 18, 46, 0.12),
        0 8px 18px rgba(2, 18, 46, 0.06);
}

/* IMAGE */
.dean-photo {
    width: 42%;
    min-width: 42%;
    position: relative;
    overflow: hidden;
}

.dean-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;

    transition: transform .5s ease;
}

.dean-card:hover .dean-photo img {
    transform: scale(1.05);
}

/* CONTENT */
.dean-info {
    flex: 1;
    padding: 34px 32px;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* ICON */
.icon-bubble {
    width: 54px;
    height: 54px;

    border-radius: 16px;

    background:
        linear-gradient(
            135deg,
            #03224d,
            #0c3b75
        );

    color: white;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    font-size: 20px;

    margin-bottom: 22px;

    box-shadow:
        0 10px 20px rgba(3, 34, 77, 0.18);
}

/* ROLE */
.role {
    font-size: .82rem;
    font-weight: 700;
    letter-spacing: 1.4px;
    text-transform: uppercase;

    color: #9b7a1d;

    margin-bottom: 14px;
}

/* LINE */
.role-line {
    width: 70px;
    height: 3px;

    border-radius: 50px;

    background: linear-gradient(
        90deg,
        #b48c28,
        transparent
    );

    margin-bottom: 18px;
}

/* NAME */
.name {
    font-size: 1.55rem;
    line-height: 1.2;
    font-weight: 800;

    color: #03224d;

    margin-bottom: 16px;
}

/* DESCRIPTION */
.desc {
    color: #526071;

    font-size: .98rem;
    line-height: 1.8;

    margin: 0;
}

/* FULL WIDTH CARD */
.dean-card.full-row {
    grid-column: 1 / -1;
    min-height: 360px;
}

/* CHAIR STYLE */
.dean-card.wide .dean-photo {
    width: 36%;
    min-width: 36%;
}

/* MOBILE */
@media (max-width: 991px) {

    .leader-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }

    .dean-card,
    .dean-card.full-row {
        flex-direction: column;
        min-height: auto;
    }

    .dean-photo,
    .dean-card.wide .dean-photo {
        width: 100%;
        min-width: 100%;
        height: 320px;
    }

    .dean-info {
        padding: 28px;
    }
}</style>

</body></html>
>>>>>>> e06d5e3c58335175348d9bf920e0650f22442e40
