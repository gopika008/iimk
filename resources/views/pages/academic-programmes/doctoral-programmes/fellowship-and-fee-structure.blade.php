@extends('layouts.app')

@section('title', 'Fellowship & Fee Structure | Doctoral Programmes | IIM Kozhikode')

@section('content')

<section class="doctoral-hero">
    <div class="doctoral-hero-overlay"></div>

    <div class="container position-relative">
        <div class="doctoral-hero-content">

            <div class="breadcrumb-mini doctoral-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-2">/</span>
                <span>Academic Programmes</span>
                <span class="mx-2">/</span>
                <a href="{{ url('/academic-programmes/doctoral-programmes') }}">Doctoral Programmes</a>
                <span class="mx-2">/</span>
                <span>Fellowship & Fee Structure</span>
            </div>

            <div class="doctoral-hero-badge">
                <i class="bi bi-cash-coin"></i>
                Doctoral Programmes
            </div>

            <h1 class="doctoral-hero-title">
                Fellowship & Fee Structure
            </h1>

            <p class="doctoral-hero-sub">
                Programme-wise fellowship, tuition waiver, fee structure and extension-related information
                for doctoral students.
            </p>

        </div>
    </div>
</section>
@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.academic_programmes_sidebar'), 'active' => 'doctoral-fellowship']) @endsection


<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                 @include('partials.inner-sidebar', ['items' => config('iimk_navigation.academic_programmes_sidebar'),'title' => 'Doctoral Programmes',
                    'eyebrow' => 'Academic structure',
                    'active' => 'doctoral-fellowship'])                
            </div>

            <div class="col-lg-9">
                <main class="doctoral-home-card">

                    <section class="doctoral-fee-section">
                        <div class="section-kicker">Financial Support</div>
                        <h2 class="section-heading">Fellowship & Fee Structure</h2>

                        <p class="lead-copy">
                            IIM Kozhikode provides programme-specific financial support and fee structures for its doctoral programmes.
                            The DPM includes tuition fee exemption and monthly fellowship, while the Teaching Track and Practice Track
                            follow defined programme fee structures.
                        </p>

                        <div class="doctoral-fee-hero">
                            <div class="doctoral-fee-hero-icon">
                                <i class="bi bi-award"></i>
                            </div>

                            <div>
                                <span>Doctoral Financial Framework</span>
                                <h3>Fellowship support and programme-wise fee structure</h3>
                                <p>
                                    Financial provisions vary across DPM, DPM Teaching Track and DPM Practice Track,
                                    reflecting the structure and mode of each doctoral pathway.
                                </p>
                            </div>
                        </div>

                        <div class="doctoral-fee-programme-panel mt-4">

    <article class="doctoral-dpm-fellowship-card">
        <div class="doctoral-fee-card-top">
            <div class="doctoral-fee-icon">
                <i class="bi bi-journal-richtext"></i>
            </div>
            <span>DPM</span>
        </div>

        <h3>Fellowship &amp; Tuition</h3>

        <p>
            Doctoral students admitted to the DPM are <strong>exempted from tuition fees</strong>
            and receive a monthly fellowship linked to programme milestones.
        </p>

        <div class="doctoral-fellowship-progress">

            <div class="doctoral-fellowship-progress-item">
                <div class="doctoral-fellowship-stage">
                    <span>Stage 1</span>
                    <strong>&#8377;42,000</strong>
                    <small>per month</small>
                </div>
                <p>
                    Until completion of the Comprehensive Qualifying Examination.
                </p>
            </div>

            <div class="doctoral-fellowship-progress-item">
                <div class="doctoral-fellowship-stage">
                    <span>Stage 2</span>
                    <strong>&#8377;45,000</strong>
                    <small>per month</small>
                </div>
                <p>
                    After successful completion of the Comprehensive Qualifying Examination.
                </p>
            </div>

            <div class="doctoral-fellowship-progress-item">
                <div class="doctoral-fellowship-stage">
                    <span>Stage 3</span>
                    <strong>&#8377;50,000</strong>
                    <small>per month</small>
                </div>
                <p>
                    After successful presentation and defence of the thesis proposal.
                </p>
            </div>

        </div>
    </article>

    <div class="doctoral-track-fee-grid">

        <article class="doctoral-track-fee-card">
            <div class="doctoral-track-fee-top">
                <div class="doctoral-track-fee-icon">
                    <i class="bi bi-display"></i>
                </div>
                <span>DPM Teaching Track</span>
            </div>

            <h3>Programme Fee</h3>

            <div class="doctoral-track-fee-amount">
                <small>Total Fee</small>
                <strong>&#8377;5,00,000</strong>
            </div>

            <p>
                Doctoral students admitted to the DPM Teaching Track follow this programme fee
                for the standard programme duration.
            </p>
        </article>

        <article class="doctoral-track-fee-card doctoral-track-fee-card-alt">
            <div class="doctoral-track-fee-top">
                <div class="doctoral-track-fee-icon">
                    <i class="bi bi-briefcase"></i>
                </div>
                <span>DPM Practice Track</span>
            </div>

            <h3>Programme Fee</h3>

            <div class="doctoral-track-fee-amount">
                <small>Total Fee</small>
                <strong>&#8377;12,50,000</strong>
            </div>

            <p>
                Doctoral students admitted to the DPM Practice Track follow this programme fee
                for the standard programme duration.
            </p>
        </article>

    </div>

</div>

                        <div class="doctoral-fee-comparison mt-4">
                            <div class="doctoral-fee-comparison-header">
                                <div>
                                    <span>At a Glance</span>
                                    <h3>Programme-wise Financial Structure</h3>
                                </div>
                                <p>
                                    A simple comparison of tuition exemption, fellowship and fee requirements.
                                </p>
                            </div>

                            <div class="doctoral-fee-table-wrap">
                                <table class="doctoral-fee-table">
                                    <thead>
                                        <tr>
                                            <th>Programme</th>
                                            <th>Tuition / Fee</th>
                                            <th>Fellowship</th>
                                            <th>Standard Duration Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>DPM</td>
                                            <td>Tuition fee exempted</td>
                                            <td>&#8377;42,000 / &#8377;45,000 / &#8377;50,000 per month based on milestone progression</td>
                                            <td>As per doctoral programme structure</td>
                                        </tr>
                                        <tr>
                                            <td>DPM Teaching Track</td>
                                            <td>&#8377;5,00,000</td>
                                            <td>Not specified</td>
                                            <td>For the standard programme duration</td>
                                        </tr>
                                        <tr>
                                            <td>DPM Practice Track</td>
                                            <td>&#8377;12,50,000</td>
                                            <td>Not specified</td>
                                            <td>For the standard programme duration</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="doctoral-extension-card mt-4">
                            <div class="doctoral-extension-icon">
                                <i class="bi bi-clock-history"></i>
                            </div>

                            <div>
                                <div class="section-kicker">Extensions</div>
                                <h3>Programme Duration Extensions</h3>

                                <p>
                                    For all three programmes, the standard programme duration may be extended by a prescribed
                                    maximum period when supported by sufficient grounds.
                                </p>

                                <div class="doctoral-extension-points">
                                    <div>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Subject to approval through the designated process.</span>
                                    </div>

                                    <div>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Payment of the applicable re-registration fee.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection