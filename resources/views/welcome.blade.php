<html lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en-IN">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indian Institute of Management Kozhikode | Homepage</title>
    <meta name="description" content="Indian Institute of Management Kozhikode — official website homepage.">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#0f2a52">

    <!-- Security/privacy best-practice meta (server headers are recommended in production) -->
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <!-- NOTE (GIGW): Prefer self-hosting CSS/JS in production instead of public CDNs -->
    <!-- Bootstrap 5 -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icons (Prefer self-hosting in production) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <style>
        :root {
            /* Brand: Blue + Silver */
            --brand-blue-900: #03224d;
            --brand-blue-800: #0f2a52;
            --brand-blue-700: #143566;
            --brand-blue-600: #1d4a8a;
            --brand-blue-500: #2a66c7;

            --brand-silver-100: #f5f7fb;
            --brand-silver-200: #e9eef6;
            --brand-silver-300: #d8e0ee;
            --brand-silver-400: #b9c4d9;
            --brand-silver-500: #8fa1bf;

            --ink: #0f172a;
            --muted: #445066;

            --shadow: 0 8px 10px rgba(15, 23, 42, .12);
            --radius: 18px;
            --radius-sm: 12px;

            /* Accessible focus ring */
            --focus: 0 0 0 .25rem rgba(42, 102, 199, .38);
        }

        body {
            color: var(--ink);
            background: #fff;
        }

        /* ===== Font (Post Grotesk-like, free) ===== */
        :root {
            --font-sans: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue",
                Arial, "Noto Sans", "Liberation Sans", sans-serif;
        }

        /* Apply globally (optional but recommended) */
        body {
            font-family: var(--font-sans);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        /* ===== Primary menu (top nav) ===== */
        .main-header .navbar-nav .nav-link,
        .main-header .navbar-nav .mega-toggle {
            font-family: var(--font-sans);
            font-weight: 600;
            font-size: 0.98rem;
            letter-spacing: 0.1px;
            line-height: 1.15;
            color: var(--ink);
        }

        /* Make dropdown chevron align nicely */
        .mega-toggle i {
            font-size: .85em;
            transform: translateY(1px);
        }

        /* Better hover + active feel */
        .main-header .nav-link {
            padding: .85rem .8rem !important;
            border-radius: 12px;
        }

        .main-header .nav-link:hover {
            background: var(--brand-silver-100);
            color: var(--brand-blue-800);
        }

        /* ===== Mega menu typography ===== */
        .mega-title {
            font-family: var(--font-sans);
            font-weight: 800;
            font-size: .95rem;
            letter-spacing: .2px;
            color: var(--brand-blue-900);
            margin-bottom: .7rem;
        }

        /* Leaf items (mega menu links) - NOT bold */
        .mega-link {
            font-weight: 500 !important;
            /* or 400 if you want lighter */
        }

        /* Top nav items (Academics/Research/Campus Life/Admission/About) - NOT bold */
        .main-header .navbar-nav .nav-link,
        .main-header .navbar-nav .mega-toggle {
            font-weight: 500 !important;
        }

        /* Mobile leaf links - NOT bold */
        #mainMegaMobile .accordion-body a {
            font-weight: 500 !important;
        }

        /* Keep section headings bold (still looks premium) */
        .mega-title {
            font-weight: 800 !important;
        }

        .mega-link:hover {
            background: var(--brand-silver-100);
            color: var(--brand-blue-800);
        }

        /* Right-side mega card text tuning */
        .mega-card-title {
            font-family: var(--font-sans);
            font-weight: 800;
            letter-spacing: .2px;
        }

        .mega-card-text {
            font-family: var(--font-sans);
            font-weight: 500;
            line-height: 1.4;
        }

        /* ===== Mobile accordion menu font consistency ===== */
        #mainMegaMobile .accordion-button,
        #mainMegaMobile .accordion-body,
        #mainMegaMobile a {
            font-family: var(--font-sans);
        }

        #mainMegaMobile .accordion-button {
            font-weight: 700;
            letter-spacing: .1px;
        }

        .nav-item.mega>.mega-toggle {
            padding: .55rem .85rem !important;
            border-radius: 14px;
        }

        a {
            color: var(--brand-blue-600);
        }

        a:hover {
            color: var(--brand-blue-500);
        }

        :focus-visible {
            outline: none;
            box-shadow: var(--focus);
            border-radius: 10px;
        }

        /* Text scaling (Accessibility toolbar) */
        html {
            font-size: 100%;
        }

        html[data-text="sm"] {
            font-size: 95%;
        }

        html[data-text="md"] {
            font-size: 100%;
        }

        html[data-text="lg"] {
            font-size: 110%;
        }

        html[data-text="xl"] {
            font-size: 120%;
        }

        /* High contrast mode (Accessibility toolbar) */
        html[data-contrast="high"] body {
            background: #fff !important;
            color: #000 !important;
        }

        html[data-contrast="high"] a {
            color: #000 !important;
        }

        html[data-contrast="high"] .utility-bar,
        html[data-contrast="high"] .site-footer {
            background: #000 !important;
            color: #fff !important;
        }

        html[data-contrast="high"] .card-soft,
        html[data-contrast="high"] .metric,
        html[data-contrast="high"] .feature-row {
            box-shadow: none !important;
            border: 2px solid #000 !important;
        }

        html[data-contrast="high"] .nav-link:hover {
            background: #fff !important;
        }

        /* Accessibility helpers */
        .skip-link {
            position: absolute;
            left: -9999px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }

        .skip-link:focus {
            left: 1rem;
            top: 1rem;
            width: auto;
            height: auto;
            padding: .6rem .9rem;
            background: #fff;
            border-radius: 12px;
            border: 2px solid var(--brand-blue-500);
            z-index: 2000;
            box-shadow: var(--focus);
        }

        /* ===== Make TOP blue bar small + single line ===== */
        /* Force the TOP utility bar to blue */
        .utility-bar {
            background: #0f2a52 !important;
            /* solid blue */
            color: #ffffff !important;
        }

        /* Keep all text/icons readable on blue */
        .utility-bar a,
        .utility-bar .btn,
        .utility-bar .search-btn {
            color: #ffffff !important;
        }

        /* Pills + buttons styling on blue bar */
        .utility-pill,
        .a11y-toolbar .btn,
        .search-btn {
            background: rgba(255, 255, 255, .08) !important;
            border: 1px solid rgba(255, 255, 255, .25) !important;
        }

        /* Hover states */
        .utility-bar a:hover,
        .utility-pill:hover,
        .a11y-toolbar .btn:hover,
        .search-btn:hover {
            background: rgba(255, 255, 255, .14) !important;
            color: #ffffff !important;
        }

        .utility-bar {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important;
            font-size: .82rem;
            /* smaller */
        }

        .utility-bar .container {
            flex-wrap: nowrap !important;
            /* one line only */
            gap: .5rem !important;
            overflow-x: auto;
            /* if too many items, scroll horizontally */
            white-space: nowrap;
        }

        .utility-bar .container::-webkit-scrollbar {
            height: 6px;
        }

        .utility-bar .container::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, .25);
            border-radius: 999px;
        }

        /* Make the pills smaller so everything fits */
        .utility-pill {
            padding: .18rem .45rem !important;
            gap: .25rem !important;
        }

        /* Accessibility toolbar buttons smaller */
        .a11y-toolbar {
            flex-wrap: nowrap !important;
            gap: .35rem !important;
        }

        .a11y-toolbar .btn {
            padding: .22rem .5rem !important;
            font-size: .82rem !important;
        }

        /* Search button smaller */
        .search-btn {
            padding: .35rem .7rem !important;
            font-size: .86rem !important;
        }

        /* ===== Make LOGO big ===== */
        .navbar-brand img {
            width: 420px;
            max-width: 420px;
            height: auto;
        }

        /* ✅ Mega menu base */
        .nav-item.mega {
            position: relative;
        }

        .mega-toggle {
            background: transparent;
            border: 0;
            display: inline-flex;
            align-items: center;
        }

        /* Hidden by default */
        .mega-menu {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: calc(100% + 10px);
            width: min(1100px, calc(100vw - 2rem));
            background: #fff;
            border: 1px solid var(--brand-silver-300);
            border-radius: 18px;
            box-shadow: 0 18px 50px rgba(15, 23, 42, .16);
            padding: 1.25rem 0;
            display: none;
            z-index: 1050;
        }

        /* Show on hover (desktop) */
        @media (min-width: 1200px) {
            .nav-item.mega:hover .mega-menu {
                display: block;
            }
        }

        /* Show when opened by click (desktop) */
        .nav-item.mega.open .mega-menu {
            display: block;
        }

        .mega-title {
            font-weight: 900;
            color: var(--brand-blue-900);
            margin-bottom: .6rem;
        }

        .mega-link {
            display: block;
            padding: .45rem .25rem;
            text-decoration: none;
            color: var(--ink);
            font-weight: 700;
            border-radius: 10px;
        }

        .mega-link:hover {
            background: var(--brand-silver-100);
            color: var(--brand-blue-800);
        }

        .mega-card {
            border: 1px solid var(--brand-silver-300);
            border-radius: 16px;
            padding: 1rem;
            background: linear-gradient(135deg, #fff, var(--brand-silver-100));
            height: 100%;
        }

        .mega-card-title {
            font-weight: 900;
            color: var(--brand-blue-900);
        }

        .mega-card-text {
            color: var(--muted);
            font-weight: 600;
            margin-top: .25rem;
        }

        /* Better focus */
        .mega-toggle:focus-visible {
            box-shadow: var(--focus);
            border-radius: 12px;
        }

        /* Mobile: hide desktop collapse and use offcanvas (already handled by d-none/d-xl-flex) */

        .a11y-toolbar .btn:hover {
            background: rgba(255, 255, 255, .12);
        }

        .a11y-toolbar .btn:focus-visible {
            box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .35);
        }

        /* Main header */
        .main-header {
            position: sticky;
            top: 0;
            z-index: 1020;
            background: rgba(255, 255, 255, .92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--brand-silver-300);
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--brand-blue-700), var(--brand-blue-500));
            box-shadow: 0 10px 26px rgba(29, 74, 138, .25);
        }

        .nav-link {
            color: var(--ink);
            font-weight: 600;
            padding: .9rem .75rem !important;
            border-radius: 12px;
        }

        .nav-link:hover {
            background: var(--brand-silver-100);
            color: var(--brand-blue-800);
        }

        .search-btn {
            border: 1px solid var(--brand-silver-300);
            background: #fff;
            border-radius: 999px;
            padding: .55rem .9rem;
            font-weight: 600;
            color: var(--ink);
        }

        .search-btn:hover {
            background: var(--brand-silver-100);
        }

        /* HERO (GIGW-friendly): static image + optional video in modal (no autoplay) */
        .hero {
            position: relative;
            min-height: calc(100vh - 1px);
            color: #fff;
            overflow: hidden;
            display: flex;
            align-items: center;
            background:
                radial-gradient(900px 450px at 18% 25%, rgba(42, 102, 199, .40), transparent 55%),
                radial-gradient(700px 400px at 78% 35%, rgba(143, 161, 191, .40), transparent 55%),
                linear-gradient(135deg, rgba(11, 31, 58, .78), rgba(11, 31, 58, .62) 55%, rgba(15, 42, 82, .78));
        }

        .hero-media {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hero-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .22;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .35), rgba(0, 0, 0, .10) 40%, rgba(0, 0, 0, .35));
            z-index: 0;
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            z-index: 1;
        }

        .hero-kicker {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            border: 1px solid rgba(255, 255, 255, .25);
            background: rgba(255, 255, 255, .08);
            padding: .35rem .75rem;
            border-radius: 999px;
            font-weight: 700;
            color: rgba(255, 255, 255, .95);
        }

        .hero h1 {
            font-weight: 900;
            letter-spacing: -.6px;
            line-height: 1.05;
        }

        .hero p {
            color: rgba(255, 255, 255, .90);
            max-width: 62ch;
        }

        .hero-cta .btn {
            border-radius: 999px;
            padding: .85rem 1.15rem;
            font-weight: 800;
        }

        .btn-brand {
            background: linear-gradient(135deg, var(--brand-blue-600), var(--brand-blue-500));
            border: none;
            box-shadow: 0 14px 34px rgba(42, 102, 199, .28);
        }

        .btn-brand:hover {
            filter: brightness(1.03);
        }

        .btn-ghost {
            border: 1px solid rgba(255, 255, 255, .38);
            background: rgba(255, 255, 255, .08);
            color: #fff;
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, .14);
            color: #fff;
        }

        .hero-card {
            border-radius: var(--radius);
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .18);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .25);
            backdrop-filter: blur(10px);
        }

        .hero-card .stat {
            border-radius: 14px;
            background: rgba(255, 255, 255, .10);
            border: 1px solid rgba(255, 255, 255, .16);
            padding: 1rem;
        }

        .hero-card .stat .num {
            font-weight: 900;
            font-size: 1.35rem;
        }

        .hero-card .stat .lbl {
            color: rgba(255, 255, 255, .86);
            font-weight: 700;
            font-size: .95rem;
        }

        /* Sections */
        .section {
            padding: 4.5rem 0;
        }

        .section-title {
            font-weight: 800;
            letter-spacing: -.3px;
            color: var(--brand-blue-900);
        }

        .section-subtitle {
            color: var(--muted);
            max-width: 80ch;
        }

        .card-soft {
            border: 1px solid var(--brand-silver-300);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            background: #fff;
        }

        .card-soft .card-img-top {
            height: 190px;
            object-fit: cover;
            filter: saturate(1.02);
        }

        .badge-soft {
            background: var(--brand-silver-200);
            color: var(--brand-blue-800);
            border: 1px solid var(--brand-silver-300);
            font-weight: 700;
        }

        /* Stats band */
        .stats-band {
            background: linear-gradient(180deg, var(--brand-silver-100), #fff);
            border-top: 1px solid var(--brand-silver-300);
            border-bottom: 1px solid var(--brand-silver-300);
        }

        .metric {
            border-radius: var(--radius-sm);
            background: #fff;
            border: 1px solid var(--brand-silver-300);
            padding: 1.1rem;
            height: 100%;
        }

        .metric .num {
            font-weight: 900;
            color: var(--brand-blue-900);
        }

        .metric .lbl {
            color: var(--muted);
            font-weight: 600;
        }

        /* Feature rows */
        .feature-row {
            border-radius: var(--radius);
            border: 1px solid var(--brand-silver-300);
            background: linear-gradient(135deg, #fff, var(--brand-silver-100));
            overflow: hidden;
        }

        .feature-media {
            min-height: 280px;
            background: none;
        }

        .feature-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
        }

        /* Footer */
        .site-footer {
            background: var(--brand-blue-900);
            color: rgba(255, 255, 255, .92);
            padding: 3.5rem 0 2rem;
            margin-top: 2rem;
        }

        .site-footer a {
            color: rgba(255, 255, 255, .92);
            text-decoration: none;
        }

        .site-footer a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .footer-divider {
            border-top: 1px solid rgba(255, 255, 255, .14);
            margin-top: 2.2rem;
            padding-top: 1.6rem;
        }

        .social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, .18);
            background: rgba(255, 255, 255, .06);
            margin-right: .5rem;
        }

        .social a:hover {
            background: rgba(255, 255, 255, .12);
        }

        /* Mobile Menu */
        .mobile-menu .offcanvas-header {
            padding: 0;
            border-bottom: 1px solid rgba(255, 255, 255, .12);
        }

        .mobile-menu-topbar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: .75rem;
            padding: .75rem 1rem;
            background: var(--brand-blue-900);
            color: #fff;
        }

        .mobile-menu-topbar a {
            color: #fff;
            text-decoration: none;
            font-weight: 900;
            letter-spacing: .2px;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
        }

        .mobile-menu-actions {
            display: flex;
            gap: .5rem;
            align-items: center;
        }

        .mobile-menu-actions button {
            border: 1px solid rgba(255, 255, 255, .22);
            background: rgba(255, 255, 255, .06);
            color: #fff;
            border-radius: 999px;
            padding: .45rem .75rem;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            gap: .4rem;
        }

        .mobile-menu-actions button:hover {
            background: rgba(255, 255, 255, .12);
        }

        .mobile-menu .offcanvas-body {
            padding: 0;
            background: #fff;
            color: var(--ink);
        }

        .mobile-search {
            padding: 1rem;
            border-bottom: 1px solid var(--brand-silver-300);
            background: var(--brand-silver-100);
        }

        .mobile-search .form-control,
        .mobile-search .btn {
            border-radius: 999px;
            font-weight: 700;
        }

        .mobile-search label {
            font-weight: 900;
            color: var(--brand-blue-900);
        }

        .menu-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-top: 1px solid var(--brand-silver-300);
            border-left: 1px solid var(--brand-silver-300);
        }

        .menu-grid a {
            padding: 1.1rem 1rem;
            text-decoration: none;
            color: var(--ink);
            font-weight: 800;
            text-align: center;
            border-right: 1px solid var(--brand-silver-300);
            border-bottom: 1px solid var(--brand-silver-300);
            background: #fff;
        }

        .menu-grid a:hover {
            background: var(--brand-silver-100);
            color: var(--brand-blue-800);
        }

        .menu-grid a:focus-visible {
            box-shadow: inset var(--focus);
            border-radius: 0;
        }

        .info-for {
            padding: 1rem 1rem 1.25rem;
            background: #fff;
        }

        .info-for h2 {
            font-size: 1rem;
            font-weight: 900;
            margin: 0 0 .75rem;
            text-align: center;
            color: var(--brand-blue-900);
        }

        .info-links {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem .9rem;
            justify-content: center;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .info-links a {
            display: inline-flex;
            padding: .35rem .55rem;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 800;
            color: var(--brand-blue-800);
            border: 1px solid var(--brand-silver-300);
            background: var(--brand-silver-100);
        }

        .info-links a:hover {
            background: var(--brand-silver-200);
        }

        /* Utility bar: compact height always */
        .utility-bar {
            padding: .25rem 0 !important;
            background: #0f2a52 !important;
            color: #fff !important;
        }

        /* Mobile menu button look */
        .utility-menu-btn {
            border-radius: 999px;
            padding: .3rem .7rem;
            font-weight: 800;
            border: 1px solid rgba(255, 255, 255, .25);
            background: rgba(255, 255, 255, .08);
            color: #fff;
        }

        .utility-menu-btn:hover {
            background: rgba(255, 255, 255, .14);
        }

        /*
  KEY PART:
  If it might wrap, we switch earlier (lg breakpoint).
  You can change 992px to 1200px if you want
  it to switch sooner.
*/
        @media (max-width: 991.98px) {

            .utility-desktop-left,
            .utility-desktop-right {
                display: none !important;
            }

            .utility-mobile {
                display: flex !important;
            }
        }

        @media (min-width: 992px) {
            .utility-mobile {
                display: none !important;
            }
        }

        /* Print */
        @media print {

            .utility-bar,
            .main-header,
            .mobile-menu,
            .modal,
            .social {
                display: none !important;
            }

            a::after {
                content: " (" attr(href) ")";
                font-size: 90%;
            }
        }

        /* ===== Announcements header row like screenshot ===== */
        .ann-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.25rem;
            width: 100%;
        }

        .ann-head h2 {
            margin: 0;
            font-weight: 900;
            color: var(--brand-blue-900);
            letter-spacing: -.2px;
        }

        .ann-head p {
            margin: .35rem 0 0;
            color: var(--muted);
            font-weight: 500;
        }

        .ann-head .ann-btn {
            border-radius: 999px;
            font-weight: 800;
            padding: .55rem 1rem;
        }

        /* ===== Card style like screenshot ===== */
        .ann-card {
            border: 1px solid var(--brand-silver-300);
            border-radius: 22px;
            overflow: hidden;
            background: #fff;
            box-shadow: -1px 2px 11px 0px rgba(15, 23, 42, .10);
            height: 100%;
        }

        .ann-card .ann-img {
            height: 220px;
            width: 100%;
            object-fit: cover;
            display: block;
        }

        .ann-card .ann-body {
            padding: 1.25rem 1.4rem 1.4rem;
        }

        .ann-pill {
            display: inline-flex;
            align-items: center;
            padding: .25rem .7rem;
            border-radius: 999px;
            font-weight: 800;
            font-size: .78rem;
            background: #eef3fb;
            border: 1px solid #d8e3f6;
            color: var(--brand-blue-800);
            margin-bottom: .8rem;
        }

        .ann-card h3 {
            font-weight: 900;
            margin: 0 0 .45rem;
        }

        .ann-card .ann-text {
            color: var(--muted);
            font-weight: 500;
            margin: 0 0 .9rem;
        }

        .ann-link {
            font-weight: 900;
            color: var(--brand-blue-700);
            text-decoration: none;
            display: inline-flex;
            gap: .35rem;
            align-items: center;
        }

        .ann-link:hover {
            text-decoration: underline;
        }

        /* ===== Carousel: keep it clean (no big overlay arrows) ===== */
        #announcementsCarouselLoop .carousel-control-prev,
        #announcementsCarouselLoop .carousel-control-next {
            width: 46px;
            height: 46px;
            top: -62px;
            /* move controls above cards */
            bottom: auto;
            opacity: 1;
        }

        /* Change carousel arrow color to blue */
        #announcementsCarouselLoop .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%230f2a52' viewBox='0 0 16 16'%3e%3cpath d='M6.854 3.646a.5.5 0 0 0-.708.708L9.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4z'/%3e%3c/svg%3e");
        }

        #announcementsCarouselLoop .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%230f2a52' viewBox='0 0 16 16'%3e%3cpath d='M9.146 3.646a.5.5 0 0 1 .708.708L6.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4z'/%3e%3c/svg%3e");
        }

        #announcementsCarouselLoop .carousel-control-prev {
            left: auto;
            right: 60px;
        }

        #announcementsCarouselLoop .carousel-control-next {
            right: 10px;
        }

        #announcementsCarouselLoop .carousel-control-prev-icon,
        #announcementsCarouselLoop .carousel-control-next-icon {
            filter: none;
            background-color: #fff;
            border: 1px solid var(--brand-silver-300);
            border-radius: 999px;
            box-shadow: 0 10px 22px rgba(15, 23, 42, .10);
            width: 46px;
            height: 46px;
            background-size: 60% 60%;
        }

        /* Indicators: subtle dots */
        #announcementsCarouselLoop .carousel-indicators {
            position: static;
            margin-top: 14px;
            margin-bottom: 0;
            justify-content: center;
            gap: .35rem;
        }

        #announcementsCarouselLoop .carousel-indicators [data-bs-target] {
            width: 9px;
            height: 9px;
            border-radius: 999px;
        }

        /* spacing */
        #announcementsCarouselLoop {
            padding-top: 8px;
        }

        /* room for arrows */

        /* On small screens, keep arrows inside nicely */
        @media (max-width: 575.98px) {

            #announcementsCarouselLoop .carousel-control-prev,
            #announcementsCarouselLoop .carousel-control-next {
                top: -54px;
            }
        }

        /* Announcements dropdown button */
        .ann-dropdown .ann-btn {
            border-radius: 999px;
            font-weight: 700;
            padding: .55rem 1rem;
        }

        /* Dropdown menu styling */
        .ann-dropdown-menu {
            min-width: 220px;
            border: 1px solid var(--brand-silver-300);
            border-radius: 16px;
            padding: .45rem;
            box-shadow: 0 14px 30px rgba(15, 23, 42, .12);
        }

        .ann-dropdown-menu .dropdown-item {
            border-radius: 10px;
            font-weight: 500;
            padding: .6rem .85rem;
            color: var(--ink);
        }

        .ann-dropdown-menu .dropdown-item:hover,
        .ann-dropdown-menu .dropdown-item:focus {
            background: var(--brand-silver-100);
            color: var(--brand-blue-800);
        }

        .academics-wrap {
            overflow: hidden;
        }

        .academics-left {
            background: #fff;
        }

        .acad-card {
            display: block;
            height: 100%;
            text-decoration: none;
            border: 1px solid var(--brand-silver-300);
            background: linear-gradient(135deg, #fff, var(--brand-silver-100));
            border-radius: 16px;
            padding: 1rem 1.05rem;
            box-shadow: 0 14px 30px rgba(15, 23, 42, .08);
            transition: transform .15s ease, box-shadow .15s ease, border-color .15s ease;
            color: var(--ink);
        }

        .acad-card:hover {
            transform: translateY(-2px);
            border-color: var(--brand-silver-400);
            box-shadow: 0 18px 40px rgba(15, 23, 42, .12);
            color: var(--ink);
        }

        .acad-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: .65rem;
        }

        .acad-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(42, 102, 199, .10);
            color: var(--brand-blue-700);
            border: 1px solid rgba(42, 102, 199, .18);
            font-size: 1.15rem;
        }

        .acad-arrow {
            width: 34px;
            height: 34px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border: 1px solid var(--brand-silver-300);
            color: var(--brand-blue-700);
        }

        .acad-link {
            margin-top: .65rem;
            font-weight: 800;
            color: var(--brand-blue-700);
            display: inline-flex;
            align-items: center;
            gap: .35rem;
        }

        .acad-card-wide {
            padding: 1rem 1.1rem;
        }

        .academics-media {
            background: none;
        }

        .academics-media-inner {
            height: 100%;
            min-height: 520px;
            position: relative;
        }

        .academics-media-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
            mix-blend-mode: normal;
            filter: none;
        }

        /* Mobile: image goes below, better height */
        @media (max-width: 991.98px) {
            .academics-media-inner {
                min-height: 320px;
            }
        }
    </style>
