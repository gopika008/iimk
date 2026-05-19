@extends('layouts.app')

@section('title', 'Programme Fees | International Relations | IIM Kozhikode')

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
                <span>Programme Fees</span>
            </div>

            <div class="international-hero-badge">
                <i class="bi bi-cash-coin"></i>
                International Admissions
            </div>

            <h1 class="international-hero-title">
                Programme Fees
            </h1>

            <p class="international-hero-sub">
                Fee details for international candidates admitted to IIM Kozhikode’s MBA programmes.
            </p>
        </div>
    </div>
</section>
@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.international_sidebar'), 'active' => 'ir-programme-fees'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                          @include('partials.inner-sidebar', [
            'items' => config('iimk_navigation.international_sidebar'),
            'title' => 'International Relations',
            'eyebrow' => 'Global IIMK',
            'active' => 'ir-programme-fees'
        ])
          
            </div>

            <div class="col-lg-9">
                <main class="ir-home-card">

                    <section class="ir-fees-section">
                        <div class="section-kicker">Batch 2026-28</div>
                        <h2 class="section-heading">Programme Fees</h2>

                        <p class="lead-copy">
                            The current total fee for international candidates admitted to IIM Kozhikode's MBA programmes
                            <strong>PGP, PGP-Finance, PGP-LSM</strong> is <strong>USD 30,000</strong>.
                        </p>

                        <!-- <div class="ir-fee-hero-card">
                            <div class="ir-fee-hero-icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>

                            <div>
                                <span>Total Programme Fee</span>
                                <strong>USD 30,000</strong>
                                <p>
                                    Applicable for international candidates admitted to PGP, PGP-Finance and PGP-LSM.
                                </p>
                            </div>
                        </div> -->

                        <div class="ir-fee-grid mt-4">

                            <article class="ir-fee-card">
                                <div class="ir-fee-year">First Year</div>
                                <div class="ir-fee-amount">USD 15,000</div>
                                <p>
                                    Fee payable for the first year of the programme.
                                </p>
                            </article>

                            <article class="ir-fee-card">
                                <div class="ir-fee-year">Second Year</div>
                                <div class="ir-fee-amount">USD 15,000</div>
                                <p>
                                    Fee payable for the second year of the programme.
                                </p>
                            </article>

                        </div>

                        <div class="ir-fee-summary mt-4">
                            <div>
                                <h3>Fee Summary</h3>
                                <p>
                                    The programme fee is divided equally across the two academic years.
                                </p>
                            </div>

                            <div class="ir-fee-summary-amount">
                                <span>Grand Total</span>
                                <strong>USD 30,000</strong>
                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection