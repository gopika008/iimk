@extends('layouts.app')

@section('title', 'Director | IIM Kozhikode')

@section('content')
<section class="about-hero">
  <div class="container">
    <div class="breadcrumb-mini">
      <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/about') }}">About</a> / Director
    </div>
    <h1 class="hero-title">Director</h1>
    <p class="hero-sub">Message from the Director of IIM Kozhikode</p>
    <div class="gold-line"></div>
  </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'director'])

<main class="page-wrap">
  <div class="container">
    <div class="row g-4">

      <aside class="col-lg-3">
         @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'director'])
      </aside>

      <section class="col-lg-9">
        <div class="content-card">

          <section id="director" style="background:linear-gradient(135deg,#f7fbff,#eef5ff);">
            <div class="row g-4 align-items-center">
              <div class="col-md-4">
                <div class="director-photo-card">
                  <img src="{{ asset('images/director.jpg') }}"
                       alt="Prof. Debashis Chatterjee, Director, IIM Kozhikode"
                       class="img-fluid rounded-4 shadow">
                </div>
              </div>

              <div class="col-md-8">
                <div class="section-kicker">Director</div>
                <h2 class="section-heading mb-2">Prof. Debashis Chatterjee</h2>
                <p class="lead-copy mb-2">
                  Director, Indian Institute of Management Kozhikode
                </p>
                <p class="mb-0">
                  Prof. Debashis Chatterjee leads IIM Kozhikode with a vision to strengthen
                  management education, research excellence, institutional innovation, and
                  responsible leadership for a changing world.
                </p>
              </div>
            </div>
          </section>

          <section id="message" style="background:linear-gradient(135deg,#fffaf0,#fff4d8);">
            <div class="section-kicker">Director's Message</div>
            <h2 class="section-heading">Globalizing Indian Thought</h2>

            <p class="lead-copy">
              IIM Kozhikode stands as a symbol of academic excellence, innovation, inclusion,
              and impact. From its serene campus in Kerala, the Institute continues to shape
              future-ready leaders who combine managerial competence with social responsibility.
            </p>

            <p>
              Our journey is guided by the belief that management education must go beyond
              classrooms and credentials. It must inspire curiosity, ethical action, original
              thinking, and the courage to address complex challenges faced by business and
              society.
            </p>

            <p>
              As we move forward, IIM Kozhikode remains committed to nurturing leaders who
              are globally aware, locally rooted, and deeply conscious of the human purpose
              of enterprise.
            </p>

            <blockquote class="director-quote">
              "Our vision is to globalize Indian thought and create responsible leaders who
              can transform organizations, communities, and society."
            </blockquote>
          </section>

          <section id="focus" style="background:linear-gradient(135deg,#f2fff8,#e6f7ef);">
            <div class="section-kicker">Institutional Focus</div>
            <h2 class="section-heading">Leadership Priorities</h2>

            <div class="row g-3">
              <div class="col-md-6">
                <div class="stat-card h-100">
                  <i class="bi bi-mortarboard"></i>
                  <strong>Learning</strong>
                  <span>Transformative academic programmes and lifelong learning.</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="stat-card h-100">
                  <i class="bi bi-lightbulb"></i>
                  <strong>Innovation</strong>
                  <span>New ideas in pedagogy, research, entrepreneurship, and governance.</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="stat-card h-100">
                  <i class="bi bi-globe2"></i>
                  <strong>Global Outlook</strong>
                  <span>International collaborations and global academic engagement.</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="stat-card h-100">
                  <i class="bi bi-people"></i>
                  <strong>Inclusion</strong>
                  <span>Diversity, access, equity, and responsible institutional growth.</span>
                </div>
              </div>
            </div>
          </section>

        </div>
      </section>

    </div>
  </div>
</main>
@endsection

@push('styles')
<style>
  .director-photo-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 24px;
    padding: .75rem;
    box-shadow: var(--shadow);
  }

  .director-quote {
    margin: 1.5rem 0 0;
    padding: 1.2rem 1.4rem;
    border-left: 5px solid var(--gold);
    background: rgba(255,255,255,.72);
    border-radius: 16px;
    color: var(--blue);
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.7;
  }
</style>
@endpush