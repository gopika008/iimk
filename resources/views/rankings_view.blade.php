<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Accreditation & Rankings | IIM Kozhikode')

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ url('/about') }}">About IIMK</a>
            <span class="mx-2">/</span>
            <span>Accreditation</span>
        </div>

        <h1 class="hero-title">Accreditation & Rankings</h1>
        <p class="hero-sub">
            National and international recognition of IIM Kozhikode�s academic excellence,
            global standing and institutional quality.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'accreditation'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'accreditation'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="accreditation-section">
                        <div class="section-kicker">Recognition</div>
                        <h2 class="section-heading">Rankings by Year</h2>

                        <p class="lead-copy">
                            IIM Kozhikode has consistently earned strong national and international rankings,
                            reflecting its academic quality, global reputation, executive education strength,
                            and excellence in management education.
                        </p>

                        <div class="ranking-highlight-grid">
                            <div class="ranking-highlight-card">
                                <span>NIRF 2025</span>
                                <strong>3<sup>rd</sup></strong>
                                <p>National Institutional Ranking Framework</p>
                            </div>

                            <div class="ranking-highlight-card">
                                <span>QS 2026</span>
                                <strong>78</strong>
                                <p>Business &amp; Management Studies</p>
                            </div>

                            <div class="ranking-highlight-card">
                                <span>FT MBA 2026</span>
                                <strong>=65</strong>
                                <p>Global MBA - PGP BL</p>
                            </div>

                            <div class="ranking-highlight-card">
                                <span>Eduniversal</span>
                                <strong>4</strong>
                                <p>Palmes of Excellence</p>
                            </div>
                        </div>

                        <div class="ranking-block mt-4 international-rankings-block">
    <div class="ranking-block-header">
        <div>
            <span class="ranking-badge">International</span>
            <h3>International Rankings</h3>
        </div>
        <p>Programme-wise global and Asia rankings from 2021 to 2026.</p>
    </div>
<div class="international-ranking-list">

    <?php foreach ($international as $row): ?>

        <?php

            $latestYear = max(array_keys($row['values']));

            $latestGlobal = $row['values'][$latestYear]['Global'] ?? '-';
            $latestAsia   = $row['values'][$latestYear]['Asia'] ?? '-';

            $latestLabel = $latestYear . ': ' . $latestGlobal;

            if ($latestAsia !== '-') {
                $latestLabel .= ' Global / ' . $latestAsia . ' Asia';
            } else {
                $latestLabel .= ' Global';
            }

            $type = 'International Ranking';

            if (stripos($row['programme_name'], 'QS') !== false) {
                $type = 'QS Ranking';
            }

            if (stripos($row['programme_name'], 'Financial Times') !== false) {
                $type = 'Financial Times';
            }

            if (stripos($row['programme_name'], 'Eduniversal') !== false) {
                $type = 'Eduniversal';
            }

        ?>

        <article class="intl-ranking-card">

            <div class="intl-ranking-card-head">

                <div>
                    <span class="intl-ranking-type">
                        <?= $type ?>
                    </span>

                    <h4>
                        <?= $row['programme_name'] ?>
                    </h4>
                </div>

                <span class="intl-latest-rank">
                    <?= $latestLabel ?>
                </span>

            </div>

            <div class="intl-year-grid">

                <?php foreach ($years as $year): ?>

                    <?php

                        $globalValue = $row['values'][$year]['Global'] ?? '-';
                        $asiaValue   = $row['values'][$year]['Asia'] ?? '-';

                        $isFeatured = ($year == $latestYear);

                        $isMuted = ($globalValue == '-' && $asiaValue == '-');

                    ?>

                    <div class="
                        intl-year-item
                        <?= $isFeatured ? 'featured' : '' ?>
                        <?= $isMuted ? 'muted' : '' ?>
                    ">

                        <span>
                            <?= $year ?>
                        </span>

                        <strong>
                            <?= $globalValue ?>
                        </strong>

                        <small>
                            Global
                        </small>

                        <em>
                            <?= $asiaValue != '-' ? $asiaValue . ' Asia' : '-' ?>
                        </em>

                    </div>

                <?php endforeach; ?>

            </div>

        </article>

    <?php endforeach; ?>

</div>
</div>

                        <div class="ranking-block mt-4">
                            <div class="ranking-block-header">
                                <div>
                                    <span class="ranking-badge ranking-badge-gold">National</span>
                                    <h3>National Rankings</h3>
                                </div>
                                <p>National ranking performance across leading Indian ranking frameworks.</p>
                            </div>

                            <div class="ranking-table-wrap">
                              <table class="ranking-table ranking-table-national">

    <thead>
        <tr>

            <th>Rankings</th>

            <?php foreach ($years as $year): ?>
                <th><?= $year ?></th>
            <?php endforeach; ?>

        </tr>
    </thead>

    <tbody>

        <?php foreach ($national as $row): ?>

            <tr>

                <td>
                    <?= $row['programme_name'] ?>
                </td>

                <?php foreach ($years as $year): ?>

                    <?php
                        $value = $row['values'][$year]['National'] ?? '-';
                    ?>

                    <td>

                        <?php if ($value !== '-'): ?>

                            <?php
                                $formattedValue = $value;

                                $formattedValue = str_replace(
                                    ['1st', '2nd', '3rd'],
                                    [
                                        '1<sup>st</sup>',
                                        '2<sup>nd</sup>',
                                        '3<sup>rd</sup>'
                                    ],
                                    $formattedValue
                                );

                                $formattedValue = preg_replace(
                                    '/(\d+)th/',
                                    '$1<sup>th</sup>',
                                    $formattedValue
                                );
                            ?>

                            <?php if (
                                isset($row['urls'][$year]['National']) &&
                                !empty($row['urls'][$year]['National'])
                            ): ?>

                                <a href="<?= $row['urls'][$year]['National'] ?>"
                                   target="_blank"
                                   rel="noopener">

                                    <?= $formattedValue ?>

                                </a>

                            <?php else: ?>

                                <?= $formattedValue ?>

                            <?php endif; ?>

                        <?php else: ?>

                            -

                        <?php endif; ?>

                    </td>

                <?php endforeach; ?>

            </tr>

        <?php endforeach; ?>

    </tbody>

</table>
                            </div>

                            <div class="ranking-note">
                                <p><strong>NP:</strong> Not Participated</p>
                                <p>
                                    <strong>NIRF submitted data:</strong>
                                    <a href="https://iimk.ac.in/NIRF" target="_blank" rel="noopener">
                                        https://iimk.ac.in/NIRF
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="ranking-glance-card mt-4">
                            <div class="ranking-glance-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div>
                                <span>Rankings at a Glance</span>
                                <h3>Secured the 3rd position in NIRF 2025</h3>
                                <p>
                                    Secured the 3rd position in NIRF 2025 for the third consecutive year marks
                                    the career-best ranking for IIM Kozhikode.
                                </p>
                            </div>
                        </div>

                        <div class="accreditation-block mt-4">
                            <div class="section-kicker">Accreditation</div>
                            <h2 class="section-heading">Global Accreditation Milestones</h2>

                            <div class="accreditation-card-grid">

                                <article class="accreditation-card">
                                    <div class="accreditation-card-icon">
                                        <i class="bi bi-award"></i>
                                    </div>

                                    <h3>AMBA Accreditation</h3>

                                    <ul>
                                        <li>
                                            The PGP &amp; EPGP of IIM Kozhikode have been accredited by the UK based
                                            Association of MBAs (AMBA) in 2010. It was then the first IIM to be accredited by AMBA.
                                        </li>
                                        <li>
                                            Re-accreditation was bagged during the years 2015, 2020 and 2023.
                                        </li>
                                        <li>
                                            Currently the programmes - PGP, PGP-BL, PGP-Finance, PGP-LSM,
                                            EPGP (IL Mode) &amp; EPGP on Kochi Campus are AMBA accredited.
                                        </li>
                                    </ul>
                                </article>

                                <article class="accreditation-card accreditation-card-featured">
                                    <div class="accreditation-card-icon">
                                        <i class="bi bi-globe2"></i>
                                    </div>

                                    <h3>EQUIS Accreditation</h3>

                                    <ul>
                                        <li>
                                            The EQUIS Accreditation Board voted to confer EQUIS Accreditation on
                                            IIM Kozhikode on 28th September 2021.
                                        </li>
                                        <li>
                                            IIMK is the fifth IIM to receive EQUIS Accreditation and only the sixth
                                            Management Institution in the country to bag the coveted accreditation.
                                        </li>
                                        <li>
                                            By acquiring EQUIS accreditation, the institute joined the �Double Crown�
                                            accreditation status, which is enjoyed only by a few institutions in India.
                                        </li>
                                        <li>
                                            The institute was successfully re-accredited in 2024 for a further five-year term,
                                            reflecting its commitment to continuous improvement and global standards in business education.
                                        </li>
                                    </ul>
                                </article>

                                <article class="accreditation-card">
                                    <div class="accreditation-card-icon">
                                        <i class="bi bi-patch-check"></i>
                                    </div>

                                    <h3>AACSB Membership</h3>

                                    <ul>
                                        <li>
                                            IIMK became AACSB member from January 2019.
                                        </li>
                                        <li>
                                            Submitted AACSB Third Progress Report in the month of December 2025.
                                        </li>
                                    </ul>
                                </article>

                            </div>
                        </div>

                    </section>

                </main>
