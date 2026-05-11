<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profile</title>
    <style>
        :root {
            --primary: #0f4c81;
            --primary-dark: #0a3559;
            --accent: #b98a2f;
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #dbe3ec;
            --soft: #eef4f9;
            --shadow: 0 10px 28px rgba(15, 23, 42, 0.08);
            --radius: 18px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        a {
            color: var(--primary);
            text-decoration: none;
        }

        .top-strip {
            background: var(--primary-dark);
            color: #fff;
            font-size: 0.86rem;
        }

        .top-strip .inner,
        .site-header .inner,
        .navbar .inner,
        .container,
        .page-hero .inner {
            max-width: 1240px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .top-strip .inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            padding-top: 8px;
            padding-bottom: 8px;
            flex-wrap: wrap;
        }

        .inline-links {
            display: flex;
            gap: 14px;
            align-items: center;
            flex-wrap: wrap;
        }

        .site-header {
            background: #fff;
            border-bottom: 1px solid var(--border);
        }

        .site-header .inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding-top: 16px;
            padding-bottom: 16px;
            flex-wrap: wrap;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-mark {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: #fff;
            display: grid;
            place-items: center;
            font-weight: 700;
            box-shadow: var(--shadow);
        }

        .brand-text h1 {
            margin: 0;
            font-size: 1.05rem;
            font-weight: 700;
            line-height: 1.35;
            color: var(--primary-dark);
        }

        .brand-text p {
            margin: 4px 0 0;
            font-size: 0.88rem;
            color: var(--muted);
        }

        .header-chip {
            border: 1px solid var(--border);
            border-radius: 999px;
            padding: 10px 14px;
            background: #fff;
            color: var(--primary-dark);
            font-size: 0.88rem;
            font-weight: 500;
        }

        .navbar {
            background: var(--primary);
            color: #fff;
        }

        .navbar .inner {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .navbar nav {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
        }

        .navbar a {
            color: #fff;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .page-hero {
            background: linear-gradient(135deg, #edf4fb, #f8fbfd);
            border-bottom: 1px solid var(--border);
        }

        .page-hero .inner {
            padding-top: 26px;
            padding-bottom: 26px;
        }

        .breadcrumb {
            font-size: 0.9rem;
            color: #5f6f82;
            margin-bottom: 8px;
        }

        .page-hero h2 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1.3;
            color: var(--primary-dark);
        }

        .container {
            padding-top: 28px;
            padding-bottom: 48px;
        }

        .profile-layout {
            display: grid;
            grid-template-columns: 320px minmax(0, 1fr);
            gap: 24px;
            align-items: start;
        }

        .sidebar {
            position: sticky;
            top: 20px;
            display: grid;
            gap: 18px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .profile-card {
            padding: 22px;
            text-align: center;
        }

        .profile-photo {
            width: 180px;
            height: 180px;
            margin: 0 auto 16px;
            border-radius: 24px;
            object-fit: cover;
            display: block;
            background: #dde8f3;
            border: 4px solid #eef5fb;
        }

        .profile-card h3 {
            margin: 0;
            font-size: 1.3rem;
            line-height: 1.35;
            color: var(--primary-dark);
        }

        .designation {
            margin: 8px 0 0;
            color: var(--muted);
            font-size: 0.96rem;
            line-height: 1.55;
        }

        .area-tag {
            display: inline-block;
            margin-top: 14px;
            padding: 7px 12px;
            border-radius: 999px;
            background: var(--soft);
            color: var(--primary);
            font-size: 0.84rem;
            font-weight: 700;
        }

        .contact-card,
        .quick-nav {
            padding: 20px;
        }

        .side-title {
            margin: 0 0 14px;
            font-size: 1rem;
            color: var(--primary-dark);
        }

        .contact-list,
        .nav-list,
        .timeline-list,
        .content-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-list li,
        .nav-list li {
            padding: 10px 0;
            border-bottom: 1px solid #edf2f7;
            font-size: 0.94rem;
            line-height: 1.6;
        }

        .contact-list li:last-child,
        .nav-list li:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .nav-list a {
            display: block;
            color: var(--text);
            font-weight: 500;
        }

        .main-content {
            display: grid;
            gap: 22px;
        }

        .intro-card {
            padding: 24px;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin-top: 18px;
        }

        .mini-panel {
            background: #fbfcfe;
            border: 1px solid #ebf0f5;
            border-radius: 16px;
            padding: 16px;
        }

        .mini-panel h4 {
            margin: 0 0 10px;
            font-size: 0.98rem;
            color: var(--primary-dark);
        }

        .intro-text {
            margin: 0;
            color: var(--muted);
            font-size: 0.96rem;
            line-height: 1.8;
        }

        .section-card {
            padding: 24px;
            scroll-margin-top: 24px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 1px solid #edf2f7;
        }

        .section-header h3 {
            margin: 0;
            font-size: 1.22rem;
            color: var(--primary-dark);
        }

        .section-note {
            font-size: 0.86rem;
            color: var(--muted);
            background: #f7fafc;
            border: 1px solid #edf2f7;
            border-radius: 999px;
            padding: 6px 12px;
            white-space: nowrap;
        }

        .subsection {
            margin-bottom: 20px;
        }

        .subsection:last-child {
            margin-bottom: 0;
        }

        .subsection h4 {
            margin: 0 0 12px;
            font-size: 1rem;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .subsection h3::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            display: inline-block;
            flex-shrink: 0;
            margin-right: 10px;
        }

        .content-list li,
        .timeline-list li {
            position: relative;
            padding: 0 0 14px 20px;
            color: var(--muted);
            font-size: 0.95rem;
            line-height: 1.75;
        }

        /* SECTION HEADING (orange bullet style) */
        .section-heading {
            position: relative;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 10px;
            padding-left: 18px;
            color: #1f2d3d;
        }

        .section-heading::before {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            width: 8px;
            height: 8px;
            background-color: #d97706;
            /* orange */
            border-radius: 50%;
        }

        /* CONTENT LIST */
        .content-list {
            list-style: none;
            padding-left: 20px;
        }

        /* CONTENT ITEMS (blue bullets) */
        .content-item {
            position: relative;
            margin-bottom: 10px;
            padding-left: 18px;
            color: #4b5563;
        }

        .content-item::before {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            width: 6px;
            height: 6px;
            background-color: #1d4ed8;
            /* blue */
            border-radius: 50%;
        }

        .content-list li::before,
        .timeline-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 10px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary);
        }

        .content-list li strong,
        .timeline-list li strong {
            color: var(--text);
        }

        .education-box {
            background: linear-gradient(135deg, #f8fbfe, #ffffff);
            border: 1px solid #e6edf4;
            border-radius: 16px;
            padding: 18px;
        }

        .education-box h4 {
            margin: 0 0 8px;
            font-size: 1rem;
            color: var(--primary-dark);
        }

        .education-box p {
            margin: 0;
            color: var(--muted);
            line-height: 1.75;
            font-size: 0.95rem;
        }

        .footer-note {
            text-align: center;
            color: var(--muted);
            font-size: 0.9rem;
            padding-top: 14px;
        }

        .iimk-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .iimk-logo img {
            height: 76px;
            /* desktop logo height */
            width: auto;
        }

        @media (max-width: 980px) {
            .profile-layout {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }
        }

        @media (max-width: 700px) {
            .intro-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-card {
                padding: 18px;
            }

            .profile-photo {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>

<body>

    @php
        use Illuminate\Support\Str;

        $locale = app()->getLocale();

        $grouped = $faculty->contents
            ->sortBy('section.order')
            ->groupBy(fn ($item) =>
                $item->section->tab->name[$locale] ?? 'General'
            );
    @endphp

    <!-- TOP STRIP -->
    <div class="top-strip">

        <div class="inner">

            <div class="inline-links">
                <span>IN</span>
                <span>{{ __('messages.government_of_india') }}</span>
            </div>

            <div class="inline-links">

                <a href="#">
                    {{ __('messages.screen_reader_access') }}
                </a>

                <a href="#">A</a>
                <a href="#">A+</a>

                <a href="#">
                    {{ __('messages.high_contrast') }}
                </a>

            </div>

        </div>

    </div>

    <!-- HEADER -->
    <header class="site-header">

        <div class="inner">

            <div class="brand">

                <div class="iimk-logo">

                    <img
                        src="https://iimk.ac.in/images/logo2.png"
                        alt="IIM Kozhikode Logo">

                </div>

            </div>

            <div class="inline-links">

                <div class="header-chip">
                    {{ __('messages.search_the_website') }}
                </div>

                <div class="header-chip">

                    <a
                        class="utility-pill"
                        href="/lang/en">

                        English

                    </a>

                    |

                    <a
                        class="utility-pill"
                        href="/lang/hi"
                        lang="hi">

                        हिन्दी

                    </a>

                </div>

            </div>

        </div>

    </header>

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="inner">

            <nav>

                <a href="#">
                    {{ __('messages.home') }}
                </a>

                <a href="#">
                    {{ __('messages.about') }}
                </a>

                <a href="#">
                    {{ __('messages.faculty') }}
                </a>

                <a href="#">
                    {{ __('messages.research') }}
                </a>

                <a href="#">
                    {{ __('messages.programmes') }}
                </a>

                <a href="#">
                    {{ __('messages.contact') }}
                </a>

            </nav>

        </div>

    </div>

    <!-- HERO -->
    <section class="page-hero">

        <div class="inner">

            <div class="breadcrumb">

                {{ __('messages.home') }}

                /

                {{ __('messages.faculty') }}

                /

                {{ __('messages.profile') }}

            </div>

            <h2>
                {{ $faculty->name[$locale] ?? '' }}
            </h2>

        </div>

    </section>

    <!-- MAIN -->
    <main class="container">

        <div class="profile-layout">

            <!-- SIDEBAR -->
            <aside class="sidebar">

                <!-- PROFILE CARD -->
                <section class="card profile-card">

                    <img
                        class="profile-photo"
                        src="{{ asset('storage/' . $faculty->photo) }}"
                        alt="Faculty photo">

                    <h3>
                        {{ $faculty->name[$locale] ?? '' }}
                    </h3>

                    <p class="designation">

                        {{ $faculty->designation[$locale] ?? '' }}

                        <br>

                        {{ $faculty->area[$locale] ?? '' }}

                    </p>

                    @if($faculty->profile_url)

                        <a
                            href="{{ $faculty->profile_url }}"
                            target="_blank"
                            class="area-tag">

                            {{ __('messages.profile_link') }}

                        </a>

                    @endif

                </section>

                <!-- CONTACT -->
                <section class="card contact-card">

                    <h4 class="side-title">
                        {{ __('messages.contact_information') }}
                    </h4>

                    <ul class="contact-list">

                        @if($faculty->email)

                            <li>

                                <strong>
                                    {{ __('messages.email') }}:
                                </strong>

                                {{ $faculty->email }}

                            </li>

                        @endif

                        @if($faculty->phone)

                            <li>

                                <strong>
                                    {{ __('messages.phone') }}:
                                </strong>

                                {{ $faculty->phone }}

                            </li>

                        @endif

                        @if(!empty($faculty->office[$locale]))

                            <li>

                                <strong>
                                    {{ __('messages.office') }}:
                                </strong>

                                {{ $faculty->office[$locale] }}

                            </li>

                        @endif

                        @if(!empty($faculty->highest_education[$locale]))

                            <li>

                                <strong>
                                    {{ __('messages.highest_education') }}:
                                </strong>

                                {{ strip_tags($faculty->highest_education[$locale]) }}

                            </li>

                        @endif

                    </ul>

                </section>

                <!-- QUICK NAV -->
                <section class="card quick-nav">

                    <h4 class="side-title">
                        {{ __('messages.quick_navigation') }}
                    </h4>

                    <ul class="nav-list">

                        <li>

                            <a href="#overview">
                                {{ __('messages.profile_overview') }}
                            </a>

                        </li>

                        @foreach($grouped as $tabName => $items)

                            <li>

                                <a href="#{{ Str::slug(Str::ascii($tabName)) }}">

                                    {{ $tabName }}

                                </a>

                            </li>

                        @endforeach

                    </ul>

                </section>

            </aside>

            <!-- MAIN CONTENT -->
            <section class="main-content">

                <!-- OVERVIEW -->
                <article class="card intro-card" id="overview">

                    <div class="section-header">

                        <h3>
                            {{ __('messages.profile_overview') }}
                        </h3>

                        <span class="section-note">
                            {{ __('messages.faculty_summary') }}
                        </span>

                    </div>

                    @if(!empty($faculty->bio[$locale]))

                        <div class="intro-text">

                            {!! $faculty->bio[$locale] !!}

                        </div>

                    @endif

                    @if(!empty($faculty->qualification[$locale]))

                        <div class="education-box">

                            <h4>
                                {{ __('messages.highest_education_details') }}
                            </h4>

                            <p>
                                {!! $faculty->qualification[$locale] !!}
                            </p>

                        </div>

                    @endif

                    <div class="intro-grid">

                        @if(!empty($faculty->experience[$locale]))

                            <div class="mini-panel">

                                <h4>
                                    {{ __('messages.experience_summary') }}
                                </h4>

                                <div class="intro-text">

                                    {!! $faculty->experience[$locale] !!}

                                </div>

                            </div>

                        @endif

                        @if(!empty($faculty->profile[$locale]))

                            <div class="mini-panel">

                                <h4>
                                    {{ __('messages.profile_highlights') }}
                                </h4>

                                <div class="intro-text">

                                    {!! $faculty->profile[$locale] !!}

                                </div>

                            </div>

                        @endif

                    </div>

                </article>

                <!-- DYNAMIC CONTENT -->
                @foreach($grouped as $tabName => $sections)

                    <article
                        class="card section-card"
                        id="{{ Str::slug(Str::ascii($tabName)) }}">

                        <div class="section-header">

                            <h2>
                                {{ $tabName }}
                            </h2>

                        </div>

                        @foreach(
                            $sections->groupBy(fn ($item) =>
                                $item->section->heading[$locale] ?? 'Section'
                            ) as $heading => $items
                        )

                            <div class="subsection">

                                <h3 class="subsection-title">
                                    {{ $heading }}
                                </h3>

                                <ul class="content-list">

                                    @foreach($items as $item)

                                        @php
                                            $rawContent = $item->content[$locale] ?? '';

                                            $content = preg_replace(
                                                '/<p[^>]*>/',
                                                '<li>',
                                                $rawContent
                                            );

                                            $content = str_replace(
                                                '</p>',
                                                '</li>',
                                                $content
                                            );
                                        @endphp

                                        {!! $content !!}

                                    @endforeach

                                </ul>

                            </div>

                        @endforeach

                    </article>

                @endforeach

            </section>

        </div>

    </main>

</body>

</html>