</head>

<body>
    <!-- GIGW: Skip links -->
    <a class="skip-link" href="#main">Skip to main content</a>
    <a class="skip-link" style="top:3.2rem" href="#primaryNav">Skip to navigation</a>

    <!-- Utility Bar -->
    <div class="utility-bar" role="region" aria-label="Top utility bar">
        <div class="container d-flex align-items-center justify-content-between gap-2">

            <!-- LEFT: Information for (desktop) -->
            <div class="utility-desktop-left d-none d-lg-flex align-items-center gap-2">
                <span class="opacity-75 fw-semibold">Information for:</span>
                <a class="utility-pill" href="#"><i class="bi bi-mortarboard"></i> Students</a>
                <a class="utility-pill" href="#"><i class="bi bi-people"></i> Faculty &amp; Staff</a>
                <a class="utility-pill" href="#"><i class="bi bi-geo-alt"></i> Visitors</a>
                <a class="utility-pill" href="#"><i class="bi bi-award"></i> Alumni</a>
            </div>

            <!-- RIGHT: Tools (desktop) -->
            <div class="utility-desktop-right d-none d-lg-flex align-items-center gap-2">
                <div class="a11y-toolbar" role="group" aria-label="Accessibility options">
                    <button class="btn" type="button" id="txtDec">A-</button>
                    <button class="btn" type="button" id="txtReset">A</button>
                    <button class="btn" type="button" id="txtInc">A+</button>
                    <button class="btn" type="button" id="contrastToggle" aria-pressed="false">High contrast</button>
                </div>

                <a class="utility-pill" href="/lang/hi" lang="hi">हिन्दी</a>
                <a class="utility-pill" href="/lang/en">English</a>

                <button class="search-btn" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bi bi-search me-1"></i> Search
                </button>

                <a class="utility-pill" href="#sitemap"><i class="bi bi-diagram-3"></i> Sitemap</a>
                <a class="utility-pill" href="#screen-reader"><i class="bi bi-universal-access"></i> Screen Reader</a>
                <a class="utility-pill" href="#"><i class="bi bi-map"></i> Map</a>
            </div>

            <!-- MOBILE: one compact row + menu button -->
            <div class="utility-mobile d-flex d-lg-none w-100 align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-semibold small">IIMK</span>
                </div>

                <button class="btn utility-menu-btn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#utilityMenu" aria-controls="utilityMenu" aria-label="Open utility menu">
                    <i class="bi bi-list"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Utility Mobile Offcanvas -->
    <div class="offcanvas offcanvas-top mobile-menu" tabindex="-1" id="utilityMenu" aria-labelledby="utilityMenuLabel"
        style="height: 100vh;">
        <div class="offcanvas-header">
            <div class="mobile-menu-topbar">
                <a href="#" aria-label="Homepage (utility menu)">
                    <span id="utilityMenuLabel">Quick Menu</span>
                </a>
                <div class="mobile-menu-actions">
                    <button type="button" data-bs-dismiss="offcanvas" aria-label="Close utility menu">
                        <i class="bi bi-x-lg" aria-hidden="true"></i>
                        <span>Close</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="offcanvas-body">
            <div class="container py-3">

                <h2 class="h6 fw-bold mb-2" style="color:var(--brand-blue-900)">Information for</h2>
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <a class="utility-pill" href="#"><i class="bi bi-mortarboard"></i> Students</a>
                    <a class="utility-pill" href="#"><i class="bi bi-people"></i> Faculty &amp; Staff</a>
                    <a class="utility-pill" href="#"><i class="bi bi-geo-alt"></i> Visitors</a>
                    <a class="utility-pill" href="#"><i class="bi bi-award"></i> Alumni</a>
                </div>

                <h2 class="h6 fw-bold mb-2" style="color:var(--brand-blue-900)">Tools</h2>
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <a class="utility-pill" href="#" lang="hi">हिन्दी</a>
                    <a class="utility-pill" href="#">English</a>
                    <a class="utility-pill" href="#sitemap"><i class="bi bi-diagram-3"></i> Sitemap</a>
                    <a class="utility-pill" href="#screen-reader"><i class="bi bi-universal-access"></i> Screen
                        Reader</a>
                    <a class="utility-pill" href="#"><i class="bi bi-map"></i> Map</a>
                </div>

                <div class="mb-3">
                    <button class="search-btn w-100" type="button" data-bs-toggle="modal" data-bs-target="#searchModal"
                        data-bs-dismiss="offcanvas">
                        <i class="bi bi-search me-1"></i> Search
                    </button>
                </div>

                <h2 class="h6 fw-bold mb-2" style="color:var(--brand-blue-900)">Accessibility</h2>
                <div class="a11y-toolbar justify-content-start">
                    <button class="btn" type="button" id="txtDec_m">A-</button>
                    <button class="btn" type="button" id="txtReset_m">A</button>
                    <button class="btn" type="button" id="txtInc_m">A+</button>
                    <button class="btn" type="button" id="contrastToggle_m" aria-pressed="false">High contrast</button>
                </div>
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mainMegaMobile" aria-controls="mainMegaMobile" aria-label="Open menu">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span> <span class="btn btn-primary">Main
                        Menu</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header" role="banner">
        <nav class="navbar navbar-expand-xl" id="primaryNav" aria-label="Primary navigation">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand d-flex align-items-center gap-2" href="#" aria-label="IIM Kozhikode Home">
                    <img src="https://iimk.ac.in/images/logo2.png" alt="Indian Institute of Management Kozhikode logo">
                </a>

                <!-- Mobile toggle -->
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mainMegaMobile" aria-controls="mainMegaMobile" aria-label="Open menu">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>

                <!-- Desktop menu -->
                <div class="collapse navbar-collapse d-none d-xl-flex" id="desktopMegaNav">
                    <ul class="navbar-nav ms-auto align-items-xl-center gap-1">

                        <!-- Academics (Mega) -->
                        <li class="nav-item mega">
                            <button class="nav-link mega-toggle" type="button" aria-expanded="false"
                                aria-controls="megaAcademics">
                                {{ __('messages.Academics') }} <i class="bi bi-chevron-down small ms-1"></i>
                            </button>

                            <div class="mega-menu" id="megaAcademics" role="region" aria-label="Academics menu">
                                <div class="container">
                                    <div class="row g-4">

                                        <div class="col-lg-4">
                                            <div class="mega-title">Regular Programmes</div>
                                            <a class="mega-link" href="#">Doctoral Programmes (PhD)</a>
                                            <a class="mega-link" href="#">Post Graduate Programme (PGP)</a>
                                            <a class="mega-link" href="#">PGP in Finance (PGP-Finance)</a>
                                            <a class="mega-link" href="#">PGP Liberal Studies &amp; Management
                                                (PGP-LSM)</a>
                                            <a class="mega-link" href="#">PGP in Business Leadership (PGP-BL)</a>
                                            <a class="mega-link" href="#">Bachelor of Management Studies (BMS)</a>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mega-title">Executive Programmes</div>
                                            <a class="mega-link" href="#">MBA for Working Executives (IL -
                                                Kozhikode)</a>
                                            <a class="mega-link" href="#">MBA for Working Executives (Kochi Campus)</a>
                                            <a class="mega-link" href="#">Diploma in Management</a>
                                            <a class="mega-link" href="#">Management Development Programme (MDP)</a>
                                            <a class="mega-link" href="#">Faculty Development Programme (FDP)</a>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mega-card">
                                                <div class="mega-card-title">Explore Academics</div>
                                                <div class="mega-card-text"><img src="assets/images/drone.jpg"
                                                        style="width:100%; height:auto;"></div>
                                                <a class="btn btn-sm btn-primary rounded-pill mt-2" href="#">Academic
                                                    portal</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Research (Mega) -->
                        <li class="nav-item mega">
                            <button class="nav-link mega-toggle" type="button" aria-expanded="false"
                                aria-controls="megaResearch">
                                {{ __('messages.research') }} <i class="bi bi-chevron-down small ms-1"></i>
                            </button>

                            <div class="mega-menu" id="megaResearch" role="region" aria-label="Research menu">
                                <div class="container">
                                    <div class="row g-4">

                                        <div class="col-lg-4">
                                            <div class="mega-title">Areas</div>
                                            <a class="mega-link" href="#">Publications</a>
                                            <a class="mega-link" href="#">Research Centres</a>
                                            <a class="mega-link" href="#">Projects</a>
                                            <a class="mega-link" href="#">Collaboration</a>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mega-title">Resources</div>
                                            <a class="mega-link" href="#">Library</a>
                                            <a class="mega-link" href="#">Ethics &amp; Compliance</a>
                                            <a class="mega-link" href="#">Funding</a>
                                            <a class="mega-link" href="#">Datasets</a>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mega-card">
                                                <div class="mega-card-title">Latest</div>
                                                <div class="mega-card-text">Find research highlights and news.</div>
                                                <a class="btn btn-sm btn-outline-primary rounded-pill mt-2"
                                                    href="#">Research highlights</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Campus Life (Mega) -->
                        <li class="nav-item mega">
                            <button class="nav-link mega-toggle" type="button" aria-expanded="false"
                                aria-controls="megaCampus">
                                {{ __('messages.faculty') }} <i class="bi bi-chevron-down small ms-1"></i>
                            </button>

                            <div class="mega-menu" id="megaCampus" role="region" aria-label="Campus Life menu">
                                <div class="container">
                                    <div class="row g-4">

                                        <div class="col-lg-3">
                                            <div class="mega-title">Student Life</div>
                                            <a class="mega-link" href="#">Hostels &amp; Dining</a>
                                            <a class="mega-link" href="#">Clubs</a>
                                            <a class="mega-link" href="#">Wellness</a>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mega-title">Services</div>
                                            <a class="mega-link" href="#">IT Services</a>
                                            <a class="mega-link" href="#">Transport</a>
                                            <a class="mega-link" href="#">Health Centre</a>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mega-title">Community</div>
                                            <a class="mega-link" href="#">Events</a>
                                            <a class="mega-link" href="#">Alumni</a>
                                            <a class="mega-link" href="#">Visitors</a>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mega-card">
                                                <div class="mega-card-title">Campus Map</div>
                                                <div class="mega-card-text">Navigate quickly across campus.</div>
                                                <a class="btn btn-sm btn-primary rounded-pill mt-2" href="#">Open
                                                    map</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Normal links -->
                        <li class="nav-item"><a class="nav-link" href="#admission"> {{ __('messages.admission') }} </a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html"> {{ __('messages.about') }} </a></li>
                        <li class="nav-item"><a class="nav-link" href="#news"> {{ __('messages.infrastructure') }} </a></li>
                        <li class="nav-item"><a class="nav-link" href="#events"> {{ __('messages.centers') }} </a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ✅ MOBILE OFFCANVAS (mega menu becomes accordion) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mainMegaMobile" aria-labelledby="mainMegaMobileLabel">
        <div class="offcanvas-header" style="background:#0f2a52;color:#fff;">
            <h2 class="offcanvas-title h5 mb-0" id="mainMegaMobileLabel">Menu</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div class="p-3 border-bottom">
                <a class="btn btn-outline-primary w-100 rounded-pill" href="#" data-bs-dismiss="offcanvas">
                    <i class="bi bi-search me-1"></i> Search
                </a>
            </div>

            <div class="accordion" id="mobileMegaAcc">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="mAcadH">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mAcad"
                            aria-expanded="true" aria-controls="mAcad">
                            Academics
                        </button>
                    </h2>
                    <div id="mAcad" class="accordion-collapse collapse show" aria-labelledby="mAcadH"
                        data-bs-parent="#mobileMegaAcc">
                        <div class="accordion-body">
                            <div class="fw-bold mb-2">Regular Programmes</div>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Doctoral Programmes (PhD)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Post Graduate Programme
                                (PGP)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">PGP in Finance
                                (PGP-Finance)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">PGP Liberal Studies &amp;
                                Management (PGP-LSM)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">PGP in Business Leadership
                                (PGP-BL)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Bachelor of Management Studies
                                (BMS)</a>
                            <hr>
                            <div class="fw-bold mb-2">Executive Programmes</div>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">MBA for Working Executives (IL
                                - Kozhikode)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">MBA for Working Executives
                                (Kochi Campus)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Diploma in Management</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Management Development
                                Programme (MDP)</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Faculty Development Programme
                                (FDP)</a>
                            <hr>
                            <div class="fw-bold mb-2">Schools &amp; Centres</div>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Finance &amp; Accounting</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Marketing</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Operations</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Strategy</a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="mResH">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mRes" aria-expanded="false" aria-controls="mRes">
                            Research
                        </button>
                    </h2>
                    <div id="mRes" class="accordion-collapse collapse" aria-labelledby="mResH"
                        data-bs-parent="#mobileMegaAcc">
                        <div class="accordion-body">
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Publications</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Research Centres</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Projects</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Funding</a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="mCampH">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mCamp" aria-expanded="false" aria-controls="mCamp">
                            Campus Life
                        </button>
                    </h2>
                    <div id="mCamp" class="accordion-collapse collapse" aria-labelledby="mCampH"
                        data-bs-parent="#mobileMegaAcc">
                        <div class="accordion-body">
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Hostels &amp; Dining</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Clubs</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Wellness</a>
                            <a class="d-block py-1" href="#" data-bs-dismiss="offcanvas">Events</a>
                        </div>
                    </div>
                </div>

                <div class="p-3">
                    <a class="d-block py-2 fw-semibold text-decoration-none" href="#admission"
                        data-bs-dismiss="offcanvas">Admission</a>
                    <a class="d-block py-2 fw-semibold text-decoration-none" href="#about"
                        data-bs-dismiss="offcanvas">About</a>
                    <a class="d-block py-2 fw-semibold text-decoration-none" href="#news"
                        data-bs-dismiss="offcanvas">News</a>
                    <a class="d-block py-2 fw-semibold text-decoration-none" href="#events"
                        data-bs-dismiss="offcanvas">Events</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Mobile Menu Offcanvas -->
    <div class="offcanvas offcanvas-top mobile-menu" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel"
        data-bs-scroll="false" data-bs-backdrop="true" style="height: 100vh;">
        <div class="offcanvas-header">
            <div class="mobile-menu-topbar">
                <a href="#" aria-label="Homepage (mobile menu)">
                    <span id="mobileMenuLabel">IIM Kozhikode</span>
                </a>

                <div class="mobile-menu-actions">
                    <button type="button" id="mobileSearchToggle" aria-controls="mobileSearchPanel"
                        aria-expanded="false" aria-label="Toggle search within menu">
                        <i class="bi bi-search" aria-hidden="true"></i>
                        <span>Search</span>
                    </button>

                    <button type="button" data-bs-dismiss="offcanvas" aria-label="Close menu">
                        <i class="bi bi-x-lg" aria-hidden="true"></i>
                        <span>Close</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="offcanvas-body">
            <!-- Collapsible search panel -->
            <div class="mobile-search collapse" id="mobileSearchPanel">
                <div class="container">
                    <form action="#" method="get" role="search" aria-label="Site search (mobile)">
                        <label class="form-label mb-2" for="mobileQ">Search this site</label>
                        <div class="input-group">
                            <span class="input-group-text" aria-hidden="true"><i class="bi bi-search"></i></span>
                            <input id="mobileQ" name="q" class="form-control" type="search"
                                placeholder="Type keywords…">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Menu grid -->
            <nav class="container-fluid px-0" aria-label="Mobile primary menu">
                <div class="menu-grid" role="list">
                    <a role="listitem" href="#academics" data-close-menu="">Academics</a>
                    <a role="listitem" href="#research" data-close-menu="">Research</a>

                    <a role="listitem" href="#health" data-close-menu="">Health Care</a>
                    <a role="listitem" href="#campus" data-close-menu="">Campus Life</a>

                    <a role="listitem" href="#athletics" data-close-menu="">Athletics</a>
                    <a role="listitem" href="#admission" data-close-menu="">Admission</a>

                    <a role="listitem" href="#about" data-close-menu="">About</a>
                    <a role="listitem" href="#news" data-close-menu="">News</a>

                    <a role="listitem" href="#events" data-close-menu="" style="grid-column: 1 / span 2;">Events</a>
                </div>
            </nav>

            <!-- Information for -->
            <section class="info-for" aria-label="Information for links">
                <h2>Information for:</h2>
                <ul class="info-links">
                    <li><a href="#" data-close-menu="">Students</a></li>
                    <li><a href="#" data-close-menu="">Faculty &amp; Staff</a></li>
                    <li><a href="#" data-close-menu="">Families</a></li>
                    <li><a href="#" data-close-menu="">Visitors</a></li>
                    <li><a href="#" data-close-menu="">Alumni</a></li>
                </ul>
            </section>
        </div>
    </div>

    <!-- HERO (Static image; optional video via modal) -->
    <section class="hero" aria-label="Homepage hero">
        <div class="hero-media" aria-hidden="true">
            <!-- Use a locally hosted image in production -->
            <video autoplay="" muted="" loop="" playsinline="" preload="metadata" aria-hidden="true"
                style="width: 100%;">
                <source src="assets/videos/shortiimk.mp4" type="video/mp4"> <!-- Fallback text (rarely shown) --> Your
                browser does not support the video tag.
            </video>
        </div>

        <div class="container hero-inner py-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hero-kicker mb-3">
                        <i class="bi bi-compass" aria-hidden="true"></i>
                            {{ __('messages.Explore IIM Kozhikode') }}
                    </div>
                    <h1 class="display-4 mb-3">{{ __('messages.Inspiring Leadership. Transforming Futures.') }}</h1>
                    <p class="lead mb-4">
                        {{ __('messages.The Indian Institute of Management Kozhikode nurtures innovation, excellence, and responsible leadership.') }}
                    </p>

                    <div class="hero-cta d-flex flex-wrap gap-2">
                        <a class="btn btn-brand text-white" href="#about">{{ __('messages.programmes') }}</a>
                        <a class="btn btn-ghost" href="#news">{{ __('messages.quicklinks') }}</a>
                        <button class="btn btn-ghost" type="button" data-bs-toggle="modal"
                            data-bs-target="#heroVideoModal" aria-label="Open campus video">
                            <i class="bi bi-play-circle me-1" aria-hidden="true"></i> {{ __('messages.watch video') }}
                        </button>
                    </div>


                </div>

                <div class="col-lg-5">
                    <div class="hero-card p-4" role="group" aria-label="At a glance statistics">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="fw-semibold text-white-50">{{ __('messages.At a glance') }}</div>
                                <div class="h4 mb-0">{{ __('messages.impact by the numbers') }}</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-6">
                                <div class="stat">
                                    <div class="num">3rd</div>
                                    <div class="lbl">{{ __('messages.among B-schools in the NIRF*') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat">
                                    <div class="num">3</div>
                                    <div class="lbl">{{ __('messages.Triple Crown Accreditation: AACSB, AMBA, and EQUIS') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat">
                                    <div class="num">1,000+</div>
                                    <div class="lbl">{{ __('messages.Students') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat">
                                    <div class="num">51%</div>
                                    <div class="lbl">{{ __('messages.Female representation') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 text-white-50 small">
                            *NIRF 2025
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main" tabindex="-1" role="main">
        <!-- Campus News -->
        <section id="news" class="section" aria-labelledby="newsTitle">
            <div class="container">
                <div class="d-flex flex-wrap gap-3 align-items-end justify-content-between mb-4">
                    <div class="ann-head">
                        <div>
                            <h2 id="newsTitle">{{ __('messages.Announcements') }}</h2>
                            <p>{{ __('messages.Stories about events, people, research, innovation, and community.') }}</p>
                        </div>
                        <div class="dropdown ann-dropdown">
                            <button class="btn btn-outline-primary ann-btn dropdown-toggle" type="button"
                                id="announcementsMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('messages.Announcements') }}
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end ann-dropdown-menu"
                                aria-labelledby="announcementsMenu">
                                <li><a class="dropdown-item" href="#" data-ann-filter="all">{{ __('messages.All Announcements') }}</a></li>
                                <li><a class="dropdown-item" href="#" data-ann-filter="events">{{ __('messages.Events') }}</a></li>
                                <li><a class="dropdown-item" href="#" data-ann-filter="conference">{{ __('messages.Conferences') }}</a></li>
                                <li><a class="dropdown-item" href="#" data-ann-filter="career">{{ __('messages.Career') }}</a></li>
                                <li><a class="dropdown-item" href="#" data-ann-filter="academics">{{ __('messages.Academics') }}</a></li>
                                <li><a class="dropdown-item" href="#" data-ann-filter="learning">{{ __('messages.Learning') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div id="announcementsCarouselLoop" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true"
                    data-bs-interval="6500" aria-label="Announcements carousel">

                    <div class="carousel-indicators"><button type="button" data-bs-target="#announcementsCarouselLoop"
                            data-bs-slide-to="0" aria-label="Slide 1" class=""></button><button type="button"
                            data-bs-target="#announcementsCarouselLoop" data-bs-slide-to="1" aria-label="Slide 2"
                            class=""></button><button type="button" data-bs-target="#announcementsCarouselLoop"
                            data-bs-slide-to="2" aria-label="Slide 3" class="active"
                            aria-current="true"></button><button type="button"
                            data-bs-target="#announcementsCarouselLoop" data-bs-slide-to="3" aria-label="Slide 4"
                            class=""></button></div>

                   <div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        @foreach ($announcements->chunk(3) as $chunkIndex => $chunk)
            <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                <div class="row g-4 w-100 mx-0">

                    @foreach ($chunk as $item)
                        <div class="col-12 col-md-6 col-lg-4 ann-item">
                            <article class="ann-card">

                                {{-- IMAGE --}}
                                <img class="ann-img"
                                    src="{{ $item->image ? asset('storage/' . $item->image) : 'https://iimk.ac.in/images/annou-default.jpg' }}"
                                    alt="{{ $item->image }}">

                                <div class="ann-body">

                                    {{-- CATEGORY --}}
                                    <span class="ann-pill">
                                        {{ $item->category->name ?? 'General' }}
                                    </span>

                                    {{-- TITLE --}}
                                    <h3 class="h5">
                                        {{ $item->title[app()->getLocale()] }}
                                    </h3>

                                    {{-- DESCRIPTION --}}
                                    <p class="ann-text">

                                        {{ $item->title[app()->getLocale()] }}
                                    </p>

                                    {{-- LINK --}}
                                    @if($item->link_url)
                                        <a class="ann-link" href="{{ $item->link_url }}">
                                            {{ $item->link_name[app()->getLocale()]  }}
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    @endif

                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        @endforeach

    </div>

    {{-- CONTROLS --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#announcementsCarouselLoop"
                        data-bs-slide="prev" aria-label="Previous">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#announcementsCarouselLoop"
                        data-bs-slide="next" aria-label="Next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>






            </div>
        </section>

        <!-- Academics -->
        <section id="academics" class="section pt-10" aria-labelledby="academicsTitle"
            style="background-color: #03224d;">
            <div class="container">
                <div class="feature-row academics-wrap">

                    <div class="row g-0 align-items-stretch">
                        <!-- LEFT -->
                        <div class="col-lg-6 p-4 p-lg-5 academics-left">
                            <div class="mb-3">
                                <h2 class="section-title mb-2" id="academicsTitle">Academics</h2>
                                <p class="section-subtitle mb-0">
                                    Explore doctoral, postgraduate, undergraduate, and executive programmes designed to
                                    develop future-ready
                                    management leaders.
                                </p>
                            </div>

                            <!-- ✅ Key pathways -->
                            <div class="row g-3 mt-3">
                                <div class="col-md-6">
                                    <a class="acad-card" href="#" aria-label="Doctoral Programmes">
                                        <div class="acad-top">
                                            <div class="acad-icon"><i class="bi bi-mortarboard"></i></div>
                                            <div class="acad-arrow"><i class="bi bi-arrow-right"></i></div>
                                        </div>
                                        <h3 class="h6 fw-bold mb-1">Doctoral Programmes (PhD)</h3>
                                        <p class="mb-0 text-secondary small">
                                            Regular PhD programmes for aspiring researchers, with part-time options
                                            available.
                                        </p>
                                        <div class="acad-link">Learn more</div>
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a class="acad-card" href="#"
                                        aria-label="Undergraduate and Post Graduate Education">
                                        <div class="acad-top">
                                            <div class="acad-icon"><i class="bi bi-journal-richtext"></i></div>
                                            <div class="acad-arrow"><i class="bi bi-arrow-right"></i></div>
                                        </div>
                                        <h3 class="h6 fw-bold mb-1">Undergraduate &amp; Postgraduate</h3>
                                        <p class="mb-0 text-secondary small">
                                            Full-time programmes including BMS, PGP, PGP-FIN, PGP-LSM and PGP-BL.
                                        </p>
                                        <div class="acad-link">Learn more</div>
                                    </a>
                                </div>

                                <div class="col-md-12">
                                    <a class="acad-card acad-card-wide" href="#" aria-label="Lifelong Learning">
                                        <div class="acad-top">
                                            <div class="acad-icon"><i class="bi bi-lightbulb"></i></div>
                                            <div class="acad-arrow"><i class="bi bi-arrow-right"></i></div>
                                        </div>
                                        <h3 class="h6 fw-bold mb-1">Lifelong Learning</h3>
                                        <p class="mb-0 text-secondary small">
                                            Executive education, professional programmes, management development, and
                                            outreach.
                                        </p>
                                        <div class="acad-link">Learn more</div>
                                    </a>
                                </div>
                            </div>

                            <!-- ✅ Available Programmes (Grouped) -->
                            <hr class="my-4">

                            <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap">
                                <div>
                                    <h3 class="h6 fw-bold mb-1" style="color:var(--brand-blue-900);">Available
                                        Programmes</h3>
                                    <p class="text-secondary small mb-0">Quick links to major academic and executive
                                        offerings.</p>
                                </div>
                                <a class="btn btn-outline-primary rounded-pill fw-semibold btn-sm" href="#"
                                    aria-label="View all programmes">
                                    View all <i class="bi bi-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>

                            <!-- ✅ Group 1: Regular -->
                            <div class="acad-group mt-3" aria-label="Regular programmes">
                                <div class="acad-group-title">
                                    <span class="dot" aria-hidden="true"></span>
                                    Regular Programmes
                                </div>
                                <div class="d-flex flex-wrap gap-2 mt-2">
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Doctoral Programmes (PhD)">Doctoral Programmes (PhD)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Post Graduate Programme (PGP)">Post Graduate Programme (PGP)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="PGP in Finance (PGP-Finance)">PGP in Finance (PGP-Finance)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="PGP Liberal Studies &amp; Management (PGP-LSM)">PGP Liberal Studies
                                        &amp; Management (PGP-LSM)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="PGP in Business Leadership (PGP-BL)">PGP in Business Leadership
                                        (PGP-BL)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Bachelor of Management Studies (BMS)">Bachelor of Management Studies
                                        (BMS)</a>
                                </div>
                            </div>

                            <!-- ✅ Group 2: Executive -->
                            <div class="acad-group mt-4" aria-label="Executive programmes">
                                <div class="acad-group-title">
                                    <span class="dot" aria-hidden="true"></span>
                                    Executive Programmes
                                </div>
                                <div class="d-flex flex-wrap gap-2 mt-2">
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Doctoral Programmes (PhD)">Doctoral Programmes (PhD)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="MBA for Working Executives (IL - Kozhikode)">MBA for Working
                                        Executives (IL - Kozhikode)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="MBA for Working Executives (Kochi Campus)">MBA for Working
                                        Executives (Kochi Campus)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Diploma in Management">Diploma in Management</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Management Development Programme (MDP)">Management Development
                                        Programme (MDP)</a>
                                    <a class="badge badge-soft rounded-pill text-decoration-none py-2 px-3" href="#"
                                        aria-label="Faculty Development Programme (FDP)">Faculty Development Programme
                                        (FDP)</a>
                                </div>
                            </div>

                            <style>
                                /* Small, clean group headings */
                                .acad-group-title {
                                    font-weight: 900;
                                    color: var(--brand-blue-900);
                                    display: flex;
                                    align-items: center;
                                    gap: .5rem;
                                    letter-spacing: -.2px;
                                }

                                .acad-group-title .dot {
                                    width: 10px;
                                    height: 10px;
                                    border-radius: 999px;
                                    background: var(--brand-blue-600);
                                    box-shadow: 0 0 0 .25rem rgba(42, 102, 199, .12);
                                }
                            </style>
                        </div>

                        <!-- RIGHT (Image) -->
                        <div class="col-lg-6 academics-media">
                            <div class="academics-media-inner">
                                <img alt="IIM Kozhikode campus aerial view" src="assets/images/drone.jpg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Research + Stats -->
        <section id="research" class="section stats-band" aria-labelledby="researchTitle">
            <div class="container">
                <div class="mb-4">
                    <h2 class="section-title mb-2" id="researchTitle">In Numbers</h2>
                    <p class="section-subtitle mb-0">We lead the way in management education and research.</p>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-lg-2">
                        <div class="metric">
                            <div class="num h3 mb-1">6,699</div>
                            <div class="lbl">Inventions</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="metric">
                            <div class="num h3 mb-1">3,029</div>
                            <div class="lbl">Patents</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="metric">
                            <div class="num h3 mb-1">400+</div>
                            <div class="lbl">Startups</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="metric">
                            <div class="num h3 mb-1">350k+</div>
                            <div class="lbl">Jobs created</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="metric">
                            <div class="num h3 mb-1">$94B</div>
                            <div class="lbl">Private investment</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="metric">
                            <div class="num h3 mb-1">$11T+</div>
                            <div class="lbl">Market value</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a class="btn btn-outline-primary rounded-pill fw-semibold" href="#"
                        aria-label="More about research">
                        More about research <i class="bi bi-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Profile Callout -->
        <section class="section pt-10 stats-band" aria-labelledby="profileTitle">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="card card-soft p-4 p-lg-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <!-- <div class="brand-mark" aria-hidden="true"></div> -->
                                <div>
                                    <div class="text-secondary fw-semibold" id="profileTitle">About Indian Institute of
                                        Management Kozhikode</div>
                                    <p class="h4 fw-bold mb-0">The institute was set up in 1996 by the Government of
                                        India in collaboration with the State Government of Kerala.</p>
                                </div>
                            </div>
                            <p class="text-secondary mb-4">
                                Spread over about 112.5 acres of land, the Indian Institute of Management Kozhikode, is
                                situated on two hillocks in the Kunnamangalam Area of ancient city of Calicut in Kerala.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <a class="btn btn-outline-primary rounded-pill fw-semibold" href="#"
                                    aria-label="Read more profile">Read more</a>
                                <!-- <a class="btn btn-outline-secondary rounded-pill fw-semibold" href="#" aria-label="View all profiles">All profiles</a> -->
                            </div>
                            <div class="mt-3 social-strip">
                                <a href="#" class="text-secondary me-3" aria-label="Follow on Twitter"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="text-secondary me-3" aria-label="Follow on Facebook"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="text-secondary me-3" aria-label="Follow on Instagram"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="text-secondary" aria-label="Follow on LinkedIn"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card card-soft overflow-hidden">
                            <img alt="A group discussion representing an institute profile feature"
                                src="assets/images/amphi.jpg" style="height: 360px; width:100%; object-fit:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Campus Life -->
        <section id="campus" class="section" aria-labelledby="campusTitle">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h2 class="section-title mb-2" id="campusTitle">Campus Life</h2>
                        <p class="section-subtitle mb-4">
                            Housing, student organizations, dialogue, and wellness.
                        </p>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="metric">
                                    <h3 class="h6 fw-bold mb-1">Student Life</h3>
                                    <div class="lbl">Residential campus, dining, and student organizations.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="metric">
                                    <h3 class="h6 fw-bold mb-1">Constructive Dialogue</h3>
                                    <div class="lbl">Academic freedom, inclusion, and exchange of ideas.</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="metric">
                                    <h3 class="h6 fw-bold mb-1">Recreation &amp; Wellness</h3>
                                    <div class="lbl">Facilities and programming to encourage movement and play.</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a class="btn btn-outline-primary rounded-pill fw-semibold" href="#"
                                aria-label="More about campus life">
                                More about campus life <i class="bi bi-arrow-right ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card card-soft overflow-hidden">
                            <img alt="Campus building and surroundings" src="assets/images/campuslife.jpg"
                                style="height: 440px; width:100%; object-fit:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- The Arts + Events -->
        <section class="section pt-0" aria-label="Arts and Events">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card card-soft h-100 p-4 p-lg-5">
                            <h2 class="section-title mb-2">LinkedIn Feed</h2>
                            <p class="section-subtitle mb-4">Accessible content blocks with clear headings and short
                                summaries.</p>

                            <div class="metric mb-3">
                                <h3 class="h6 fw-bold mb-1">FT Global MBA Rankings 2026</h3>
                                <div class="lbl">IIM Kozhikode rises to #65 in FT Global MBA Rankings 2026 (from #86 in
                                    2025) — a 21-place jump!
                                </div>
                            </div>
                            <div class="metric mb-3">
                                <h3 class="h6 fw-bold mb-1">Harshini Watada (PGP 28) has emerged as the National Winner
                                </h3>
                                <div class="lbl">We are delighted to share that Harshini Watada (PGP 28) has emerged as
                                    the National Winner at the AWL Resolve x @BSmart B-School Challenge</div>
                            </div>
                            <div class="metric">
                                <h3 class="h6 fw-bold mb-1">EPGP alumnus Sankalp Pani has chosen the higher path</h3>
                                <div class="lbl"> — from earning to giving — through a generous contribution to the LIVE
                                    Centre, nurturing the entrepreneurial spirit of IIMK. </div>
                            </div>

                            <div class="mt-4">
                                <a class="btn btn-outline-primary rounded-pill fw-semibold" href="#"
                                    aria-label="More about the arts">
                                    More about the arts <i class="bi bi-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" id="events">
                        <div class="card card-soft h-100 p-4 p-lg-5">
                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between mb-2">
                                <h2 class="section-title mb-0" id="eventsTitle">Upcoming Events</h2>
                                <a class="fw-semibold text-decoration-none" href="#" aria-label="More events">
                                    More events <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                            <p class="section-subtitle mb-4">List includes date, title, and location.</p>

                            <div class="list-group list-group-flush" aria-labelledby="eventsTitle">
                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-label="Event on March 27: India Labour Conference 2026 (3rd edition)">
                                    <div class="text-center" style="min-width: 54px;" aria-hidden="true">
                                        <div class="fw-bold text-uppercase small text-secondary">Mar</div>
                                        <div class="h4 mb-0 fw-black" style="color:var(--brand-blue-900);">27</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">India Labour Conference 2026 (3rd edition)</div>
                                        <div class="text-secondary small">10:30 AM • IIMK</div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-label="Event on December 08: MathSport Asia 2026">
                                    <div class="text-center" style="min-width: 54px;" aria-hidden="true">
                                        <div class="fw-bold text-uppercase small text-secondary">Dec</div>
                                        <div class="h4 mb-0 fw-black" style="color:var(--brand-blue-900);">08</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">MathSport Asia 2026</div>
                                        <div class="text-secondary small">10:30 AM • IIMK</div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-label="Event on February 18: Visiting Writer Reading and Discussion at Faculty Club">
                                    <div class="text-center" style="min-width: 54px;" aria-hidden="true">
                                        <div class="fw-bold text-uppercase small text-secondary">Feb</div>
                                        <div class="h4 mb-0 fw-black" style="color:var(--brand-blue-900);">18</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">Visiting Writer Reading &amp; Discussion</div>
                                        <div class="text-secondary small">8:00 PM • Faculty Club</div>
                                    </div>
                                </a>
                            </div>

                            <div class="mt-4">
                                <a class="btn btn-outline-primary rounded-pill fw-semibold" href="#"
                                    aria-label="View full events calendar">
                                    View full calendar <i class="bi bi-calendar3 ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Admission -->
        <section id="admission" class="section pt-0" aria-labelledby="admissionTitle">
            <div class="container">
                <div class="card card-soft p-4 p-lg-5">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-8">
                            <h2 class="section-title mb-2" id="admissionTitle">Admission</h2>
                            <p class="section-subtitle mb-3">
                                Clear promise and decisive facts with a primary call-to-action.
                            </p>
                            <ul class="mb-0 text-secondary">
                                <li>Explore programs and eligibility.</li>
                                <li>Review scholarships and financial aid.</li>
                                <li>Check deadlines and application steps.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="btn btn-brand text-white rounded-pill fw-bold px-4 py-3" href="#"
                                aria-label="Apply now">
                                Apply now <i class="bi bi-arrow-right ms-1" aria-hidden="true"></i>
                            </a>
                            <div class="mt-2 small text-secondary">Undergraduate • Graduate • Financial Aid</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>

    <!-- Footer (GIGW essentials: privacy, terms, accessibility statement, last updated, copyright, visitor count) -->
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <img src="https://iimk.ac.in/centres/cerls/assets/img/about/IIM_Kozhikode_Logo.png" style="
    width: 40%;
">

                    </div>
                    <div class="h5 mb-0 fw-bold"><br>
                        <h5>IIM Kozhikode</h5>
                    </div>
                    <div class="text-white-50">
                        Kunnamangalam, Kozhikode, Kerala, India
                    </div>

                    <div class="social mt-3" aria-label="Social media (official links)">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook" aria-hidden="true"></i></a>
                        <a href="#" aria-label="X"><i class="bi bi-twitter-x" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin" aria-hidden="true"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-6 col-md-4">
                            <div class="fw-bold mb-2">Quick links</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="about.html">About</a></li>
                                <li class="mb-1"><a href="infrastructure.html">Careers</a></li>
                                <li class="mb-1"><a href="centres.html">Tenders</a></li>
                                <li class="mb-1"><a href="faculty.html">Purchase Rules</a></li>
                                <li class="mb-1"><a href="#">MoE</a></li>
                                <li class="mb-1"><a href="#">RTI</a></li>
                                <li class="mb-1"><a href="#">NIRF</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="fw-bold mb-2">Resources</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#sitemap">Sitemap</a></li>
                                <li class="mb-1"><a href="#screen-reader">Screen Reader Access</a></li>
                                <li class="mb-1"><a href="#" aria-label="Accessibility statement">Accessibility
                                        Statement</a></li>
                                <li class="mb-1"><a href="#contact">Contact &amp; Feedback</a></li>
                                <li class="mb-1"><a href="#events">Events</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="fw-bold mb-2">Policies</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#" aria-label="Privacy policy">Privacy Policy</a></li>
                                <li class="mb-1"><a href="#" aria-label="Terms and conditions">Terms &amp;
                                        Conditions</a></li>
                                <li class="mb-1"><a href="#" aria-label="Copyright policy">Copyright Policy</a></li>
                                <li class="mb-1"><a href="#" aria-label="Hyperlinking policy">Hyperlinking Policy</a>
                                </li>
                                <li class="mb-1"><a href="#emergency" aria-label="Emergency information">Emergency
                                        Info</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-4 text-white-50 small">
                        Content owned, maintained and updated by <strong>Indian Institute of Management
                            Kozhikode</strong>.
                        <br>
                        Designed, developed and hosted by: <span class="text-white">CCI</span>.
                    </div>
                </div>
            </div>

            <div class="footer-divider d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <div class="text-white-50 small">
                    © <span id="year">2026</span> IIM Kozhikode. All rights reserved. &nbsp;|&nbsp;
                    Last Updated: <span id="lastUpdated">05 March 2026</span> &nbsp;|&nbsp;
                    Visitors: <span id="visitorCount" aria-label="Visitor counter">000000</span>
                </div>
                <div class="small">
                    <a class="me-3" href="#" aria-label="Help">Help</a>
                    <a class="me-3" href="#contact" aria-label="Feedback">Feedback</a>
                    <a class="me-3" href="#sitemap" aria-label="Sitemap">Sitemap</a>
                    <a href="#" aria-label="Website policies">Policies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: var(--radius); overflow:hidden;">
                <div class="modal-header border-0" style="background: var(--brand-silver-100);">
                    <h2 class="modal-title h5 fw-bold mb-0">Search</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="#" method="get" role="search" aria-label="Site search">
                        <label class="form-label fw-semibold" for="q">Search this site</label>
                        <div class="input-group">
                            <span class="input-group-text" aria-hidden="true"><i class="bi bi-search"></i></span>
                            <input id="q" name="q" class="form-control" type="search" placeholder="Type keywords…"
                                aria-label="Search query">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                        <div class="small text-secondary mt-2">
                            For production: connect to your official site search and ensure results are accessible.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Video Modal (no autoplay; user controls) -->
    <div class="modal fade" id="heroVideoModal" tabindex="-1" aria-hidden="true" aria-label="Campus video dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius: var(--radius); overflow:hidden;">
                <div class="modal-header border-0" style="background: var(--brand-silver-100);">
                    <h2 class="modal-title h5 fw-bold mb-0">Campus Video</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close video"></button>
                </div>
                <div class="modal-body p-0">
                    <video id="heroVideo" controls="" preload="metadata" style="width:100%; height:auto;">
                        <source src="https://iimk.ac.in/uploads/banner/1297927311_2020-11-10_04-44-07.mp4"
                            type="video/mp4">
                        <!-- Add captions in production (recommended) -->
                        <!-- <track kind="captions" src="captions-en.vtt" srclang="en" label="English captions" default> -->
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <p class="small text-secondary mb-0">
                        For full accessibility, provide captions and (if required) audio description for video content.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <noscript>
        <div class="container my-3">
            <div class="alert alert-warning" role="alert">
                JavaScript is disabled. Some features (search dialog, menu, accessibility controls) may not work.
                Core content and navigation remain available.
            </div>
        </div>
    </noscript>

    <script>
        // Footer year
        document.getElementById("year").textContent = new Date().getFullYear();
        // ALSO wire up the mobile buttons (same behavior)
        const dec_m = document.getElementById("txtDec_m");
        const reset_m = document.getElementById("txtReset_m");
        const inc_m = document.getElementById("txtInc_m");
        const contrast_m = document.getElementById("contrastToggle_m");

        if (dec_m) dec_m.addEventListener("click", () => dec?.click());
        if (reset_m) reset_m.addEventListener("click", () => reset?.click());
        if (inc_m) inc_m.addEventListener("click", () => inc?.click());
        if (contrast_m) contrast_m.addEventListener("click", () => contrast?.click());
        // Mobile menu: Search toggle + close on link click
        (function () {
            const offcanvasEl = document.getElementById('mobileMenu');
            const bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);

            const searchToggle = document.getElementById('mobileSearchToggle');
            const searchPanel = document.getElementById('mobileSearchPanel');
            const bsCollapse = bootstrap.Collapse.getOrCreateInstance(searchPanel, { toggle: false });

            if (searchToggle) {
                searchToggle.addEventListener('click', function () {
                    const expanded = searchToggle.getAttribute('aria-expanded') === 'true';
                    if (expanded) {
                        bsCollapse.hide();
                        searchToggle.setAttribute('aria-expanded', 'false');
                    } else {
                        bsCollapse.show();
                        searchToggle.setAttribute('aria-expanded', 'true');
                        setTimeout(() => {
                            const input = document.getElementById('mobileQ');
                            if (input) input.focus();
                        }, 180);
                    }
                });
            }

            document.querySelectorAll('[data-close-menu]').forEach((a) => {
                a.addEventListener('click', () => bsOffcanvas.hide());
            });

            offcanvasEl.addEventListener('hidden.bs.offcanvas', () => {
                bsCollapse.hide();
                if (searchToggle) searchToggle.setAttribute('aria-expanded', 'false');
            });
        })();

        // Accessibility toolbar: text size + high contrast (persist in localStorage)
        (function () {
            const root = document.documentElement;
            const KEY_TEXT = "a11y_text";
            const KEY_CONTRAST = "a11y_contrast";
            const textOrder = ["sm", "md", "lg", "xl"];

            function setText(size) {
                root.setAttribute("data-text", size);
                localStorage.setItem(KEY_TEXT, size);
            }
            function setContrast(mode) {
                root.setAttribute("data-contrast", mode);
                localStorage.setItem(KEY_CONTRAST, mode);
                const btn = document.getElementById("contrastToggle");
                if (btn) btn.setAttribute("aria-pressed", mode === "high" ? "true" : "false");
            }

            // Restore
            const savedText = localStorage.getItem(KEY_TEXT) || "md";
            const savedContrast = localStorage.getItem(KEY_CONTRAST) || "normal";
            setText(savedText);
            setContrast(savedContrast);

            // Buttons
            const dec = document.getElementById("txtDec");
            const reset = document.getElementById("txtReset");
            const inc = document.getElementById("txtInc");
            const contrast = document.getElementById("contrastToggle");

            if (dec) dec.addEventListener("click", () => {
                const cur = root.getAttribute("data-text") || "md";
                const idx = Math.max(0, textOrder.indexOf(cur) - 1);
                setText(textOrder[idx]);
            });
            if (inc) inc.addEventListener("click", () => {
                const cur = root.getAttribute("data-text") || "md";
                const idx = Math.min(textOrder.length - 1, textOrder.indexOf(cur) + 1);
                setText(textOrder[idx]);
            });
            if (reset) reset.addEventListener("click", () => setText("md"));
            if (contrast) contrast.addEventListener("click", () => {
                const cur = root.getAttribute("data-contrast") || "normal";
                setContrast(cur === "high" ? "normal" : "high");
            });
        })();

        // Video modal: pause video when closed (prevents background playback)
        (function () {
            const modalEl = document.getElementById("heroVideoModal");
            const vid = document.getElementById("heroVideo");
            if (!modalEl || !vid) return;
            modalEl.addEventListener("hidden.bs.modal", () => {
                vid.pause();
                try { vid.currentTime = 0; } catch (e) { }
            });
        })();

        // Optional: basic visitor counter placeholder (replace with server-side counter)
        (function () {
            const el = document.getElementById("visitorCount");
            if (!el) return;
            // Keep as placeholder unless replaced by backend logic:
            // el.textContent = "000000";
        })();
    </script>
    <script>
        /* ✅ Desktop: click-to-open mega menu + close on outside click + ESC */
        (function () {
            const megaItems = document.querySelectorAll('.nav-item.mega');

            function closeAll(except) {
                megaItems.forEach(item => {
                    if (item !== except) {
                        item.classList.remove('open');
                        const btn = item.querySelector('.mega-toggle');
                        if (btn) btn.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            megaItems.forEach(item => {
                const btn = item.querySelector('.mega-toggle');
                const menu = item.querySelector('.mega-menu');
                if (!btn || !menu) return;

                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const isOpen = item.classList.contains('open');
                    closeAll(item);
                    item.classList.toggle('open', !isOpen);
                    btn.setAttribute('aria-expanded', String(!isOpen));
                });

                // keep clicks inside menu from closing
                menu.addEventListener('click', (e) => e.stopPropagation());
            });

            // outside click closes
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.nav-item.mega')) closeAll();
            });

            // ESC closes
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeAll();
            });
        })();
    </script>
    <script>
        /* ✅ Infinite multi-card loop for Bootstrap 5 carousel
           - Shows 3 cards/slide on lg+, 2 on md, 1 on sm
           - Keeps looping even with 4 items (or any N)
           - Builds slides dynamically (no manual duplicate slides needed)
        */
        (function () {
            const carouselEl = document.getElementById('announcementsCarouselLoop');
            if (!carouselEl) return;

            const inner = carouselEl.querySelector('.carousel-inner');
            const indicators = carouselEl.querySelector('.carousel-indicators');
            const baseSlide = inner.querySelector('.carousel-item');
            const items = Array.from(baseSlide.querySelectorAll('.ann-item'));

            if (items.length === 0) return;

            // helper: how many cards per slide based on current width
            function perSlide() {
                const w = window.innerWidth;
                if (w >= 992) return 3;      // lg+
                if (w >= 768) return 2;      // md
                return 1;                   // sm
            }

            // Build slides: count = number of items (so loop feels natural)
            function build() {
                const k = perSlide();

                // clear
                inner.innerHTML = '';
                if (indicators) indicators.innerHTML = '';

                // create N slides, each slide shows k consecutive items (wrap-around)
                const N = items.length;

                for (let s = 0; s < N; s++) {
                    const slide = document.createElement('div');
                    slide.className = 'carousel-item' + (s === 0 ? ' active' : '');
                    const row = document.createElement('div');
                    row.className = 'row g-4 w-100 mx-0';

                    for (let j = 0; j < k; j++) {
                        const idx = (s + j) % N;
                        // clone card column
                        row.appendChild(items[idx].cloneNode(true));
                    }

                    slide.appendChild(row);
                    inner.appendChild(slide);

                    // indicators
                    if (indicators) {
                        const b = document.createElement('button');
                        b.type = 'button';
                        b.setAttribute('data-bs-target', '#announcementsCarouselLoop');
                        b.setAttribute('data-bs-slide-to', String(s));
                        b.setAttribute('aria-label', 'Slide ' + (s + 1));
                        if (s === 0) {
                            b.className = 'active';
                            b.setAttribute('aria-current', 'true');
                        }
                        indicators.appendChild(b);
                    }
                }
            }

            // Initial build
            build();

            // Rebuild on resize breakpoint changes (debounced)
            let t;
            window.addEventListener('resize', function () {
                clearTimeout(t);
                t = setTimeout(() => {
                    // keep current index if possible
                    const activeIndex = Array.from(inner.querySelectorAll('.carousel-item'))
                        .findIndex(x => x.classList.contains('active'));
                    build();

                    // re-init carousel and restore index
                    const bs = bootstrap.Carousel.getInstance(carouselEl) || new bootstrap.Carousel(carouselEl);
                    const idx = Math.max(0, activeIndex);
                    bs.to(idx);
                }, 160);
            });
        })();
    </script>

</body>

</html>