=======
<html lang="en" style="height: 100%;">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-QX8FL4B8H4&amp;cx=c&amp;gtm=4e6581"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-37877991-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-37877991-4');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indian Institute of Management Kozhikode - IIMK</title>

    <meta name="keywords" content="Indian Institute of Management Kozhikode - IIMK">
    <meta name="description"
        content="The Indian Institute of Management Kozhikode is an autonomous business school located in Calicut, Kerala. The institute, set up in 1996 by the Government of India in collaboration with the State Government of Kerala, is one of the 20 Indian Institutes of Management">
    <link href="https://iimk.ac.in/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/ahr-styles.css" type="text/css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/animate.css" type="text/css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/ahr-responsive.css" type="text/css" rel="stylesheet">

    <link href="https://iimk.ac.in/css/right-menu.css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/scroll-menu.css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/side-menu.css" type="text/css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://iimk.ac.in/css/owl.carousel.css">
    <link rel="stylesheet" href="https://iimk.ac.in/css/owl.theme.css">
    <link rel="stylesheet" href="https://iimk.ac.in/css/ken-burns.css">
    <link href="https://iimk.ac.in/css/lightgallery.css" rel="stylesheet">
    <link href="https://iimk.ac.in/css/date-picker.css" rel="stylesheet" type="text/css">
    <style>
        .navbar-fixed-bottom,
        .navbar-fixed-top {
            position: absolute;
        }

        .logo1 {
            padding: 6px 0 4px;
        }

        /* Define the light theme (default) */
        :root {
            --bg-color: white;
            /* Background color */
            --text-color: black;
            /* Text color */
        }

        /* Define the dark theme */
        .dark-theme {
            --bg-color: black;
            /* Background color */
            --text-color: white;
            /* Text color */
        }

        /* Apply the theme colors to the body element */
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        /* Style the toggle button */
        #toggle {
            position: fixed;
            /* Fix the position of the button */
            bottom: 10px;
            /* Set the bottom position to 10 pixels */
            right: 10px;
            /* Set the right position to 10 pixels */
            padding: 10px;
            /* Add some space around the button */
            border: none;
            /* Remove the border */
            border-radius: 5px;
            /* Add some rounded corners */
            cursor: pointer;
            /* Change the cursor to a pointer */
        }

        /* Change the button color on hover */
        #toggle:hover {
            background-color: gray;
        }
    </style>
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.zZZZhVqDDCw.L.W.O/am=BBDg/d=0/rs=AN8SPfobRl8UQM01cRTktRUhaChx5xxdlg/m=el_main_css">
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.E74bNNZzynw.O/am=AAAACA/d=1/exm=el_conf/ed=1/rs=AN8SPfpEdPoK2LO0umJsSf_MlFoC8KouQA/m=el_main"></script>
</head>

<body id="buttons" style="position: relative; min-height: 100%; top: 0px;">
    <div style="
    padding: 0px;
    background-color: #003399a6;
text-align:right;
padding-right:170px;
 /* opacity: 0.6; */
">
        <div class="col-md-11 " style="padding-top:5px"> <a href="https://iimk.ac.in/screen-reader-access"
                style="text-align:right;font-size:14px;color:#fff" alt="Screen Reader Access">
                Screen Reader Access |
            </a><a href="#prog-pge-main-bx" style="font-size:14px;color:#fff">Skip to Main Content</a> <input
                type="button" id="toggle1" class="toggle" value="A" alt="High Contrast"
                style="background-color:black;color:white"> <input type="button" id="toggle2" class="toggle" value="A"
                style="background-color:white;color:black">
        </div>
        <div id="font-setting-buttons">
            <div class="btn-group font-contrler wow fadeInDown">
                <a href="" class="decrease-me">-</a>
                <a href="" class="reset-me">A</a>
                <a href="" class="increase-me">+</a>

            </div>

            <!--a href="https://iimk.ac.in/screen-reader-access" style="font-size: 16px;" alt="Screen Reader Access" target="_blank">
                  <img src="https://iimk.ac.in/images/reader-icon.png" class="img-responsive wow fadeInDown" ></a-->

        </div>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="hme-logo-wrpr3">

            <div class="container-fluid">
                <div class="common-logo-wdth">
                    <div class="col-lg-4 col-xs-12 col-sm-12"> <a href="https://iimk.ac.in/"><img
                                src="https://iimk.ac.in/images/logo2.png" class="img-responsive logo1"></a> </div>

                    <div class="col-lg-7 col-xs-12 col-sm-12"></div>

                    <div class="col-lg-1 col-xs-12 col-sm-12 col-md-1">

                        <div class="button_container" id="toggle">
                            <div class="bn-mnu"> <span class="top"></span> <span class="middle"></span> <span
                                    class="bottom"></span> </div>
                        </div>

                        <div class="overlay" id="overlay">
                            <nav class="overlay-menu">
                                <div class="container">
                                    <div class="menu-wrpr01" id="menu-tabs3">
                                        <div class="clearfix"></div>
                                        <div class="mnu-logo-scon">
                                            <div class="col-sm-5">
                                                <img src="https://iimk.ac.in/images/logo.png" class="img-responsive">
                                            </div>
                                            <div class="col-sm-7"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="tse-scrollable demo1">
                                            <div class="tse-scrollbar" style="display: none;">
                                                <div class="drag-handle"></div>
                                            </div>
                                            <div class="tse-scroll-content" style="width: 1140px; height: 606px;">
                                                <div class="tse-content">
                                                    <div class="col-lg-9 col-sm-12 col-md-9">

                                                        <div class="clearfix"></div>
                                                        <div id="man-mn" class="">
                                                            <nav class="">

                                                                <!--<div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>-->
                                                                <ul id="respMenu" class="ace-responsive-menu"
                                                                    data-menu-style="vertical">
                                                                    <!-- <li> <a href="javascript:;" style="background:#3968c8;"> <span class="title">About Us</span> </a>
                <ul style="display:flow-root;">
                    <li> <a href="#">Sub Item One</a> </li>
                    <li> <a href="#">Sub Item Two</a> </li>
                    <li> <a href="#">Sub Item Three</a> </li>
                    <li> <a href="#">Sub Item Four</a> </li>
                </ul>
            </li>-->
                                                                    <li> <a href="https://iimk.ac.in/the-institute-old">
                                                                            <span class="title">The Institute</span>
                                                                            <span class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul style="display:flow-root;" class="sub-menu">
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/the-institute">
                                                                                    The Institute <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/vision">Vision
                                                                                            &amp; Mission</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/growth-history">Growth
                                                                                            History</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/annual-reports">Annual
                                                                                            Reports</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/faculty-profiles/DEBASHIS-CHATTERJEE"
                                                                                    target="_blank"> Director </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/board-of-governors">
                                                                                    Board of Governors </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="#"> Deans &amp; Administration
                                                                                    <span class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/faculty-profiles/M-P-SEBASTIAN"
                                                                                            target="_blank">DEAN (
                                                                                            Faculty Administration &amp;
                                                                                            Development)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/faculty-profiles/SUDERSHAN-KUNTLURU"
                                                                                            target="_blank">DEAN
                                                                                            (EXECUTIVE EDUCATION) </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/faculty-profiles/ANANDAKUTTAN-B-UNNITHAN"
                                                                                            target="_blank">DEAN
                                                                                            (Programmes)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/faculty-profiles/VENKATARAMAN-S"
                                                                                            target="_blank">ASSOCIATE
                                                                                            DEAN (KOCHI CAMPUS)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/faculty-profiles/DEEPA-SETHI"
                                                                                            target="_blank">Executive
                                                                                            Chair - GLOBE</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="#"> Statutory Compliance <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/RTI">Right
                                                                                            To Information (RTI)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/accreditation-and-ranking">
                                                                                    Accreditation &amp; Ranking <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/green-initiatives">Green
                                                                                            Initiatives</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="#"> <span
                                                                                class="title">Programmes</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="sub-menu">
                                                                            <li> <a href="#"> Academic Programmes <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Fellow-Programme-in-Management"
                                                                                            target="_blank">Doctoral
                                                                                            Programme in Management (
                                                                                            PhD)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp"
                                                                                            target="_blank">Post
                                                                                            Graduate Programme (PGP)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Finance"
                                                                                            target="_blank">Post
                                                                                            Graduate Programme in
                                                                                            Finance ( PGP -Finance )</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/PGPLSM"
                                                                                            target="_blank">Post
                                                                                            Graduate Programme in
                                                                                            Liberal Studies &amp;
                                                                                            Management ( PGP LSM )</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership"
                                                                                            target="_blank">Post
                                                                                            Graduate Programme in
                                                                                            Business Leadership ( PGP BL
                                                                                            )</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/BMS/bms-overview"
                                                                                            target="_blank">Bachelor of
                                                                                            Management Studies (BMS)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="#"> Executive Programmes <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/PHD-IN-MANAGEMENT-(PRACTICE-TRACK)"
                                                                                            target="_blank">Phd In
                                                                                            Management (Practice
                                                                                            Track)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/EPGP-KOCHI"
                                                                                            target="_blank">Executive
                                                                                            Post Graduate Programme (
                                                                                            Kochi Campus )</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/epgp">Executive
                                                                                            Post Graduate Programmes -
                                                                                            Interactive Learning Mode
                                                                                            (EPGP)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Management-Development-Programme-(MDP)"
                                                                                            target="_blank">Management
                                                                                            Development Programme
                                                                                            (MDP)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Faculty-Development-Programme-(FDP)"
                                                                                            target="_blank">Faculty
                                                                                            Development Programme
                                                                                            (FDP)</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/research"> <span
                                                                                class="title">Research</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="sub-menu">
                                                                            <li> <a href="https://iimk.ac.in/research"
                                                                                    target="_blank"> Research &amp;
                                                                                    Publications <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/iimk-journal-">IIMK
                                                                                            Journal </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/research-newsletters">Research
                                                                                            Newsletters</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/publications">Publications</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="http://researchblog.iimk.ac.in/"
                                                                                            target="_blank">Research
                                                                                            Blog</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/workshops-and-seminars">
                                                                                    Conferences &amp; Seminars <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/conferences">Conferences</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/seminars">Seminars</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="https://www.iimk.ac.in/uploads/announcements/Internship_Notification_20231006053744.pdf"
                                                                                    target="_blank"> Research Internship
                                                                                </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/iimk-faculty">
                                                                            <span class="title">Faculty</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="sub-menu">
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/academic-areas">
                                                                                    Academic Areas <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Ecconomics"
                                                                                            target="_blank">Economics</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Finance-Accounting--Control"
                                                                                            target="_blank">Finance,
                                                                                            Accounting &amp; Control
                                                                                        </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Humanities-Liberal-Arts-in-Management"
                                                                                            target="_blank">Humanities
                                                                                            &amp; Liberal Arts in
                                                                                            Management</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Information-Systems"
                                                                                            target="_blank">Information
                                                                                            Systems</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Marketing-Management"
                                                                                            target="_blank">Marketing
                                                                                            Management</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Organizational-Behaviour-and-Human-Resources-Area"
                                                                                            target="_blank">Organizational
                                                                                            Behavior and Human Resource
                                                                                            Management</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Decision-Sciences-and-Operations-Management-Area "
                                                                                            target="_blank">Decision
                                                                                            Sciences and Operations
                                                                                            Management</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-area/Strategic-Management"
                                                                                            target="_blank">Strategic
                                                                                            Management </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/faculty-profiles">
                                                                                    Faculty Profiles </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/current-distinguished-visiting-scholars">
                                                                                    Distinguished Visiting Scholars </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/iimk-visiting-professors">
                                                                                    Visiting Professors </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/research"
                                                                                    target="_blank"> Research </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/faculty-recruitment">
                                                                                    Faculty Recruitment </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="#"> <span class="title">Student
                                                                                Affairs</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="sub-menu">
                                                                            <li> <a href="#"> PGP/PGP-FIN/PGP-LSM <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/about-students-affairs"
                                                                                            target="_blank">About
                                                                                            Student Affairs</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/students-council"
                                                                                            target="_blank">Students'
                                                                                            Council</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/committees"
                                                                                            target="_blank">Committees</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/interest-groups"
                                                                                            target="_blank">Interest
                                                                                            Groups</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/clubs"
                                                                                            target="_blank">Clubs</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/studentachievementprogrammes"
                                                                                            target="_blank">Student
                                                                                            Achievements</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/events"
                                                                                            target="_blank">Events</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/guidelinesfor-education-verification"
                                                                                            target="_blank">Guidlines
                                                                                            for Education
                                                                                            Verification</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/student-affairs-chapters"
                                                                                            target="_blank">Chapters</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/iimk-scholarships">Scholarships</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/student-affairs-contact-us">Contact
                                                                                            Us</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="#"> PGP-BL <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership-/student-committee-bl"
                                                                                            target="_blank">Student
                                                                                            Council</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership-/events"
                                                                                            target="_blank">Events</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership-/achievement"
                                                                                            target="_blank">Achievements</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/Post-Graduate-Programme-in-Business-Leadership/creativity-circle-pgp-bl"
                                                                                            target="_blank">Student
                                                                                            Driven Circles</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/academic-programmes/pgp/about-students-affairs"
                                                                                            target="_blank">About
                                                                                            Student Affairs</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/student-affairs-contact-us"
                                                                                            target="_blank">Contact
                                                                                            Us</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="#"> <span
                                                                                class="title">Placements</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="sub-menu">
                                                                            <li> <a href="#"> PGP/PGP-FIN/PGP-LSM <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/summer-placements">Summer
                                                                                            Placements</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/final-placements">Final
                                                                                            Placements</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/chairpersons-message">Chairpersons
                                                                                            Message</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/uploads/topmenu/PlacementsCalendar_20240528052010.pdf"
                                                                                            target="_blank">Placements
                                                                                            Calendar</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/uploads/userfiles/Recruiters Guide 2024.pdf"
                                                                                            target="_blank">Recruiters
                                                                                            Guide</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/placement-contact">Contact
                                                                                            Us</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="#"> PGP-BL <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/uploads/topmenu/IIMK PGPBL 06 Recruiters Guide_20250922031639.pdf"
                                                                                            target="_blank">Recruiters
                                                                                            guide</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/placement-report">Placement
                                                                                            Report</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/centres-list"
                                                                            target="_blank"> <span
                                                                                class="title">Centres</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="sub-menu">
                                                                            <li> <a href="https://forms.iimk.ac.in/research/cgov/index.php"
                                                                                    target="_blank"> Centre for
                                                                                    Governance </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://forms.iimk.ac.in/research/cesi/"
                                                                                    target="_blank"> Centre of
                                                                                    Excellence for Social Innovation
                                                                                </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://forms.iimk.ac.in/research/cdit/"
                                                                                    target="_blank"> Centre for Digital
                                                                                    Innovation and Transformation
                                                                                    (C-DiIT) </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/centres/cerls/index.php"
                                                                                    target="_blank"> Centre for
                                                                                    Employment Relations and Labour
                                                                                    Studies(CERLS) </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/centres/uruppika"
                                                                                    target="_blank"> Uruppika: Centre of
                                                                                    Excellence in Macroeconomics,
                                                                                    Banking and Finance </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/centres/IJCCC/"
                                                                                    target="_blank"> India - Japan
                                                                                    Centre on Climate and Culture </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://gyanodaya.iimk.ac.in/"
                                                                                    target="_blank"> Gyanodaya </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a
                                                                            href="https://iimk.ac.in/international-relations">
                                                                            <span class="title">International</span>
                                                                            <span class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="menu-bottm-strts sub-menu">
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/international-admission-programmes">
                                                                                    International Admissions <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-programs-offered">Programs
                                                                                            Offered</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-eligibility">Eligibility</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-programmes-fees">Programme
                                                                                            Fees</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-admission-selection-process">Admission/Selection
                                                                                            Process</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/courses-offered">Courses
                                                                                            Offered</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-scholarships">Scholarships</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://iimk.ac.in/apps/Admission/InternationalApplication/Registration/Registration"
                                                                                            target="_blank">Apply
                                                                                            Online</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/student-exchange-programme">
                                                                                    Student Exchange <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-student-exchange">Incoming
                                                                                            Student Exchange</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-outgoing-student-exchange">Outgoing
                                                                                            Student Exchange</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/iimk-ie-partner-institutions">Partner
                                                                                            Institutions</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ir-events">Events</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="https://forms.iimk.ac.in/akumen/summerschool.php"
                                                                                    target="_blank"> AKumen Summer
                                                                                    School </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/ir-image-gallery">
                                                                                    IR Gallery </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/contact-ir-office">
                                                                                    Contact Us </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/alumni"> <span
                                                                                class="title">Alumni</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="menu-bottm-strts sub-menu">
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/alumni-relations-office">
                                                                                    Alumni Relations Office </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/students-alumni-cell">
                                                                                    Students Alumni Cell </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/sac-committee-members">
                                                                                    SAC Committee Members </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/iimk-alumni-association">
                                                                                    IIMK Alumni Association </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/kasebook">
                                                                                    Kasebook </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/shikhar-the-crest-of-offering">
                                                                                    Shikhar - The crest of offering </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/nomination-for-daa-and-yaa">
                                                                                    Nomination for DAA and YAA </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="#"> Distinguished Alumni Award
                                                                                    <span class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/daa-awardees-of-2025">Awardees
                                                                                            of 2025</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/distinguished-alumni-awardees-of-2024">Awardees
                                                                                            of 2024</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/alumni-awardee-2023">Awardees
                                                                                            of 2023</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/alumni-awardess-2022">Awardees
                                                                                            of 2022</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="#"> Young Alumni Achievers
                                                                                    award <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/yaa-awardees-of-2025">Awardees
                                                                                            of 2025</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/young-alumni-achievers-awardees-of-2024-">Awardees
                                                                                            of 2024 </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/alumni-contact-center">
                                                                                    Alumni Contact Center </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/achievements">
                                                                                    Achievements </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/academic-programmes/pgp/guidelinesfor-education-verification"
                                                                                    target="_blank"> Guidelines for
                                                                                    Education Verification </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/alumni-gallery">
                                                                                    Gallery </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/alumni-id-card">
                                                                                    Alumni e-Identity Card </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/alumni-newsletter">
                                                                                    Alumni Newsletter </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/centres/shikhar/"
                                                                            target="_blank"> <span
                                                                                class="title">SHIKHAR</span> </a>
                                                                        <!-- Level Two-->
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/collaborations">
                                                                            <span class="title">Collaborations</span>
                                                                            <span class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="menu-bottm-strts sub-menu">
                                                                            <li> <a href="https://iimk.ac.in/apps/akumen/"
                                                                                    target="_blank"> AKUMEN </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/consulting">
                                                                                    Consulting <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ongoing-consultancy-projects">Ongoing
                                                                                            &amp; Completed Projects</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="https://www.iimklive.org/">
                                                                                    Business Incubator-Live </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/collaborations-recruiter">
                                                                                    Recruiters </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="#"> <span
                                                                                class="title">Announcements</span> <span
                                                                                class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="menu-bottm-strts sub-menu">
                                                                            <li> <a href="https://iimk.ac.in/careers">
                                                                                    Careers </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="https://iimk.ac.in/tender">
                                                                                    Tenders </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/common-admission-test">
                                                                                    Common Admission Test </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="#"> <span
                                                                                class="title">Infrastructure</span>
                                                                            <span class="arrow "></span></a>
                                                                        <!-- Level Two-->
                                                                        <ul class="menu-bottm-strts sub-menu">
                                                                            <li> <a href="#"> Campus <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/classrooms">Classrooms</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/auditoriums">Auditoriums
                                                                                        </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/hostels-">Hostels
                                                                                        </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/campus-guest-care">Guest
                                                                                            Care</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/recreation-">Recreation
                                                                                        </a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/eating-points">Eating
                                                                                            Points</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="https://library.iimk.ac.in/museum"
                                                                                    target="_blank"> Business Museum
                                                                                </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a href="#"> Computing Facilities <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/it-setup">IT
                                                                                            Setup</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/hardware-infrastructure">Hardware
                                                                                            Infrastructure</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/campus-network">Campus
                                                                                            Network</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/software-tools">Software
                                                                                            Tools</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/services">Services</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/business-intelligence">
                                                                                    Business Intelligence <span
                                                                                        class="arrow "></span></a>
                                                                                <!-- Level Three-->
                                                                                <ul class="sub-menu">
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/communication-and-media-lab">Communication
                                                                                            &amp; Media Lab</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/business-simulation-lab">Business
                                                                                            Simulation Lab</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/ideation-lab">Ideation
                                                                                            Lab</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/behavoiur-and-financial-computation-lab">Behavoiur
                                                                                            and Financial Computation
                                                                                            Lab</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/video-and-conferencing-facility">Video
                                                                                            and Conferencing
                                                                                            Facility</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://iimk.ac.in/bloomberg-and-thomson-reuters-database">Bloomberg
                                                                                            and Thomson Reuters
                                                                                            Database</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                            href="https://www.iimklive.org/">IIMK
                                                                                            live</a>
                                                                                        <!-- Level Four-->
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li> <a href="https://library.iimk.ac.in"
                                                                                    target="_blank"> Library </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/campus-hostels">
                                                                                    Hostels </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                            <li> <a
                                                                                    href="https://iimk.ac.in/rainwater-harvesting">
                                                                                    Rainwater Harvesting </a>
                                                                                <!-- Level Three-->
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/in-media"> <span
                                                                                class="title">In Media</span> </a>
                                                                        <!-- Level Two-->
                                                                    </li>
                                                                    <li> <a href="https://iimk.ac.in/olic-portal"
                                                                            target="_blank"> <span class="title">OLIC
                                                                                Portal</span> </a>
                                                                        <!-- Level Two-->
                                                                    </li>
                                                                </ul>

                                                            </nav>
                                                        </div>


                                                    </div>
                                                    <!--<div class="col-lg-3 col-sm-12 col-md-3" id="hder-3bcxs">
                    <div class="menu-3boxs3">
                    
                    <a href="https://iimk.ac.in/careers"> <div class="grid">
                        <figure class="effect-julia"> <img src="https://iimk.ac.in/images/icon-mmg-1.jpg" class="img-responsive" alt="img21"/>
                          <figcaption>
                            <h2> <span> Careers </span></h2>
                          
                            
                          </figcaption>
                        </figure>
                      </div></a>
                      <div class="clearfix"></div>
                      <br/>
                      
                       <a href="https://iimk.ac.in/tender"> <div class="grid"> <figure class="effect-julia">
                        <figure class="effect-julia"> <img src="https://iimk.ac.in/images/icon-mmg-2.jpg" class="img-responsive" alt="img21"/>
                          <figcaption>
                            <h2> <span> Tenders </span></h2>
                            <div> </div>
                          </figcaption>
                        </figure>
                      </div></a>
                      <div class="clearfix"></div>
                      <br/>
                    
                    
                    
                     <a href="https://iimk.ac.in/social-development-projects"> <div class="grid">
                        <figure class="effect-julia"> <img src="https://iimk.ac.in/images/icon-mmg-4.jpg" class="img-responsive" alt="img21"/>
                          <figcaption>
                            <h2> <span> Social Development Projects </span></h2>
                          
                            
                          </figcaption>
                        </figure>
                      </div></a>
                      <div class="clearfix"></div>
                      <br/>
                      <a href="https://iimk.ac.in/common-admission-test">
                      <div class="grid">
                        <figure class="effect-julia"> <img src="https://iimk.ac.in/images/icon-mmg-3.jpg" class="img-responsive" alt="img21"/>
                          <figcaption>
                            <h2> <span> Common Admission Test </span></h2>
                            <div> 
                              
                            </div>
                          </figcaption>
                        </figure>
                      </div></a>
                      <div class="clearfix"></div>
                      <br/>
                      
                      
                      
                   
                      
                      
                      
                      
                    </div>
                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script type="text/javascript">

        $(".accordion").accordion();

    </script>
    <style>
        .prog-pg-mn h4 {
            line-height: 28px;
            font-size: 16px;
            font-weight: 400 !important;
        }
    </style>


    <section id="innr-bnners1">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line"
            data-ride="carousel" data-pause="hover" data-interval="false">


            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://iimk.ac.in/uploads/topmenu/banner/inner-banner15.jpg" alt="Banner"
                        class="slide-image">
                </div>
            </div><!-- End of Wrapper For Slides -->


            <div class="inner-bnr-txt-hds">
                <div class="iinr-hd">


                    <h2>Accreditation &amp; Ranking </h2>
                    <div class="clearfix"></div>
                    <h4> <a href="https://iimk.ac.in/">Home</a> <i class="fa fa-angle-double-right"></i> The Institute
                        <i class="fa fa-angle-double-right"></i>&nbsp;Accreditation &amp; Ranking
                    </h4>
                </div>
            </div>

        </div>
    </section>




    <section id="prog-pge-main-bx">
        <div class="container-fluid">
            <div class="prog-pg-mn">



                <div class="col-lg-3 col-sm-12 col-md-3">
                    <div class="prog-side-mnux1">
                        <div id="jquery-accordion-menu2" class="jquery-accordion-menu2">
                            <!--<div class="jquery-accordion-menu-header"> <h3> Content </h3> </div>-->
                            <!--<ul>
					<li><a href="#"> About IIMK </a></li>
					<li><a href="#"> Growth History </a></li>
					<li><a href="#"> Director </a> </li>
					<li><a href="#"> Board of Governors </a>
						<ul class="submenu">
							<li><a href="#"> Web Design </a></li>
							<li><a href="#"> Hosting </a></li>
							<li><a href="#"> Design </a>
								<ul class="submenu">
									<li><a href="#">Graphics </a></li>
									<li><a href="#">Vectors </a></li>
									<li><a href="#">Photoshop </a></li>
									<li><a href="#">Fonts </a></li>
								</ul>
							</li>
							<li><a href="#">Consulting </a></li>
						</ul>
					</li>
					<li><a href="#"> People </a></li>
					<li><a href="#">  Infrastructure </a></li>
					<li><a href="#">  NIRF </a></li>
					<li><a href="#">  RTI </a></li>
                 
				</ul>-->


                            <ul>
                                <li><a href="javascript:void()" class="no-arrw">
                                        <h3>The Institute</h3>
                                    </a></li>
                                <li> <a href="https://iimk.ac.in/the-institute"> The Institute <span
                                            class="submenu-indicator">+</span></a>
                                    <!-- Level Three-->
                                    <ul class="submenu ">
                                        <li>
                                            <a href="https://iimk.ac.in/vision">Vision &amp; Mission</a>
                                        </li>

                                        <li>
                                            <a href="https://iimk.ac.in/growth-history">Growth History</a>
                                        </li>

                                        <li>
                                            <a href="https://iimk.ac.in/annual-reports">Annual Reports</a>
                                        </li>

                                    </ul>
                                </li>
                                <li> <a href="https://iimk.ac.in/faculty-profiles/DEBASHIS-CHATTERJEE" target="_blank">
                                        Director </a>
                                    <!-- Level Three-->
                                </li>
                                <li> <a href="https://iimk.ac.in/board-of-governors"> Board of Governors </a>
                                    <!-- Level Three-->
                                </li>
                                <li> <a href=""> Deans &amp; Administration <span class="submenu-indicator">+</span></a>
                                    <!-- Level Three-->
                                    <ul class="submenu ">
                                        <li>
                                            <a href="https://iimk.ac.in/faculty-profiles/M-P-SEBASTIAN"
                                                target="_blank">DEAN ( Faculty Administration &amp; Development)</a>
                                        </li>

                                        <li>
                                            <a href="https://iimk.ac.in/faculty-profiles/SUDERSHAN-KUNTLURU"
                                                target="_blank">DEAN (EXECUTIVE EDUCATION) </a>
                                        </li>

                                        <li>
                                            <a href="https://iimk.ac.in/faculty-profiles/ANANDAKUTTAN-B-UNNITHAN"
                                                target="_blank">DEAN (Programmes)</a>
                                        </li>

                                        <li>
                                            <a href="https://iimk.ac.in/faculty-profiles/VENKATARAMAN-S"
                                                target="_blank">ASSOCIATE DEAN (KOCHI CAMPUS)</a>
                                        </li>

                                        <li>
                                            <a href="https://iimk.ac.in/faculty-profiles/DEEPA-SETHI"
                                                target="_blank">Executive Chair - GLOBE</a>
                                        </li>

                                    </ul>
                                </li>
                                <li> <a href=""> Statutory Compliance <span class="submenu-indicator">+</span></a>
                                    <!-- Level Three-->
                                    <ul class="submenu ">
                                        <li>
                                            <a href="RTI">Right To Information (RTI)</a>
                                        </li>

                                    </ul>
                                </li>
                                <li> <a href="https://iimk.ac.in/accreditation-and-ranking"> Accreditation &amp; Ranking
                                        <span class="submenu-indicator">+</span></a>
                                    <!-- Level Three-->
                                    <ul class="submenu ">
                                        <li>
                                            <a href="https://iimk.ac.in/green-initiatives">Green Initiatives</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>


                <div class="col-lg-9 col-sm-12 col-md-9">

                    <div class="co-bx" id="contnt-tbs">


                        <div class="tabbable-line">
                            <!-- Level Four-->
                            <ul class="nav nav-tabs ">
                            </ul>

                            <h4>
                                <p align="center" style="margin-left:63.8pt;">
                                    <strong><u>RANKINGS BY YEAR</u></strong>
                                </p>

                                <p align="center" style="margin-left:63.8pt;">
                                    <strong>International Rankings</strong>
                                </p>

                                <table border="1" cellpadding="0" cellspacing="0" width="717">
                                    <tbody>

                                        <!-- HEADER ROW 1 -->
                                        <tr>
                                            <td rowspan="2" style="width:180px;">
                                                <p><strong>Rankings (Programme)</strong></p>
                                            </td>

                                            <?php foreach ($years as $year): ?>
                                            <td colspan="2">
                                                <p align="center"><strong><?= $year ?></strong></p>
                                            </td>
                                            <?php endforeach; ?>
                                        </tr>

                                        <!-- HEADER ROW 2 -->
                                        <tr>
                                            <?php foreach ($years as $year): ?>
                                            <td>
                                                <p align="center"><strong>Global</strong></p>
                                            </td>
                                            <td>
                                                <p align="center"><strong>Asia</strong></p>
                                            </td>
                                            <?php endforeach; ?>
                                        </tr>

                                        <!-- DATA ROWS -->
                                        <?php foreach ($international as $row): ?>
<tr>

    <td>
        <p><?= $row['programme_name'] ?></p>
    </td>

    <?php foreach ($years as $year): ?>

        <?php if ($row['id'] > 5): ?>

            <?php
            $merged =
                $row['values'][$year]['Global']
                ?? $row['values'][$year]['Asia']
                ?? null;
            ?>

            <td colspan="2">
                <p align="center">

                    <?php if ($merged): ?>

                        <?php if (!empty($merged['url'])): ?>

                            <a href="<?= $merged['url'] ?>" target="_blank">
                                <?= $merged['value'] ?>
                            </a>

                        <?php else: ?>

                            <?= $merged['value'] ?>

                        <?php endif; ?>

                    <?php endif; ?>

                </p>
            </td>

        <?php else: ?>

            <!-- GLOBAL -->
            <td>
                <p align="center">

                    <?php
                    $global = $row['values'][$year]['Global'] ?? null;
                    ?>

                    <?php if ($global): ?>

                        <?php if (!empty($global['url'])): ?>

                            <a href="<?= $global['url'] ?>" target="_blank">
                                <?= $global['value'] ?>
                            </a>

                        <?php else: ?>

                            <?= $global['value'] ?>

                        <?php endif; ?>

                    <?php endif; ?>

                </p>
            </td>

            <!-- ASIA -->
            <td>
                <p align="center">

                    <?php
                    $asia = $row['values'][$year]['Asia'] ?? null;
                    ?>

                    <?php if ($asia): ?>

                        <?php if (!empty($asia['url'])): ?>

                            <a href="<?= $asia['url'] ?>" target="_blank">
                                <?= $asia['value'] ?>
                            </a>

                        <?php else: ?>

                            <?= $asia['value'] ?>

                        <?php endif; ?>

                    <?php endif; ?>

                </p>
            </td>

        <?php endif; ?>

    <?php endforeach; ?>

