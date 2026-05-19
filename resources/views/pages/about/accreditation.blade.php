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

        <article class="intl-ranking-card">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">QS Ranking</span>
                    <h4>QS Masters in Management Rankings (PGP)</h4>
                </div>
                <span class="intl-latest-rank">2026: 141-150 Global / 12 Asia</span>
            </div>

            <div class="intl-year-grid">
                <div class="intl-year-item">
                    <span>2021</span>
                    <strong>101+</strong>
                    <small>Global</small>
                    <em>7+ Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2022</span>
                    <strong>141+</strong>
                    <small>Global</small>
                    <em>10 Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2023</span>
                    <strong>151+</strong>
                    <small>Global</small>
                    <em>14+ Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2024</span>
                    <strong>151+</strong>
                    <small>Global</small>
                    <em>16+ Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2025</span>
                    <strong>151+</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item featured">
                    <span>2026</span>
                    <strong>141-150</strong>
                    <small>Global</small>
                    <em>12 Asia</em>
                </div>
            </div>
        </article>

        <article class="intl-ranking-card">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">QS Ranking</span>
                    <h4>QS Executive MBA Rankings (EPGP)</h4>
                </div>
                <span class="intl-latest-rank">2025: 161-170 Global / =22 Asia</span>
            </div>

            <div class="intl-year-grid">
                <div class="intl-year-item">
                    <span>2021</span>
                    <strong>151+</strong>
                    <small>Global</small>
                    <em>16+ Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2022</span>
                    <strong>171+</strong>
                    <small>Global</small>
                    <em>30 Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2023</span>
                    <strong>181+</strong>
                    <small>Global</small>
                    <em>33 Asia</em>
                </div>

                <div class="intl-year-item">
                    <span>2024</span>
                    <strong>171+</strong>
                    <small>Global</small>
                    <em>21 Asia</em>
                </div>

                <div class="intl-year-item featured">
                    <span>2025</span>
                    <strong>161-170</strong>
                    <small>Global</small>
                    <em>=22 Asia</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2026</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>
            </div>
        </article>

        <article class="intl-ranking-card">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">QS Ranking</span>
                    <h4>QS Business Master’s Rankings: Finance</h4>
                </div>
                <span class="intl-latest-rank">2026: 201+ Global / 12 Asia</span>
            </div>

            <div class="intl-year-grid intl-year-grid-short">
                <div class="intl-year-item muted">
                    <span>2021</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2022</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2023</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2024</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item">
                    <span>2025</span>
                    <strong>151+</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item featured">
                    <span>2026</span>
                    <strong>201+</strong>
                    <small>Global</small>
                    <em>12 Asia</em>
                </div>
            </div>
        </article>

        <article class="intl-ranking-card">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">QS Ranking</span>
                    <h4>QS Global MBA Rankings - PGP BL</h4>
                </div>
                <span class="intl-latest-rank">2026: 201-250 Global / 30 Asia</span>
            </div>

            <div class="intl-year-grid">
                <div class="intl-year-item muted">
                    <span>2021</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2022</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2023</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2024</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item">
                    <span>2025</span>
                    <strong>151-200</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item featured">
                    <span>2026</span>
                    <strong>201-250</strong>
                    <small>Global</small>
                    <em>30 Asia</em>
                </div>
            </div>
        </article>

        <article class="intl-ranking-card">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">QS Ranking</span>
                    <h4>QS Online MBA World Ranking (EPGP Kochi)</h4>
                </div>
                <span class="intl-latest-rank">2026: 53 Global / 1 Asia</span>
            </div>

            <div class="intl-year-grid">
                <div class="intl-year-item muted">
                    <span>2021</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2022</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2023</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2024</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item muted">
                    <span>2025</span>
                    <strong>-</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item featured">
                    <span>2026</span>
                    <strong>53</strong>
                    <small>Global</small>
                    <em>1 Asia</em>
                </div>
            </div>
        </article>

        <article class="intl-ranking-card">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">QS Subject Ranking</span>
                    <h4>QS World University Ranking by Subject: Business and Management Studies</h4>
                </div>
                <span class="intl-latest-rank">2026: 78 Global</span>
            </div>

            <div class="intl-year-grid">
                <div class="intl-year-item">
                    <span>2021</span>
                    <strong>401-450</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item">
                    <span>2022</span>
                    <strong>351-400</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item">
                    <span>2023</span>
                    <strong>251-300</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item">
                    <span>2024</span>
                    <strong>151-200</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item">
                    <span>2025</span>
                    <strong>=141</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>

                <div class="intl-year-item featured">
                    <span>2026</span>
                    <strong>78</strong>
                    <small>Global</small>
                    <em>-</em>
                </div>
            </div>
        </article>

        <article class="intl-ranking-card compact">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">Eduniversal</span>
                    <h4>Eduniversal Rankings</h4>
                </div>
                <span class="intl-latest-rank">4 Palmes of Excellence</span>
            </div>

            <div class="intl-badge-row">
                <span>2021 - 4 Palmes</span>
                <span>2022 - 4 Palmes</span>
                <span>2023 - 4 Palmes</span>
                <span>2024 - 4 Palmes</span>
                <span>2025 - 4 Palmes</span>
                <span>2026 - 4 Palmes</span>
            </div>
        </article>

        <article class="intl-ranking-card compact">
            <div class="intl-ranking-card-head">
                <div>
                    <span class="intl-ranking-type">Financial Times</span>
                    <h4>Financial Times Rankings</h4>
                </div>
                <span class="intl-latest-rank">Multiple Global Recognitions</span>
            </div>

            <div class="ft-ranking-grid">
                <div>
                    <span>Executive Education Open</span>
                    <strong>2023: 72nd</strong>
                    <strong>2024: 70th</strong>
                    <strong>2025: 76th</strong>
                </div>

                <div>
                    <span>Executive Education Custom</span>
                    <strong>2025: 87th</strong>
                </div>

                <div>
                    <span>Masters in Management</span>
                    <strong>2023: 77th</strong>
                    <strong>2024: 68th</strong>
                    <strong>2025: =69th</strong>
                </div>

                <div>
                    <span>MBA - PGP BL</span>
                    <strong>2025: =86th</strong>
                    <strong>2026: =65</strong>
                </div>
            </div>
        </article>

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
                                            <th>2021</th>
                                            <th>2022</th>
                                            <th>2023</th>
                                            <th>2024</th>
                                            <th>2025</th>
                                            <th>2026</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>National Institutional Ranking Framework (NIRF)*</td>
                                            <td>4<sup>th</sup></td>
                                            <td><a href="https://www.nirfindia.org/2022/ManagementRanking.html" target="_blank" rel="noopener">5<sup>th</sup></a></td>
                                            <td><a href="https://www.nirfindia.org/2023/ManagementRanking.html" target="_blank" rel="noopener">3<sup>rd</sup></a></td>
                                            <td><a href="https://www.nirfindia.org/2023/ManagementRanking.html" target="_blank" rel="noopener">3<sup>rd</sup></a></td>
                                            <td><a href="https://www.nirfindia.org/Rankings/2025/ManagementRanking.html" target="_blank" rel="noopener">3<sup>rd</sup></a></td>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <td>The Week</td>
                                            <td>4<sup>th</sup></td>
                                            <td>3<sup>rd</sup></td>
                                            <td>3<sup>rd</sup></td>
                                            <td>3<sup>rd</sup></td>
                                            <td>NP</td>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <td>Fortune India B School Ranking</td>
                                            <td>-</td>
                                            <td>5<sup>th</sup></td>
                                            <td>5<sup>th</sup></td>
                                            <td>6<sup>th</sup></td>
                                            <td><a href="https://www.businesstoday.in/bt-schools" target="_blank" rel="noopener">4<sup>th</sup></a></td>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <td>Business Today / MDRA</td>
                                            <td>NP</td>
                                            <td>NP</td>
                                            <td>NP</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <td>Times B School Ranking</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="https://timesbschoolsurvey.org/mba/index.html" target="_blank" rel="noopener">1<sup>st</sup></a></td>
                                            <td><a href="https://www.timesbschoolsurvey.org/mba/index.html" target="_blank" rel="noopener">1<sup>st</sup></a></td>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <td>Careers 360 Ranking</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="https://bschool.careers360.com/colleges/ranking" target="_blank" rel="noopener">3<sup>rd</sup></a></td>
                                            <td><a href="https://bschool.careers360.com/colleges/ranking" target="_blank" rel="noopener">3<sup>rd</sup></a></td>
                                        </tr>

                                        <tr>
                                            <td>Business Today B School Ranking for one year Programmes (PGP BL)</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="https://www.businesstoday.in/bt-schools" target="_blank" rel="noopener">5<sup>th</sup></a></td>
                                            <td>-</td>
                                        </tr>
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