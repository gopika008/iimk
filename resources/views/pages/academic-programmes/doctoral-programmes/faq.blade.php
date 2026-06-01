@extends('layouts.app')

@section('title', 'FAQ | Doctoral Programmes | IIM Kozhikode')

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
                <span>FAQ</span>
            </div>

            <div class="doctoral-hero-badge">
                <i class="bi bi-question-circle"></i>
                Doctoral Programmes
            </div>

            <h1 class="doctoral-hero-title">
                Frequently Asked Questions
            </h1>

            <p class="doctoral-hero-sub">
                Answers to common questions about doctoral programmes, eligibility, selection process,
                fellowship, fees and programme duration.
            </p>

        </div>
    </div>
</section>

@section('inner_mobile_menu') @include('partials.inner-mobile-menu', ['items' => config('iimk_navigation.academic_programmes_sidebar'), 'active' => 'doctoral-faq']) @endsection


<section class="page-wrap">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                      @include('partials.inner-sidebar', ['items' => config('iimk_navigation.academic_programmes_sidebar'),'title' => 'Doctoral Programmes',
                    'eyebrow' => 'Academic structure',
                    'active' => 'doctoral-faq'])   
            </div>

            <div class="col-lg-9">
                <main class="doctoral-home-card">

                    <section class="doctoral-faq-section">
                        <div class="section-kicker">Help Centre</div>
                        <h2 class="section-heading">Frequently Asked Questions</h2>

                        <p class="lead-copy">
                            Find answers to important questions related to DPM, DPM Teaching Track and
                            DPM Practice Track admissions, eligibility, coursework, selection process and financial structure.
                        </p>

                        <div class="doctoral-faq-summary-grid">
                            <a href="#faq-programmes" class="doctoral-faq-summary-card">
                                <i class="bi bi-mortarboard"></i>
                                <strong>Programmes</strong>
                                <span>DPM, Teaching Track and Practice Track</span>
                            </a>

                            <a href="#faq-eligibility" class="doctoral-faq-summary-card">
                                <i class="bi bi-person-check"></i>
                                <strong>Eligibility</strong>
                                <span>Qualifications, tests and experience</span>
                            </a>

                            <a href="#faq-selection" class="doctoral-faq-summary-card">
                                <i class="bi bi-clipboard-check"></i>
                                <strong>Selection Process</strong>
                                <span>Screening, WAT, DOC and DAC</span>
                            </a>

                            <a href="#faq-fees-duration" class="doctoral-faq-summary-card">
                                <i class="bi bi-cash-coin"></i>
                                <strong>Fees & Duration</strong>
                                <span>Fellowship, programme fee and thesis timeline</span>
                            </a>
                        </div>

                        <div class="doctoral-faq-block mt-4" id="faq-programmes">
                            <div class="doctoral-faq-block-header">
                                <div>
                                    <span>Category</span>
                                    <h3>Programmes</h3>
                                </div>
                            </div>

                            <div class="doctoral-faq-accordion">

                                <details open>
                                    <summary>
                                        <span>01</span>
                                        What doctoral programmes are offered by IIM Kozhikode?
                                    </summary>
                                    <div>
                                        <p>
                                            IIM Kozhikode offers three doctoral programmes leading to the award of the PhD degree:
                                            the Doctoral Programme in Management (DPM), DPM (Teaching Track), and DPM (Practice Track).
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>02</span>
                                        How do the DPM, DPM (Teaching Track), and DPM (Practice Track) differ?
                                    </summary>
                                    <div>
                                        <p>
                                            <strong>DPM:</strong> The DPM is a full-time doctoral programme focused on rigorous
                                            training in theory, empirical analysis, and research methods for academic careers.
                                        </p>

                                        <p>
                                            <strong>DPM (Teaching Track):</strong> The DPM (Teaching Track) is designed for individuals
                                            with prior academic or knowledge-oriented experience who wish to strengthen teaching and
                                            research capabilities.
                                        </p>

                                        <p>
                                            <strong>DPM (Practice Track):</strong> The DPM (Practice Track) is intended for experienced
                                            professionals seeking to integrate managerial practice with advanced research.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>03</span>
                                        Which programme is offered in a full-time mode?
                                    </summary>
                                    <div>
                                        <p>The DPM is offered in a full-time mode.</p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>04</span>
                                        Who should consider applying to the DPM (Teaching Track)?
                                    </summary>
                                    <div>
                                        <p>
                                            Individuals with prior experience in teaching, training, research, or similar knowledge-oriented
                                            roles who wish to pursue advanced doctoral training in management education.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>05</span>
                                        Who should consider applying to the DPM (Practice Track)?
                                    </summary>
                                    <div>
                                        <p>
                                            Experienced professionals with substantial full-time work experience who aim to engage in
                                            doctoral-level research grounded in managerial practice.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>06</span>
                                        What Academic Areas of Specialisation are available under the doctoral programmes?
                                    </summary>
                                    <div>
                                        <p>
                                            Eight Areas are offered: Decision Sciences &amp; Operations Management, Economics,
                                            Finance, Accounting &amp; Control, Humanities &amp; Liberal Arts in Management,
                                            Information Systems, Marketing Management, Organizational Behaviour &amp; Human Resource
                                            Management, and Strategic Management.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>07</span>
                                        Will the doctoral degree awarded be the same across all three programmes?
                                    </summary>
                                    <div>
                                        <p>Yes. All three programmes lead to the award of the PhD degree.</p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>08</span>
                                        Will the degree certificate indicate whether the candidate completed the Teaching Track or Practice Track?
                                    </summary>
                                    <div>
                                        <p>Yes. The degree certificate will indicate the relevant track.</p>
                                    </div>
                                </details>

                            </div>
                        </div>

                        <div class="doctoral-faq-block mt-4" id="faq-eligibility">
                            <div class="doctoral-faq-block-header">
                                <div>
                                    <span>Category</span>
                                    <h3>Eligibility</h3>
                                </div>
                            </div>

                            <div class="doctoral-faq-accordion">

                                <details>
                                    <summary>
                                        <span>09</span>
                                        What minimum educational qualifications are required to apply?
                                    </summary>
                                    <div>
                                        <p>
                                            Applicants must possess an eligible postgraduate degree, a professional qualification
                                            with a bachelor's degree, or a four-year bachelor's degree, with minimum marks or CGPA
                                            as specified for each programme.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>10</span>
                                        Do the minimum eligibility marks differ across the three programmes?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes. The minimum marks/CGPA requirements vary by programme and qualification type.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>11</span>
                                        Can candidates in the final year of their qualifying degree apply?
                                    </summary>
                                    <div>
                                        <p>
                                            Final-year candidates may apply only to the DPM, subject to the conditions specified
                                            for provisional admission.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>12</span>
                                        Are professional qualifications such as CA, CMA, or CS eligible?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes, provided the professional qualification is held along with a bachelor's degree
                                            and meets the prescribed minimum marks.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>13</span>
                                        Are four-year bachelor's degree holders eligible to apply?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes, subject to meeting the programme-specific minimum marks.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>14</span>
                                        Are degrees from foreign universities eligible?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes, if awarded by institutions accredited or recognised by authorised bodies
                                            in their home countries.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>15</span>
                                        Are relaxations available for candidates from reserved categories?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes. Candidates from SC/ST/PwD/NC-OBC/EWS categories are eligible for a 5%
                                            or equivalent relaxation in minimum eligibility marks.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>16</span>
                                        Is a qualifying test score mandatory for admission to the DPM?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes. Applicants to the DPM must submit a valid qualifying test score unless exempted.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>17</span>
                                        Which qualifying tests are accepted for admission to the DPM?
                                    </summary>
                                    <div>
                                        <p>
                                            Accepted tests are Area-specific and include CAT, GATE, GMAT, GRE, UGC-NET/JRF,
                                            the IIMB Test, and other approved tests for certain Areas.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>18</span>
                                        What is the validity period of qualifying test scores for the DPM?
                                    </summary>
                                    <div>
                                        <p>
                                            Test scores must not be older than three years as on the application closing date,
                                            except for the IIMB Test.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>19</span>
                                        Are graduates from IIMs exempted from qualifying test requirements for the DPM?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes. Graduates with a PGDM/MBA from any IIM, or an Executive PGDM/MBA from
                                            IIM Kozhikode, are exempted, subject to minimum academic performance criteria.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>20</span>
                                        Is work experience required for admission to the DPM?
                                    </summary>
                                    <div>
                                        <p>No. There is no work experience requirement for the DPM.</p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>21</span>
                                        What is the minimum work experience required for the DPM (Teaching Track)?
                                    </summary>
                                    <div>
                                        <p>
                                            A minimum of three years of full-time experience after graduation in teaching,
                                            training, research, or equivalent knowledge-oriented roles.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>22</span>
                                        What is the minimum work experience required for the DPM (Practice Track)?
                                    </summary>
                                    <div>
                                        <p>
                                            A minimum of eight years of full-time work experience after graduation; higher
                                            requirements apply for certain Areas, for example Strategic Management.
                                        </p>
                                    </div>
                                </details>

                            </div>
                        </div>

                        <div class="doctoral-faq-block mt-4" id="faq-selection">
                            <div class="doctoral-faq-block-header">
                                <div>
                                    <span>Category</span>
                                    <h3>Selection Process</h3>
                                </div>
                            </div>

                            <div class="doctoral-faq-accordion">

                                <details>
                                    <summary>
                                        <span>23</span>
                                        Can an applicant apply to more than one doctoral programme in a single application?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes. Applicants may apply to one or more programmes through a single application.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>24</span>
                                        Is it mandatory to choose the same Area of Specialisation across all programmes applied for?
                                    </summary>
                                    <div>
                                        <p>
                                            Yes. Only one Area may be selected, and it applies to all programme choices.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>25</span>
                                        What are the stages involved in the doctoral selection process?
                                    </summary>
                                    <div>
                                        <p>
                                            Three stages: Application Screening; Written Ability Test (WAT) and Doctoral Orientation
                                            Conversation (DOC); and Doctoral Area Conversation (DAC).
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>26</span>
                                        What is the Written Ability Test (WAT) and the Doctoral Orientation Conversation (DOC)?
                                    </summary>
                                    <div>
                                        <p>
                                            The WAT is a 30-minute, in-person, paper-and-pen essay test. The DOC is a face-to-face
                                            interaction assessing doctoral motivation, learning orientation, analytical articulation,
                                            perseverance, and programme fit.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>27</span>
                                        What is the Doctoral Area Conversation (DAC) and how is it conducted?
                                    </summary>
                                    <div>
                                        <p>
                                            The DAC is an online academic interaction assessing Area-specific understanding,
                                            research orientation, and doctoral readiness.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>28</span>
                                        How is the final merit for admission determined?
                                    </summary>
                                    <div>
                                        <p>
                                            Final selection is based on a Final Composite Score, computed using programme-specific
                                            weightages across academic performance, work experience where applicable, WAT, and DAC.
                                        </p>
                                    </div>
                                </details>

                            </div>
                        </div>

                        <div class="doctoral-faq-block mt-4" id="faq-fees-duration">
                            <div class="doctoral-faq-block-header">
                                <div>
                                    <span>Category</span>
                                    <h3>Fees, Fellowship & Duration</h3>
                                </div>
                            </div>

                            <div class="doctoral-faq-accordion">

                                <details>
                                    <summary>
                                        <span>29</span>
                                        What programme fees and fellowship support are applicable under each programme?
                                    </summary>
                                    <div>
                                        <p>
                                            <strong>DPM:</strong> No tuition fee; monthly fellowship of &#8377;42,000 initially,
                                            revised to &#8377;45,000 after the comprehensive qualifying examination, and &#8377;50,000
                                            after successful thesis proposal defence.
                                        </p>

                                        <p>
                                            <strong>DPM (Teaching Track):</strong> Programme fee of &#8377;5,00,000 for the standard
                                            duration; no fellowship.
                                        </p>

                                        <p>
                                            <strong>DPM (Practice Track):</strong> Programme fee of &#8377;9,50,000 for the standard
                                            duration; a revised fee is under consideration; no fellowship.
                                        </p>
                                    </div>
                                </details>

                                <details>
                                    <summary>
                                        <span>30</span>
                                        What is the typical duration of the doctoral programmes, and when can a candidate submit the draft thesis?
                                    </summary>
                                    <div>
                                        <p>
                                            The typical duration is five years. Across all three programmes, candidates must complete
                                            a minimum of three years before becoming eligible to submit the draft thesis.
                                        </p>
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