</tr>
<?php endforeach; ?>

                                    </tbody>
                                </table>

                                <p align="center">&nbsp;</p>

                                <p align="center" style="margin-left:14.2pt;">
                                    <strong>National Rankings</strong>
                                </p>

                                <table border="1" cellpadding="0" cellspacing="0">
                                    <tbody>

                                        <!-- HEADER -->
                                        <tr>
                                            <td style="width:341px;">
                                                <p><strong>Rankings</strong></p>
                                            </td>

                                            <?php foreach ($years as $year): ?>
                                            <td>
                                                <p align="center"><strong><?= $year ?></strong></p>
                                            </td>
                                            <?php endforeach; ?>
                                        </tr>

                                        <!-- DATA -->
                                    <?php foreach ($national as $row): ?>
<tr>

    <td>
        <p><?= $row['programme_name'] ?></p>
    </td>

    <?php foreach ($years as $year): ?>

        <?php
        $nationalValue = $row['values'][$year]['National'] ?? null;
        ?>

        <td>
            <p align="center">

                <?php if ($nationalValue): ?>

                    <?php if (!empty($nationalValue['url'])): ?>

                        <a href="<?= $nationalValue['url'] ?>" target="_blank">
                            <?= $nationalValue['value'] ?>
                        </a>

                    <?php else: ?>

                        <?= $nationalValue['value'] ?>

                    <?php endif; ?>

                <?php endif; ?>

            </p>
        </td>

    <?php endforeach; ?>

</tr>
<?php endforeach; ?>

                                    </tbody>
                                </table>
                            </h4>
                        </div>

                        <!-- <h2 class="main-hd-cntnt"> Reference site about Lorem Ipsum, </h2>
        <div class="clearfix"></div>
        <hr class="foot-lne3">-->
                        <div class="clearfix"></div>


                        <!--<h4> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </h4>
        <h4> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </h4>-->
                    </div>

                </div>



            </div>
        </div>
    </section>

    <div class="section" id="section12">

        <div class="container">
            <div class="fp-table22">
                <div class="footerr-222">
                    <div class="footerr-1">

                        <div class="clearfix"></div>
                        <style>
                            .acc-logos li {
                                padding: 10px 0 !important;
                            }
                        </style>
                        <div class="col-sm-12" id="soclfoo">
                            <!-- acc-logos1 acc-logos2-->
                            <ul class="no-pad acc-logos" style=" text-align:center;">
                                <li><a href="https://www.associationofmbas.com/" target="_blank"><img
                                            src="https://iimk.ac.in/images/amba-logo-black.png"
                                            class="img-responsive"></a></li>
                                <li><a href="https://www.aacsb.edu/" target="_blank"><img
                                            src="https://iimk.ac.in/images/acc-logos3.png" class="img-responsive"></a>
                                </li>
                                <li><a href="https://www.efmdglobal.org/" target="_blank"><img
                                            src="https://iimk.ac.in/images/EFMD-Global-EQUIS-Accredited-Pantone.png"
                                            class="img-responsive" style="
    padding-right: 25px !important;
"></a></li>
                                <li> <a href="https://www.india.gov.in/" target="_blank"> <img
                                            src="https://iimk.ac.in/images/india-gov1.png" class="img-responsive"> </a>
                                </li>
                                <li> <a href="https://www.education.gov.in/" target="_blank"> <img
                                            src="https://iimk.ac.in/images/education.png" class="img-responsive"> </a>
                                </li>

                            </ul>
                            <div class="socil-medis-icns">

                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <hr style="border:0px solid #fff">
                        <div class="clearfix"></div>



                        <div id="footr-2nd-sec">
                            <div class="col-sm-6">
                                <div class="footr-info-dtls">
                                    <!--    <hr class="foot-lne4">-->

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="col-sm-1">
                                                <div class="facon-footr">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-11">
                                                <strong>Indian Institute of Management Kozhikode</strong> <br>
                                                <p>IIMK Campus P. O, Kozhikode, Kerala, India,<br>
                                                    PIN - 673 570</p>
                                            </div>


                                        </div>
                                        <div class="col-lg-12 col-sm-12" style="padding-top: 20px;">
                                            <div class="col-sm-1">
                                                <div class="facon-footr">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-11">
                                                <strong> Phone </strong> <br>
                                                +91-495-2809100
                                            </div>


                                        </div>
                                        <div class="col-lg-12 col-sm-12" style="padding-top: 20px;">
                                            <div class="col-sm-1">
                                                <div class="facon-footr">
                                                    <i class="fa fa-fax"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-11">
                                                <strong> Fax </strong> <br>
                                                +91-495-2803010-11
                                            </div>


                                        </div>

                                    </div>



                                </div>
                            </div>



                            <div class="col-sm-3">
                                <h4> Links </h4>
                                <hr class="foot-lne3">
                                <div class="clearfix"></div>

                                <ul class="no-pad foot-links">
                                    <li><a href="https://iimk.ac.in/NIRF" target="_blank"> NIRF </a></li>

                                    <li><a href="https://iimk.ac.in/careers" target="_blank"> Careers </a></li>

                                    <li><a href="https://iimk.ac.in/tender" target="_blank"> Tenders </a></li>

                                    <li><a href="https://iimk.ac.in/Purchase-Rules" target="_blank"> Purchase Rules
                                            &amp; Procedures </a></li>

                                    <li><a href="https://iimk.ac.in/RTI" target="_blank"> RTI </a></li>

                                    <li><a href="https://www.education.gov.in/" target="_blank"> MoE </a></li>

                                    <li><a href="https://iimk.ac.in/Anti-Ragging" target="_blank"> Anti-Ragging </a>
                                    </li>

                                    <li><a href="https://www.nvsp.in/"> Online Services for Voters </a></li>

                                    <li><a href="https://www.india.gov.in/" target="_blank"> National Portal of India
                                        </a></li>

                                    <li><a href="https://iimk.ac.in/terms-of-use"> Terms of Use </a></li>

                                </ul>



                            </div>

                            <!-- <div class="col-sm-3">
        <h4> Site Details </h4>
            <hr class="foot-lne3">
            <div class="clearfix"></div>
          
  <div class="top-infos-bxs add">
                <div class="col-lg-6 col-md-6 col-sm-6 no-pad">
                    <div id="font-setting-buttons">
				<div class="btn-group font-contrler wow fadeInDown">
						<a href="" class="decrease-me">-</a>
						<a href="" class="reset-me">A</a>
						<a href="" class="increase-me">+</a>
					</div>
				</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 no-pad"><a href="https://iimk.ac.in/screen-reader-access" >
                  <img src="https://iimk.ac.in/images/reader-icon.png" class="img-responsive wow fadeInDown" alt="Screen Reader Access"/><br>Screen Reader Access </a> </div>
                </div> -->

                        </div>



                    </div>
                </div>
>>>>>>> e06d5e3c58335175348d9bf920e0650f22442e40
            </div>

        </div>
    </div>
<<<<<<< HEAD
</section>

@endsection
=======
    <div class="clearfix"></div>











    <div class="clearfix"></div>
    <div class="clearfix"></div>



    <div class="section" id="section13">

        <div class="cpy-rgt">
            <div class="container">
                <div class="col-sm-6 text-center"><span class="footr-tt"> © 2026 IIM Kozhikode </span> </div>
                <div class="col-sm-6 text-center">
                    <span class="footr-tt">
                        <ul style="display: flex; gap: 1rem; list-style: none; padding: 0;">
                            <li> <a href="https://www.facebook.com/IIMKKozhikode/" target="_blank"> <i
                                        class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="https://www.twitter.com/IIMKozhikode/" target="_blank"> <i
                                        class="fa fa-twitter"></i> </a></li>
                            <li> <a href="https://in.linkedin.com/school/indian-institute-of-management-kozhikode/"
                                    target="_blank"> <i class="fa fa-linkedin"></i> </a></li>
                            <li> <a href="https://www.instagram.com/iimkozhikode/?hl=en" target="_blank"> <i
                                        class="fa fa-instagram"></i> </a></li>

                            <li>
                                <div id="google_translate_element">
                                    <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                                        <div id=":0.targetLanguage" class="goog-te-gadget-simple"
                                            style="white-space: nowrap;"><img
                                                src="https://www.google.com/images/cleardot.gif"
                                                class="goog-te-gadget-icon" alt=""
                                                style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;"><span
                                                style="vertical-align: middle;"><a aria-haspopup="true"
                                                    class="VIpgJd-ZVi9od-xl07Ob-lTBxed" href="#"><span>Select
                                                        Language</span><img
                                                        src="https://www.google.com/images/cleardot.gif" alt=""
                                                        width="1" height="1"><span
                                                        style="border-left: 1px solid rgb(187, 187, 187);">​</span><img
                                                        src="https://www.google.com/images/cleardot.gif" alt=""
                                                        width="1" height="1"><span aria-hidden="true"
                                                        style="color: rgb(118, 118, 118);">▼</span></a></span></div>
                                    </div>
                                </div>
                            </li>
                            <li>Last Updated on :12-05-2026</li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>

    </div>

    <nav class="">
        <div class="site-title">

            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="https://iimk.ac.in/images/logo.png" alt="IIMK"
                                class="img-responsive"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-2">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="https://iimk.ac.in/the-institute">The Institute</a></li>
                            <li><a href="https://iimk.ac.in/academic-programmes">Programmes</a></li>
                            <li><a href="https://iimk.ac.in/faculty-profiles">Faculty &amp; Research </a></li>
                        </ul>

                    </div>
                </div>
            </nav>

        </div>
    </nav>



    <script src="https://iimk.ac.in/js/jquery.js"></script>
    <script src="https://iimk.ac.in/js/bootstrap.min.js"></script>
    <script src="https://iimk.ac.in/js/owl.carousel.js"></script>


    <script>


        function confirmRedirect(delUrl) {
            if (confirm("You are being redirected to an external website. Please note that Indian Institute of Management Kozhikode cannot be held responsible for external websites content & privacy policies.")) {
                window.open(delUrl, '_blank');
            }
        }

        $(document).keyup(function (e) {
            if (e.keyCode === 27) {
                var container = $("#overlay");
                //container.hide();
                var cls = container.attr('class');
                if (cls == 'overlay open') {
                    $('#toggle').toggleClass('active');
                    container.toggleClass('open');
                }
            }
        });

    </script>


    <script>
        $(document).ready(function () {
            $('input[type="text"]').attr('autocomplete', 'off');
        });


        function loadmenu() {

            $('.liFirstOpt').show();
        }



        $(document).ready(function () {
            $('#scrollDownPage').click(function () {
                $('html, body').animate({
                    scrollTop: $('#beforeVideoBanner').offset().top
                }, 1000);
            });


            $('.countr-all-time').mouseenter(function () {
                "use strict";
                function count($this) {
                    var current = parseInt($this.html(), 10);
                    current = current + 1; /* Where 50 is increment */
                    $this.html(++current);
                    if (current > $this.data('count')) {
                        $this.html($this.data('count'));
                    } else {
                        setTimeout(function () { count($this) }, 50);
                    }
                }
                $(".stat-count").each(function () {
                    $(this).data('count', parseInt($(this).html(), 10));
                    $(this).html('0');
                    count($(this));
                });
            });
        });
    </script>
    <script type="text/javascript" src="https://iimk.ac.in/js/marquee.js"></script>


    <script>
        $(function () {

            $('.simple-marquee-container').SimpleMarquee();

        });

    </script>
    <script src="https://iimk.ac.in/js/common.js"></script>
    <script src="https://iimk.ac.in/js/scroll-menu.js"></script>
    <script src="https://iimk.ac.in/js/prettify.js"></script>
    <script src="https://iimk.ac.in/js/jquery.slimscroll.js"></script>
    <script src="https://iimk.ac.in/js/jquery.trackpad-scroll-emulator.min.js"></script>


    <!--video slider-->

    <!--<script src="https://iimk.ac.in/js/ninjaVideoPlugin.js"></script>
