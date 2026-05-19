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
            </div>

        </div>
    </div>
</section>

@endsection
