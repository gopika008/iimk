@extends('layouts.app')
@section('title', 'About IIM Kozhikode')
@section('meta_description', 'About Indian Institute of Management Kozhikode')
@section('hero')
<section class="about-hero"><div class="container"><div class="col-lg-7"><div class="breadcrumb-mini"><a href="{{ url('/') }}">Home</a> <i class="bi bi-chevron-right small mx-1"></i> About</div><h1 class="hero-title">About IIM Kozhikode</h1><p class="hero-sub">Globalizing Indian Thought.</p><div class="gold-line"></div></div></div></section>
@endsection
@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'overview']) @endsection
@section('content')
<div class="page-wrap">
    <div class="container">
        <div class="row g-4">
            <aside class="col-lg-3 d-none d-lg-block">
                @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'overview'])
            </aside>
           <section class="col-lg-9 content-card">
                <section id="overview" class="mb-4">
                <div class="section-kicker">Overview</div>
                <h2 class="section-heading">A leading management school with a distinctive Indian voice</h2>
                <p class="lead-copy">Established in 1996 through a collaboration between the Government of India and the State Government of Kerala, IIM Kozhikode is the fifth IIM to be established in India. Located across two hillocks in Kunnamangalam, Calicut, the campus is known for its scenic, green and oxy-rich environment.</p>
                <p>IIMK is devoted to nurturing future business leaders through teaching, learning, consulting, research and innovation. Its growth story is shaped by academic rigour, research focus, education excellence and innovative initiatives that have influenced management education in India.</p>
                <div class="stat-grid">
                    <div class="stat-card"><i class="bi bi-building"></i><strong>1996</strong><span>Year of establishment</span></div>
                    <div class="stat-card"><i class="bi bi-tree"></i><strong>112.5</strong><span>Acres of campus</span></div>
                    <div class="stat-card"><i class="bi bi-people"></i><strong>25000+</strong><span>Alumni Strength</span></div>
                    <div class="stat-card"><i class="bi bi-rocket-takeoff"></i><strong>160+</strong><span>Startups supported by IIMK LIVE</span></div>
                </div>
                </section>

                <div id="video" class="media-panel">
                <div class="media-img"><div class="play"><span><a href="https://www.youtube.com/watch?v=gjSoCgAZKkg" target="_blank"><i class="bi bi-play-fill"></i></a></span></div></div>
                <div class="media-copy">
                    <div class="section-kicker">Experience IIM Kozhikode</div>
                    <h2 class="section-heading h3">A campus where ideas flourish</h2>
                    <p>A serene setting, future-ready infrastructure and vibrant academic culture combine to create a holistic learning experience.</p>
                    <a class="pill-btn" href="https://www.youtube.com/watch?v=gjSoCgAZKkg" target="_blank">Watch Video <i class="bi bi-play-circle"></i></a>
                </div>
                </div>

              <section id="vision" class="mb-4">
  <div class="section-kicker">Vision 2047</div>
  <h2 class="section-heading">Globalizing Indian Thought</h2>

  <p>
    IIM Kozhikode has set itself an institutional Vision 2047 of “Globalizing Indian Thought.”
    The Institute seeks to create a unique space of global reckoning by nurturing capable,
    dependable and socially responsible management thinkers.
  </p>

  <div class="pillars">
    <div class="pillar">
      <i class="bi bi-gem"></i>
      <h3>Satyam</h3>
      <p>Authenticity in knowledge, conduct and leadership.</p>
    </div>

    <div class="pillar">
      <i class="bi bi-recycle"></i>
      <h3>Nityam</h3>
      <p>Sustainability for responsible business and society.</p>
    </div>

    <div class="pillar">
      <i class="bi bi-brightness-high"></i>
      <h3>Purnam</h3>
      <p>Fulfilment through wholesome learning and purpose.</p>
    </div>
  </div>

  <div class="vision-notes mt-4">
    <div class="vision-note">
      <i class="bi bi-globe2"></i>
      <div>
        <h3>Global Outlook</h3>
        <p>International perspective rooted in Indian ethos.</p>
      </div>
    </div>

    <div class="vision-note">
      <i class="bi bi-heart"></i>
      <div>
        <h3>Values</h3>
        <p>Ethics, inclusiveness and impact guide everything we do.</p>
      </div>
    </div>
  </div>
</section>


                <section id="programmes" class="mb-4">
                <div class="section-kicker">Programmes</div>
                <h2 class="section-heading">Innovation in management education</h2>
                <p>From its first flagship PGP batch of 42 students in 1997, IIMK has grown into one of the fastest growing management schools in the country, offering a wide range of academic programmes in management education.</p>
                <div class="info-box p-4 rounded-4 border bg-light">
                    <div class="fw-bold mb-2">Flagship offerings include:</div>
                    <div class="d-flex flex-wrap gap-2">
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">PGP</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">PGP-Finance</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">PGP-BL</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">PGP-LSM</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">Doctoral Programme</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">Executive MBA</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">MDP</span>
                    <span class="badge rounded-pill text-bg-light border text-primary px-3 py-2">FDP</span>
                    </div>
                </div>
                </section>

                <section id="accreditations" class="mb-4">
                <div class="section-kicker">Milestones</div>
                <h2 class="section-heading">Recognition and global relevance</h2>
                <div class="timeline">
                    <div class="milestone"><div class="milestone-icon"><i class="bi bi-building"></i></div><strong>1996</strong><span>Established in Kerala</span></div>
                    <div class="milestone"><div class="milestone-icon"><i class="bi bi-mortarboard"></i></div><strong>1997</strong><span>First flagship PGP batch</span></div>
                    <div class="milestone"><div class="milestone-icon"><i class="bi bi-award"></i></div><strong>2010</strong><span>First IIM to receive AMBA</span></div>
                    <div class="milestone"><div class="milestone-icon"><i class="bi bi-globe"></i></div><strong>2021</strong><span>EQUIS accreditation</span></div>
                    <div class="milestone"><div class="milestone-icon"><i class="bi bi-trophy"></i></div><strong>2025</strong><span>NIRF rank 3 in Management</span></div>
                    <div class="milestone"><div class="milestone-icon"><i class="bi bi-graph-up-arrow"></i></div><strong>2026</strong><span>QS Online MBA global rank 53</span></div>
                </div>
                <p>IIMK secured the 3rd position among management institutes in NIRF 2025 and continues to strengthen its profile in QS and Financial Times rankings.</p>
                <a class="pill-btn" href="#">Know More About Accreditations <i class="bi bi-arrow-right"></i></a>
                </section>

                <section id="innovation" class="why-grid">
                <div>
                    <div class="section-kicker">Why IIMK?</div>
                    <h2 class="section-heading">Innovation, inclusion and impact</h2>
                    <p>IIMK has pioneered initiatives in gender parity, executive education, digital libraries, incubation and inclusive growth.</p>
                    <ul class="check-list">
                    <li><i class="bi bi-check-circle-fill"></i> First IIM to receive AMBA accreditation.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Home to the first Museum of Indian Business.</li>
                    <li><i class="bi bi-check-circle-fill"></i> 1300 MDPs conducted for 41,000+ participants.</li>
                    <li><i class="bi bi-check-circle-fill"></i> IIMK LIVE has supported 155 startups and 357 promoters.</li>
                    </ul>
                    
                </div>
                <div class="why-image"><div class="play"><span><a href="https://www.youtube.com/watch?v=qp6WFDWcYT4" target="_blank"><i class="bi bi-play-fill"></i></a></span></div></div>
                </section>

                <section id="international" class="mb-4">
                <div class="section-kicker">Internationalisation</div>
                <h2 class="section-heading">Global partnerships and exchange</h2>
                <p>The Institute has a strong International Exchange Programme for students and faculty with leading management institutes across Europe, ASEAN and beyond, including SDA Bocconi, ESCP Business School, King’s Business School, IE Business School and University of Wollongong.</p>
                <a class="pill-btn" href="#">Know More About International Exchange Programme<i class="bi bi-arrow-right"></i></a>
                </section>

                <section id="centres">
                <div class="section-kicker">Centres of Excellence</div>
                <h2 class="section-heading">Focused centres for emerging priorities</h2>
                <div class="row g-3">
                <a class="pill-btn" href="#">List of Centres of Excellence <i class="bi bi-arrow-right"></i></a>
                
                </div>
                </section>
            </section>
        </div>
    </div>
</div>
@endsection