<script src="https://iimk.ac.in/js/ninja-slider.js" type="text/javascript"></script>-->
    <script>
        // without this script, the slider doesn't start on it's own:
        !function ($) {
            $(function () {
                $('#homepage_slider').carousel()
            })
        }(window.jQuery)


        // if user chooses to not autoplay the video, the button should be uncommented in html and this script will make the button work:
        var vid = document.getElementById("bgvid");
        var playButton = document.querySelector("#slider-play-button button");

        playButton.addEventListener("click", function () {
            if (vid.paused) {
                vid.play();
                playButton.classList.remove("play-video-button");
                playButton.classList.add("pause-video-button");
            } else {
                vid.pause();
                playButton.classList.add("play-video-button");
                playButton.classList.remove("pause-video-button");
            }
        });
    </script>
    <!--video slider-->


    <script type="text/javascript">
        $(document).ready(function () {
            $('#lightgallery').lightGallery();
        });
    </script>

    <script>
        $('.nav-tabs-dropdown').each(function (i, elm) {
            $(elm).text($(elm).next('ul').find('li.active a').text());
        });

        $('.nav-tabs-dropdown').on('click', function (e) {
            e.preventDefault();
            $(e.target).toggleClass('open').next('ul').slideToggle();
        });

        $('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function (e) {
            e.preventDefault();
            $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
        });

    </script>

    <script>
        $('.nav-tabs-dropdown1').each(function (i, elm) {
            $(elm).text($(elm).next('ul').find('li.active a').text());
        });

        $('.nav-tabs-dropdown1').on('click', function (e) {
            e.preventDefault();
            $(e.target).toggleClass('open').next('ul').slideToggle();
        });

        $('#nav-tabs-wrapper1 a[data-toggle="tab"]').on('click', function (e) {
            e.preventDefault();
            $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
        });




    </script>
    <script src="https://iimk.ac.in/js/lightgallery-all.min.js"></script>


    <script type="text/javascript">
        $('#bootstrap-touch-slider').bsTouchSlider();
    </script>


    <script src="https://iimk.ac.in/js/jquery.font-accessibility.min.js"></script>
    <script type="text/javascript">
        $(function () {
            /* Basic demo */
            $('#font-setting-basic').easyView({
                container: '#basic'
            });
            /* Custom buttons */
            //$.noConflict();
            $('#font-setting-buttons').easyView({
                container: '#buttons',
                increaseSelector: '.increase-me',
                decreaseSelector: '.decrease-me',
                normalSelector: '.reset-me',
                contrastSelector: '.change-me'
            });
        });
    </script>
    <!--menu script-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#respMenu").aceResponsiveMenu({
                resizeWidth: '768', // Set the same in Media query
                animationSpeed: 'fast', //slow, medium, fast
                accoridonExpAll: false //Expands all the accordion menu on click
            });

        });
    </script>
    <!--menu script-->

    <!--menu script-->
    <script type="text/javascript">
        //$("a[data-toggle=modal]").click(function()
        //var $vdo = jQuery.noConflict();
        $(".publicatModelvideo").click(function () {
            var id = $(this).attr('id');
            $.ajax({
                cache: false,
                type: 'POST',
                url: "https://iimk.ac.in/php/ajax/ajax_video.php",
                data: 'id=' + id,
                success: function (msg) {

                    var ArrNames = msg.split("~");
                    var video = ArrNames[0];
                    var title = ArrNames[1];
                    //$('#myModal').show();
                    $('#myModal').modal('show');
                    $('#modalContent').show().html(video);
                    $('#title').show().html(title);

                }
            });
        });

    </script>

    <script type="text/javascript">
        function programsEnquiry_submit() {
            var error_flag = 0;
            var msg = '';
            var seperator = 'ENQUIRYS';
            var division = $('#division').val();
            var course = $('#course').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var country = $('#country').val();
            var state = $('#state').val();
            var city = $('#city').val();
            var companys = $('#companys').val();
            var designation = $('#designation').val();
            var yrs = $('#yrs').val();
            var month = $('#month').val();
            var comment = $('#comment').val();
            var capt = $('#capt').val();
            var address = $('#address').val();
            var params = $('#enquirys').serialize();
            var params = params.replace("'", " ");
            var params = params.replace('"', " ");
            if (course == '') {
                document.getElementById('course1').innerText = 'Course required';
                document.getElementById("course1").style.color = "red";
                error_flag = 1;

            }
            else {
                document.getElementById('course1').innerText = '';
                error_flag = 0;
            }
            if (name == '') {
                document.getElementById('name1').innerText = 'Name required';
                document.getElementById("name1").style.color = "red";
                error_flag = 1;

            }
            else if (name != '') {
                /*var alphaExp = /^[a-zA-Z0-9]+[a-zA-Z0-9()&\_ \s\/.,\n]+$/;
                if(name.match(alphaExp)){document.getElementById('name1').innerText = '';}
                else{document.getElementById('name1').innerText = 'Invalid name';
                document.getElementById("name1").style.color = "red";
                error_flag=1;}*/
            }

            else {
                document.getElementById('name1').innerText = '';
                error_flag = 0;
            }
            if (email == '') {
                document.getElementById('email1').innerText = 'Email required';
                document.getElementById("email1").style.color = "red";
                error_flag = 1;
                //return false;
            }
            else if (email != '') {
                var alphaExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (email.match(alphaExp)) { document.getElementById('email1').innerText = ''; }
                else {
                    document.getElementById('email1').innerText = 'Invalid email';
                    document.getElementById("email1").style.color = "red";
                    error_flag = 1;
                }
            }

            else {
                document.getElementById('email1').innerText = '';
                error_flag = 0;
            }
            if (mobile == '') {
                document.getElementById('mobile1').innerText = 'Mobile required';
                document.getElementById("mobile1").style.color = "red";
                error_flag = 1;
                //return false;
            }
            else if (mobile != '') {
                var alphaExp = /^[0-9+-.' ']*$/;
                if (mobile.match(alphaExp)) { document.getElementById('mobile1').innerText = ''; }
                else {
                    document.getElementById('mobile1').innerText = 'Invalid mobile no.';
                    document.getElementById("mobile1").style.color = "red";
                    error_flag = 1;
                }
            }
            else {
                document.getElementById('mobile1').innerText = '';
                error_flag = 0;
            }
            if (address == '') {
                document.getElementById('address1').innerText = 'Address required';
                document.getElementById("address1").style.color = "red";
                error_flag = 1;
                //return false;
            }
            else if (address != '') {
                /*var alphaExp = /^[a-zA-Z0-9]+[a-zA-Z0-9()'\._:,-\s\/&\n]+$/;
                if(address.match(alphaExp)){document.getElementById('address1').innerText = '';}
                else{document.getElementById('address1').innerText = 'Invalid address';
                document.getElementById("address1").style.color = "red";
                error_flag=1;}*/
            }
            else {
                document.getElementById('address1').innerText = '';
                error_flag = 0;
            }

            if (country == '') {
                document.getElementById('country1').innerText = 'Country required';
                document.getElementById("country1").style.color = "red";
                error_flag = 1;
                //return false;
            }
            else {
                document.getElementById('country1').innerText = '';
                error_flag = 0;
            }
            if (state == '') {
                document.getElementById('state1').innerText = 'State required';
                document.getElementById("state1").style.color = "red";
                error_flag = 1;
                //return false;
            }
            else {
                document.getElementById('state1').innerText = '';
                error_flag = 0;
            }
            if (city == '') {
                //document.getElementById('city1').innerText = 'City required';
                //document.getElementById("city1").style.color = "red";
                //error_flag=1;
                //return false;
            }
            else {
                document.getElementById('city1').innerText = '';
                error_flag = 0;
            }
		/*if(companys==''){
			document.getElementById('companys1').innerText = 'Company required';
			document.getElementById("companys1").style.color = "red";
			error_flag=1;
			//return false;
		}
		else*/ if (companys != '') {
                /*var alphaExp = /^[a-zA-Z0-9]+[a-zA-Z0-9()'\._:,-\s\/&\n]+$/;
                if(companys.match(alphaExp)){document.getElementById('companys1').innerText = '';}
                else{document.getElementById('companys1').innerText = 'Invalid company name';
                document.getElementById("companys1").style.color = "red";
                error_flag=1;}*/
            }
            else {
                document.getElementById('companys1').innerText = '';
                error_flag = 0;
            }
		/*if(designation==''){
			document.getElementById('designation1').innerText = 'Designation required';
			document.getElementById("designation1").style.color = "red";
			error_flag=1;
			//return false;
		}
		else*/ if (designation != '') {
                /*var alphaExp = /^[a-zA-Z0-9]+[a-zA-Z0-9()'\._:,-\s\/&\n]+$/;
                if(designation.match(alphaExp)){document.getElementById('designation1').innerText = '';}
                else{document.getElementById('designation1').innerText = 'Invalid designation';
                document.getElementById("designation1").style.color = "red";
                error_flag=1;}*/
            }
            else {
                document.getElementById('designation1').innerText = '';
                error_flag = 0;
            }
            /*if(yrs==''){
                document.getElementById('yrs1').innerText = 'Year required';
                document.getElementById("yrs1").style.color = "red";
                error_flag=1;
                //return false;
            }
    
            else
            {
                document.getElementById('yrs1').innerText = '';
                error_flag=0;
            }
            if(month==''){
                document.getElementById('month1').innerText = 'Month required';
                document.getElementById("month1").style.color = "red";
                error_flag=1;
                //return false;
            }
    
            else
            {
                document.getElementById('month1').innerText = '';
                error_flag=0;
            }*/
            if (comment != '') {
                /*var alphaExp = /^[a-zA-Z0-9]+[a-zA-Z0-9()'\._:,-\s\/&\n]+$/;
                if(comment.match(alphaExp)){document.getElementById('comment1').innerText = '';}
                else{document.getElementById('comment1').innerText = 'Invalid comment';
                document.getElementById("comment1").style.color = "red";
                error_flag=1;}*/
            }
            else {
                document.getElementById('comment1').innerText = '';
                error_flag = 0;
            }

            if (capt == '') {
                document.getElementById('capt1').innerText = 'Security code required';
                document.getElementById("capt1").style.color = "red";
                error_flag = 1;
                //return false;
            }
            else if (capt != '') {
                /*var alphaExp = /^[a-zA-Z0-9]+/;
                if(capt.match(alphaExp)){document.getElementById('capt1').innerText = '';}
                else{document.getElementById('capt1').innerText = 'Invalid  security code';
                document.getElementById("capt1").style.color = "red";
                error_flag=1;}*/
            }

            else {
                document.getElementById('capt1').innerText = '';
                error_flag = 0;
            }

            if (error_flag == 1) {
                return false;
            }



            $.ajax({
                type: "POST",
                url: "https://iimk.ac.in/php/ajax/ajax_enq.php",
                data: params + "&seperator=" + seperator + "&capt=" + capt,
                cache: false,
                success: function (msg) {
                    var nwmsg = msg.split('**');

                    //if(nwmsg[0]==1){document.getElementById('capt_span').innerText = '';}
                    //var mssg = nwmsg[1];
                    if (nwmsg[0] == 0) {
                        $('#division').val('');
                        $('#course').val('');
                        $('#name').val('');
                        $('#email').val('');
                        $('#mobile').val('');
                        $('#country').val('');
                        $('#state').val('');
                        $('#city').val('');
                        $('#companys').val('');
                        $('#designation').val('');
                        $('#yrs').val('');
                        $('#month').val('');
                        $('#comment').val('');
                        $('#capt').val('');
                        $('#address').val('');
                        document.getElementById('msg_span').innerText = nwmsg[15];
                        document.getElementById("msg_span").style.color = "green";
                    }
                    else {
                        document.getElementById('capt1').innerText = nwmsg[1];
                        document.getElementById("capt1").style.color = "red";
                        document.getElementById('course1').innerText = nwmsg[2];
                        document.getElementById("course1").style.color = "red";
                        document.getElementById('name1').innerText = nwmsg[3];
                        document.getElementById("name1").style.color = "red";
                        document.getElementById('email1').innerText = nwmsg[4];
                        document.getElementById("email1").style.color = "red";
                        document.getElementById('mobile1').innerText = nwmsg[5];
                        document.getElementById("mobile1").style.color = "red";
                        document.getElementById('address1').innerText = nwmsg[6];
                        document.getElementById("address1").style.color = "red";
                        document.getElementById('country1').innerText = nwmsg[7];
                        document.getElementById("country1").style.color = "red";
                        document.getElementById('state1').innerText = nwmsg[8];
                        document.getElementById("state1").style.color = "red";
                        document.getElementById('city1').innerText = nwmsg[9];
                        document.getElementById("city1").style.color = "red";
                        document.getElementById('designation1').innerText = nwmsg[10];
                        document.getElementById("designation1").style.color = "red";
                        document.getElementById('yrs1').innerText = nwmsg[11];
                        document.getElementById("yrs1").style.color = "red";
                        document.getElementById('month1').innerText = nwmsg[12];
                        document.getElementById("month1").style.color = "red";
                        document.getElementById('comment1').innerText = nwmsg[13];
                        document.getElementById("comment1").style.color = "red";
                        document.getElementById('companys1').innerText = nwmsg[14];
                        document.getElementById("companys1").style.color = "red";
                        document.getElementById('msg_span').innerText = nwmsg[0];
                        document.getElementById("msg_span").style.color = "red";
                        document.getElementById('msg_span').innerText = nwmsg[15];
                        document.getElementById("msg_span").style.color = "red";
                    }
                },
                error: function () {
                    alert('Server Busy');
                }
            });
            return false;
        }
        $(document).ready(function () {
            $("#country").change(function () {
                var vals = $(this).val();
                var seperator = 'GET_STAT';
                $.ajax({

                    cache: 'false',
                    type: 'POST',
                    url: 'https://iimk.ac.in/php/ajax/ajax_enq.php',
                    data: 'vals=' + vals + '&seperator=' + seperator,
                    success: function (msg) {
                        $("#state").html(msg);

                    },
                    error: function () {
                        alert('Server Busy');
                    }

                });
            });
            $("#state").change(function () {
                var states = $('#state').val();
                var seperator = 'GET_CTYS';
                $.ajax({

                    cache: 'false',
                    type: 'POST',
                    url: 'https://iimk.ac.in/php/ajax/ajax_enq.php',
                    data: 'states=' + states + '&seperator=' + seperator,
                    success: function (msg) {
                        $("#city").html(msg);

                    },
                    error: function () {
                        alert('Server Busy');
                    }

                });
            });
        });
        function loadCareerPopup(vacancy_id, candidate_id) {
            var seperator = 'VACANCY_DETAILS';
            $.ajax({

                cache: 'false',
                type: 'POST',
                url: 'https://iimk.ac.in/php/ajax/ajax_careers.php',
                data: 'vacancy_id=' + vacancy_id + '&seperator=' + seperator + '&candidate_id=' + candidate_id,
                success: function (msg) {
                    //$("#city").html(msg);
                    $("#careerModalContent").html(msg);
                    $("#myModalCareer").modal('show');

                },
                error: function () {
                    alert('Server Busy');
                }

            });

        }
    </script>
    <script src="https://cdn.npfs.co/js/widget/npfwpopup.js"></script>


    <script type="text/javascript">
        // function googleTranslateElementInit() { 
        //     new google.translate.TranslateElement(
        //         {pageLanguage: 'en',includedLanguages : 'en,hi'}, 
        //         'google_translate_element'
        //     ); 
        // } 

        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {
                    pageLanguage: 'en', // Default language of the page
                    includedLanguages: 'en,hi', // Specify available languages
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                },
                'google_translate_element'
            );
        }

        // Track Language Selection
        function trackSelectedLanguage() {
            // Check for language changes by observing the <html> tag's lang attribute
            const currentLanguage = document.documentElement.lang;
            console.log('Selected Language:', currentLanguage);

            // Send data to Google Analytics (example for GA4)
            gtag('event', 'language_change', {
                event_category: 'Language',
                event_label: currentLanguage,
            });

            // Optional: Send data to a custom logging endpoint
            // fetch('/log_language', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify({ language: currentLanguage })
            // });
        }

        // Detect changes in the language
        const observer = new MutationObserver(() => {
            trackSelectedLanguage();
        });

        // Observe changes to the lang attribute on the <html> element
        observer.observe(document.documentElement, { attributes: true, attributeFilter: ['lang'] });



    </script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $(document).ready(function () {
            $("form").attr('autocomplete', 'off');
        });


        const root = document.documentElement;
        // Get the toggle button
        const toggle = document.getElementById("toggle1"); const toggle2 = document.getElementById("toggle2");
        // Get the user's preference from localStorage
        const darkMode = localStorage.getItem("dark-mode");
        // Check if the user has already chosen a theme
        if (darkMode) {
            // If yes, apply it to the root element
            root.classList.add("dark-theme");
        }
        // Add an event listener to the toggle button
        toggle.addEventListener("click", () => {
            // Toggle the dark-theme class on the root element
            root.classList.toggle("dark-theme");
            // Store or remove the user's preference in localStorage
            if (root.classList.contains("dark-theme")) {
                localStorage.setItem("dark-mode", true);
            } else {
                localStorage.removeItem("dark-mode");
            }
        });
        toggle2.addEventListener("click", () => {
            // Toggle the dark-theme class on the root element
            root.classList.toggle("dark-theme");
            // Store or remove the user's preference in localStorage
            if (root.classList.contains("dark-theme")) {
                localStorage.setItem("dark-mode", true);
            } else {
                localStorage.removeItem("dark-mode");
            }
        });

    </script>
    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
        style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
        data-id="">
        <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
            <div class="VIpgJd-yAWNEb-hvhgNd-Ud7fr"><img
                    src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24"
                    alt="">
                <div class=" VIpgJd-yAWNEb-hvhgNd-IuizWc-i3jM8c " dir="ltr">Original text</div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-k77Iif">
                <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
                <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
                    <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div>
                    <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate
                    </div>
                </div>
                <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation"
                        aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z">
                                </path>
                            </svg></span></button><button id="goog-gt-thumbDownButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation"
                        aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z">
                                </path>
                            </svg></span></button></div>
            </div>
            <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
                <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te"
                    method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl"
                        id="goog-gt-votingInputSrcLang"><input type="text" name="tl"
                        id="goog-gt-votingInputTrgLang"><input type="text" name="query"
                        id="goog-gt-votingInputSrcText"><input type="text" name="gtrans"
                        id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote">
                </form><iframe name="votingFrame" frameborder="0"></iframe>
            </div>
        </div>
    </div>


    <div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
        <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe"
                width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33"
                    cy="33" r="30"></circle>
            </svg></div>
    </div><iframe frameborder="0" class="VIpgJd-ZVi9od-xl07Ob-OEVmcd skiptranslate" title="Language Translate Widget"
        style="visibility: visible; box-sizing: content-box; width: 128px; height: 56px; display: none;"></iframe>
</body>

</html>
>>>>>>> e06d5e3c58335175348d9bf920e0650f22442e40
