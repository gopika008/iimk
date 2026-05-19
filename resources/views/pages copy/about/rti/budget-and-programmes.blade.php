@extends('layouts.app')

@section('title', 'Budget and Programmes | IIM Kozhikode')

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="breadcrumb-mini">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ url('/about') }}">About IIMK</a>
            <span class="mx-2">/</span>
            <span>RTI</span>
            <span class="mx-2">/</span>
            <span>Budget and Programmes</span>
        </div>

        <h1 class="hero-title">Budget and Programmes</h1>
        <p class="hero-sub">
            RTI disclosure details related to budgets, expenditure, tours, procurement, grants,
            concessions and CAG/PAC paras.
        </p>
        <div class="gold-line"></div>
    </div>
</section>

@include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-budget'])

<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                @include('partials.inner-sidebar', ['items' => config('iimk_navigation.about_sidebar'), 'active' => 'rti-budget'])
            </div>

            <div class="col-lg-9">
                <main class="content-card">

                    <section class="rti-section rti-organization-page">
                        <div class="section-kicker">RTI Disclosure</div>
                        <h2 class="section-heading">2 - Budget and Programmes</h2>

                        <p class="lead-copy">
                            Disclosure under the Right to Information Act covering budget allocation, expenditure,
                            disbursement reports, official tours, procurement, grants, concessions and audit paras.
                        </p>

                        <div class="rti-tab-list">
                            <a href="{{ url('/about/rti/organization-and-function') }}">
                                1 - Organization and Function
                            </a>

                            <a class="active" href="{{ url('/about/rti/budget-and-programmes') }}">
                                2 - Budget and Programmes
                            </a>

                            <a href="{{ url('/about/rti/publicity-and-public-interface') }}">
                                3 - Publicity and Public Interface
                            </a>

                            <a href="{{ url('/about/rti/e-governance') }}">
                                4 - E-Governance
                            </a>

                            <a href="{{ url('/about/rti/information-as-may-be-prescribed') }}">
                                5 - Information as may be Prescribed
                            </a>

                            <a href="{{ url('/about/rti/information-disclosed-on-own-initiative') }}">
                                6 - Information Disclosed on Own Initiative
                            </a>
                        </div>

                        <div class="rti-modern-list mt-4">

                            <div class="rti-disclosure-group">
                                <div class="rti-group-header">
                                    <span>2.1</span>
                                    <h3>Budget allocated to each agency including all plans, proposed expenditure and reports on disbursements made etc.</h3>
                                    <small>Section 4(1)(b)(xi)</small>
                                </div>

                                <div class="rti-card-grid">

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">2.1.1</div>
                                        <div class="rti-info-body">
                                            <h4>Total Budget for the public authority</h4>

                                            <p>
                                                Please use the links below for viewing the details of the Budget and Annual Accounts.
                                            </p>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/2_1_1 2024-25 budget.pdf" target="_blank" rel="noopener">
                                                    Budget for 2024-25
                                                </a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/2_1_2 2023-24  budger revised.pdf" target="_blank" rel="noopener">
                                                    Budget for 2023-24
                                                </a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/BUDGET 2022-23.pdf" target="_blank" rel="noopener">
                                                    Budget for 2022-23
                                                </a>
                                            </div>

                                            <h5 class="mt-3">Annual Accounts</h5>

                                            <div class="rti-link-stack">
                                                <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2019-20.pdf" target="_blank" rel="noopener">2019-20</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2021-22.pdf" target="_blank" rel="noopener">2021-22</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Annual Accounts 2022-23.pdf" target="_blank" rel="noopener">2022-23</a>
                                                <a href="https://iimk.ac.in/uploads/userfiles/Annual Accounts 2023-24.pdf" target="_blank" rel="noopener">2023-24</a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">2.1.2</div>
                                        <div class="rti-info-body">
                                            <h4>Budget for each agency and plan & programmes</h4>
                                            <p>
                                                Please refer to the budget documents listed under 2.1.1.
                                            </p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">2.1.3</div>
                                        <div class="rti-info-body">
                                            <h4>Proposed Expenditure</h4>
                                            <p>
                                                Please refer to the budget documents listed under 2.1.1.
                                            </p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile">
                                        <div class="rti-info-number">2.1.4</div>
                                        <div class="rti-info-body">
                                            <h4>Revised budget for each agency, if any</h4>
                                            <p><strong>Fully Met</strong></p>
                                        </div>
                                    </article>

                                    <article class="rti-info-tile rti-wide-tile">
                                        <div class="rti-info-number">2.1.5</div>
                                        <div class="rti-info-body">
                                            <h4>Report on disbursements made and place where the related reports are available</h4>

                                            <p>Annual Accounts:</p>

                                            <div class="rti-link-stack">
                                                <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2019-20.pdf" target="_blank" rel="noopener">2019-20</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2020-21.pdf" target="_blank" rel="noopener">2020-21</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/ANNUAL ACCOUNTS - 2021-22.pdf" target="_blank" rel="noopener">2021-22</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/Annual Accounts 2022-23.pdf" target="_blank" rel="noopener">2022-23</a>
                                                <a href="http://iimk.ac.in/uploads/userfiles/Annual Accounts 2023-24.pdf" target="_blank" rel="noopener">2023-24</a>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>

                            <div class="rti-accordion">

                                <details open>
                                    <summary>
                                        <span>2.2</span>
                                        Foreign and Domestic Tours
                                        <small>F. No. 1/8/2012-IR dt. 11.9.2012</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>2.2.1 Budget</strong>
                                                <p>
                                                    Specific sub allocation in the budget is not allocated for Foreign and Domestic Tours.
                                                </p>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>2.2.2 Foreign and domestic Tours by ministries and officials</strong>
                                                <p>
                                                    Foreign and domestic tours by ministries and officials of the rank of Joint Secretary to the Government and above,
                                                    as well as the heads of the Department: places visited, period of visit, number of members in the official delegation,
                                                    and expenditure on the visit.
                                                </p>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/uploads/userfiles/FOREIGN AND DOMESTIC TOURS 2024.pdf" target="_blank" rel="noopener">Travel details 2024-25</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Foreign and Domestic Tours 2023-24.pdf" target="_blank" rel="noopener">Travel details 2023-24</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Foreign and Domestic Tours 2022-23.pdf" target="_blank" rel="noopener">Travel details 2022-23</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Foreign and Domestic Tours 2021-22.pdf" target="_blank" rel="noopener">Travel details 2021-22</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Foreign and Domestic Tours 2020-21.pdf" target="_blank" rel="noopener">Travel details 2020-21</a>
                                                    <a href="https://iimk.ac.in/uploads/userfiles/Foreign and Domestic Tours 2019-20.pdf" target="_blank" rel="noopener">Travel details 2019-20</a>
                                                </div>
                                            </div>

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>2.2.3 Information related to procurements</strong>

                                                <p>
                                                    Information related to procurements includes notice/tender enquiries, corrigenda if any,
                                                    details of bids awarded comprising names of suppliers of goods/services being procured,
                                                    works contracts concluded, and the rate/rates and total amount at which such procurement
                                                    or works contract is to be executed.
                                                </p>

                                                <p>
                                                    Please click the link below for viewing the details of the Procurement of Goods and Services.
                                                </p>

                                                <div class="rti-highlight-box">
                                                    <p>
                                                        The details regarding works contracts are available in the eWizard portal by visiting:
                                                    </p>

                                                    <p>
                                                        <a href="https://mhrd.ewizard.in" target="_blank" rel="noopener">
                                                            https://mhrd.ewizard.in
                                                        </a>
                                                    </p>

                                                    <p>
                                                        Live Tenders, Tender Closing in 48Hrs, Tenders Due for Open,
                                                        Opened and Awarded Tenders, Cancelled Tenders and Auctions are available through the portal.
                                                    </p>

                                                    <p>
                                                        Please click at "Tender Number" box and enter <strong><em>iimk</em></strong>,
                                                        then fill captcha and proceed.
                                                    </p>
                                                </div>

                                                <div class="rti-link-stack">
                                                    <a href="https://iimk.ac.in/tender-archives/" target="_blank" rel="noopener">
                                                        Procurement through IIMK Website
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>2.3</span>
                                        Manner of Execution of Subsidy Programme
                                        <small>Section 4(1)(b)(xii)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>2.3.1 Name of the programme of activity</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.2 Objective of the programme</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.3 Procedure to avail benefits</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.4 Duration of the programme/scheme</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.5 Physical and financial targets of the programme</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.6 Nature/scale of subsidy/amount allotted</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.7 Eligibility criteria for grant of subsidy</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.3.8 Details of beneficiaries of subsidy programme</strong>
                                                <p>Not Applicable</p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>2.4</span>
                                        Discretionary and Non-discretionary Grants
                                        <small>F. No. 1/6/2011-IR dt. 15.04.2013</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card">
                                                <strong>2.4.1 Discretionary and non-discretionary grants/allocations to State Govt./NGOs/other institutions</strong>
                                                <p>Not received.</p>
                                            </div>

                                            <div class="rti-mini-card">
                                                <strong>2.4.2 Annual accounts of all legal entities who are provided grants by public authorities</strong>
                                                <p>Not received..</p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>2.5</span>
                                        Particulars of Recipients of Concessions, Permits or Authorizations
                                        <small>Section 4(1)(b)(xiii)</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>2.5.1 / 2.5.2 Concessions, permits or authorizations granted by public authority</strong>
                                                <p>
                                                    Fee waiver in terms of tution fee consessions and scholarships on need base and merit basis
                                                    are being provided to the students from the reserved and low income categories as per eligibility.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>2.6</span>
                                        CAG & PAC Paras
                                        <small>F No. 1/6/2011-IR dt. 15.4.2013</small>
                                    </summary>

                                    <div class="rti-accordion-body">
                                        <div class="rti-mini-grid">

                                            <div class="rti-mini-card rti-mini-wide">
                                                <strong>2.6.1 CAG and PAC paras and action taken reports</strong>

                                                <p>
                                                    CAG had raised an objection for extension of GPF cum Pension Schemes to employees,
                                                    which according to them is in contravention to the Dept. of Expenditure’s letter dt.16.03.2000.
                                                    According to the Audit, since IIMK has been following Contributory Providend Fund Scheme since inception
                                                    extension of GPF Scheme to cover these employees, was in contravention to the above mentioned letter.
                                                    The matter was referred to PAC by the Ministry and the PAC meeting was held on 27/11/2018.
                                                    Further to the PAC, Institute has requested to the Ministry to regularise the extension of GPF cum Pension Scheme
                                                    to those members for whom audit objection was raised. Reply from the Ministry is awaited.
                                                </p>

                                                <p>
                                                    Annual Accounts for the FY 2023-24 was sent to the Ministry after the CAG audit and has been placed before the Parliament.
                                                    No PAC paras have been raised yet. Annual Accounts for FY 2024-25 is under preparation.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </details>

                            </div>

                        </div>

                    </section>

                </main>
            </div>

        </div>
    </div>
</section>

@endsection