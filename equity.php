<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WealthTrust Capital Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/assets/css/style.css">

    <style>
        /* for  EQUITY ▸ Regulatory Disclosure (NEW SECTION) only  */

        #equity-regulatory-disclosure {
            background: var(--secondary-color);
        }

        #equity-regulatory-disclosure .brand-title {
            color: var(--dark-green);
            font-weight: 700;
        }

        #equity-regulatory-disclosure .subtle {
            color: #1b1b1b;
            opacity: .9;
        }

        /* Tab (pill) styles to match the screenshot */
        #equity-regulatory-disclosure .disclosure-pills .nav-link {
            border-radius: .6rem;
            background: #e8fff1;
            color: #4a4a4a;
            font-weight: 600;
            padding: .5rem 1rem;
            border: 1px solid rgba(0, 0, 0, .06);
        }

        #equity-regulatory-disclosure .disclosure-pills .nav-link.active {
            background: #fff;
            color: #000;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .02) inset;
        }

        /* Card-like table wrapper */
        #equity-regulatory-disclosure .table-wrap {
            background: #fff;
            border-radius: .8rem;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .05) inset;
        }

        /* Table styling to echo design */
        #equity-regulatory-disclosure table {
            margin: 0;
        }

        #equity-regulatory-disclosure thead th {
            font-weight: 600;
            background: #f7fff9;
            white-space: nowrap;
        }

        #equity-regulatory-disclosure tbody td,
        #equity-regulatory-disclosure thead th {
            padding: .95rem .75rem;
            vertical-align: middle;
            font-size: .95rem;
        }

        #equity-regulatory-disclosure .muted-note {
            color: #333;
            opacity: .8;
            font-size: .95rem;
        }

        /* Responsive tweaks */
        @media (max-width: 767.98px) {
            #equity-regulatory-disclosure .brand-title {
                font-size: 1.35rem;
            }

            #equity-regulatory-disclosure .table-responsive {
                border-radius: .8rem;
                background: #fff;
            }

            #equity-regulatory-disclosure tbody td:first-child {
                min-width: 180px;
            }
        }
    </style>
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>

    <!-- Invest Like a Pro Section -->
    <section class=" hero-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-md-6 text-center text-md-start ps-0 ps-md-5 pt-3 pt-md-0">
                    <h2 class="fw-bold display-5 mb-3">
                        <b>
                            Want To Invest <span class="text-primary">Like A Pro</span>
                            Without Spending Hours
                            <span class="text-primary">In Research?</span>
                        </b>
                    </h2>

                    <p class="mb-4">
                        Get personalised stock advice. All you do is invest, we handle the rest.
                    </p>

                    <a href="#" class="btn btn-primary rounded-pill px-4 py-2">
                        Invest Now
                    </a>
                </div>

                <!-- Right Image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="./public/assets/image/invest-like.gif"
                        class="img-fluid"
                        alt="Invest illustration"
                        style="max-width: 420px;">
                </div>

            </div>
        </div>
    </section>

    <section class="offerings-section py-5">
        <div class="container">

            <!-- Title + subtitle -->
            <h2 class="section-title text-center m-0 mb-2">
                Pick Your <span class="text-primary">Portfolio</span>
            </h2>
            <p class="text-center mb-5"><b>Transparent Pricing. No Hidden Fees.</b></p>

            <!-- Cards -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-lg-4 mb-md-0 mb-5 mt-0 d-flex flex-column">
                    <div class="offering-card offering--mint h-100 p-4 border rounded d-flex flex-column">
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="./public/assets/img/logo.png" alt="" class="portfolio-badge bg-white rounded">
                                <h5 class="m-0 fw-bold">Curated Portfolio</h5>
                            </div>
                            <small class="text-muted"><b>Detailed Research Reports</b></small>
                            <hr class="offering-sep my-2">

                            <ul class="offering-list">
                                <li>Monthly Performance Reviews</li>
                                <li>Updates on company fundamentals, triggers and valuations</li>
                                <li>Clear investment rationale to support long-term decisions</li>
                            </ul>
                        </div>

                        <!-- Bottom section pinned -->
                        <div class="offering-bottom mt-auto">
                            <hr class="offering-sep my-3">
                            <p class="m-0 fw-semibold text-success">Recommended Investment: Rs. 20 lakhs</p>
                            <p class="m-0 text-success">Contact us for more details</p>
                        </div>
                    </div>
                    <!-- Subscribe button OUTSIDE card -->
                    <div class="text-center mt-3">
                        <button class="btn btn-pill btn-mint">Subscribe</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-lg-4 my-md-0 my-5 d-flex flex-column">
                    <div class="offering-card offering--blue h-100 p-4 border rounded d-flex flex-column">
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="./public/assets/image/icon/small-cap.png" alt="" class="portfolio-badge">
                                <h5 class="m-0 fw-bold">Small Case</h5>
                            </div>
                            <small class="text-muted"><b> Ready stock baskets </b></small>
                            <hr class="offering-sep my-2">

                            <ul class="offering-list">
                                <li>Multiple curated baskets, each with 10–15 high-conviction stocks</li>
                                <li>Built for long-term growth across themes &amp; sectors</li>
                                <li>Periodic rebalancing based on company performance and macro trends</li>
                            </ul>
                        </div>

                        <div class="offering-bottom mt-auto">
                            <hr class="offering-sep my-3">
                            <p class="m-0 fw-semibold text-primary">Minimum Investment: Rs. 50,000</p>
                            <p class="m-0 text-primary">Fees: Rs. 7,500 per year</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-pill btn-blue">Subscribe</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-lg-4 mt-md-0 mt-5 d-flex flex-column">
                    <div class="offering-card offering--cream h-100 p-4 border rounded d-flex flex-column">
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="./public/assets/image/icon/right-check.png" alt="" class="portfolio-badge">
                                <h5 class="m-0 fw-bold">Pickright</h5>
                            </div>
                            <small class="text-muted"><b> Ready stock baskets </b></small>
                            <hr class="offering-sep my-2">

                            <ul class="offering-list">
                                <li>Positional trading calls across equities and F&amp;O</li>
                                <li>Automated portfolio updates based on market trends</li>
                                <li>Easy tracking with a user-friendly app and timely alerts</li>
                            </ul>
                        </div>

                        <div class="offering-bottom mt-auto">
                            <hr class="offering-sep my-3">
                            <p class="m-0 fw-semibold text-warning">Recommended Investment: &gt; Rs. 50,000</p>
                            <p class="m-0 text-warning">Fees: Rs. 7,500 per year</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-pill btn-cream">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-works-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">
                <span class="text-primary fw-bold">What</span> Do You Get?
            </h2>

            <!-- Row 1 -->
            <div class="row gx-4 gy-4 justify-content-center">
                <div class="col-12 col-lg-4 d-flex">
                    <div class="what-card flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="px-3">
                            <h5 class="text-primary mb-1"><b>Personalised Portfolio Construction</b></h5>
                            <p class="mb-0 text-muted">Because your money should work for you</p>
                        </div>
                        <div class="card-visual">
                            <img src="./public/assets/img/ss1.png" class="img-fluid" alt="Personalised Portfolio Construction">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 d-flex">
                    <div class="what-card flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="px-3">
                            <h5 class="text-primary mb-1"><b>Actionable Stock Recommendations</b></h5>
                            <p class="mb-0 text-muted">No more random stock tips</p>
                        </div>
                        <div class="card-visual">
                            <img src="./public/assets/img/ss2.png" class="img-fluid" alt="Actionable Stock Recommendations">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 d-flex">
                    <div class="what-card flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="px-3">
                            <h5 class="text-primary mb-1"><b>Regular Portfolio Reviews</b></h5>
                            <p class="mb-0 text-muted">So you don’t miss any opportunities.</p>
                        </div>
                        <div class="card-visual">
                            <img src="./public/assets/img/ss3.png" class="img-fluid" alt="Regular Portfolio Reviews">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row gx-4 gy-4 justify-content-center mt-2">
                <div class="col-12 col-lg-4 d-flex">
                    <div class="what-card flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="px-3">
                            <h5 class="text-primary mb-1"><b>Research-Backed Picks</b></h5>
                            <p class="mb-0 text-muted">No guesswork.</p>
                        </div>
                        <div class="card-visual">
                            <img src="./public/assets/img/ss4.png" class="img-fluid" alt="Research-Backed Picks">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 d-flex">
                    <div class="what-card flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="px-3">
                            <h5 class="text-primary mb-1"><b>Real Human Guidance</b></h5>
                            <p class="mb-0 text-muted">Because when you are stuck, Google doesn’t talk back.</p>
                        </div>
                        <div class="card-visual">
                            <img src="./public/assets/img/ss5.png" class="img-fluid" alt="Real Human Guidance">
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary rounded-pill px-4 d-sm-inline-block">Invest Now</a>
            </div>
        </div>
    </section>



    <section class="how-works-section py-5">
        <div class="container">
            <!-- Heading -->
            <h2 class="section-title text-center mb-5">
                How It <span class="text-primary">Works</span>
            </h2>

            <!-- 4 Cards in a Row -->
            <div class="row gx-4 gy-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/discovery-call.png" alt="Discovery Call" class="img-fluid mx-auto d-block" style="max-width:110px;">
                        </div>
                        <h5 class="fw-bold">Discovery Call</h5>
                        <p class="mb-0">We understand your goals, lifestyle, income, and risk profile.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/customised-strategy.png" alt="Customised Strategy" class="img-fluid mx-auto d-block" style="max-width:110px;">
                        </div>
                        <h5 class="fw-bold">Customised Strategy</h5>
                        <p class="mb-0">We build a tailored equity strategy for you.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/stock-advisory.png" alt="Stock Advisory" class="img-fluid mx-auto d-block" style="max-width:110px;">
                        </div>
                        <h5 class="fw-bold">Stock Advisory</h5>
                        <p class="mb-0">Handpicked stocks with rationale on when to enter, exit, and why.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/regular-portfolio.png" alt="Regular Portfolio Review" class="img-fluid mx-auto d-block" style="max-width:110px;">
                        </div>
                        <h5 class="fw-bold">Regular Portfolio Review</h5>
                        <p class="mb-0">Assess performance, and rebalance if needed.</p>
                    </div>
                </div>
            </div>

            <!-- Centered Button -->
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary rounded-pill px-5">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Who Is This For Section -->
    <section class="who-is-this-for-section py-5 bg-light-green">
        <div class="container">
            <!-- Centered Heading -->
            <h2 class="section-title text-center mb-5 fw-bold">
                Who Is This <span class="text-primary">For?</span>
            </h2>

            <div class="row align-items-center">
                <!-- Left: Bullet points and CTA -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="who-for-list-wrap">
                        <p class="fw-semibold mb-3">If you don't know:</p>
                        <ul class="list-unstyled who-for-list mb-3">
                            <li class="who-for-item mb-2">
                                <span class="color-primary pe-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                                            stroke="currentColor" stroke-width="1" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                                            stroke="currentColor" stroke-width="1" />
                                    </svg></span> <span class="px-1"> Which stocks to buy</span>
                            </li>
                            <li class="who-for-item mb-2">
                                <span class="color-primary pe-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                                            stroke="currentColor" stroke-width="1" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                                            stroke="currentColor" stroke-width="1" />
                                    </svg></span> <span class="px-1"> How much to invest</span>
                            </li>
                            <li class="who-for-item mb-2">
                                <span class="color-primary pe-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                                            stroke="currentColor" stroke-width="1" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                                            stroke="currentColor" stroke-width="1" />
                                    </svg></span> <span class="px-1"> When to exit</span>
                            </li>
                            <li class="who-for-item mb-2">
                                <span class="color-primary pe-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                                            stroke="currentColor" stroke-width="1" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                                            stroke="currentColor" stroke-width="1" />
                                    </svg></span> <span class="px-1"> Don’t have time to research</span>
                            </li>
                            <li class="who-for-item mb-0">
                                <span class="color-primary pe-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                                            stroke="currentColor" stroke-width="1" />
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                                            stroke="currentColor" stroke-width="1" />
                                    </svg></span> <span class="px-1"> And you can’t control your emotions</span>
                            </li>
                        </ul>
                        <p class="fw-semibold mb-4">This is made for you.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">Invest Now</a>
                    </div>
                </div>

                <!-- Right: Illustration -->
                <div class="col-md-6 text-center">
                    <img src="./public/assets/image/who-is-this-for.gif"
                        class="img-fluid mx-auto d-block"
                        alt="Investor Guide"
                        </div>
                </div>
            </div>
    </section>


    <!-- Testimonial CTA -->
    <section class="testimonial-cta-section text-center py-5">
        <div class="container">
            <h3 class="mb-2"><u>Don’t just read success stories</u></h3>
            <h5 class="mb-3">Be a part of one</h5>
            <p class="testimonial-quote mb-3">
                “I started as a beginner, unsure and overwhelmed. But Sneha and her team helped me understand, invest, and grow — without sleepless nights.”
            </p>
            <div class="testimonial-author text-end text-white fw-bold mt-4">
                — Yaashvi Vira, Client since 2021
            </div>
        </div>
    </section>

    <!-- ===== EQUITY ▸ Regulatory Disclosure (NEW SECTION) ===== -->
    <section id="equity-regulatory-disclosure" class="py-4 py-md-5">

        <div class="container">

            <h2 class="brand-title mb-2">WealthTrust Capital Services</h2>
            <p class="subtle mb-4">Aikya Signature, Naushir Barucha Marg, Sleater Road, Tardeo, Mumbai – 400007</p>

            <h4 class="fw-bold mb-3">Regulatory Disclosure</h4>
            <p class="mb-3">
                <span class="fw-semibold">WealthTrust Capital Services</span> is a SEBI registered
                <span class="fw-semibold">Research Analyst</span> (Registration Number:
                <span class="fw-semibold">INH000011149</span>). SEBI requires <span class="fw-semibold">RA</span> to disclose
                complaint status on their homepage. Pursuant to the same, please note:
            </p>

            <!-- Tabs -->
            <ul class="nav nav-pills gap-2 disclosure-pills mb-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-current-tab" data-bs-toggle="pill" data-bs-target="#pills-current" type="button" role="tab" aria-controls="pills-current" aria-selected="true">Current Month</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="false">Monthly</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-annual-tab" data-bs-toggle="pill" data-bs-target="#pills-annual" type="button" role="tab" aria-controls="pills-annual" aria-selected="false">Annual</button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Current Month -->
                <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab" tabindex="0">
                    <div class="table-wrap p-2">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Received from</th>
                                        <th scope="col">Pending last month</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Resolved</th>
                                        <th scope="col">Total pending</th>
                                        <th scope="col">Pending &gt; 3M</th>
                                        <th scope="col">Avg resolution time (in days)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Investors</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>SEBI (Scores)</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Others</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Monthly -->
                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab" tabindex="0">
                    <div class="table-wrap p-2">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Received from</th>
                                        <th scope="col">Pending last month</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Resolved</th>
                                        <th scope="col">Total pending</th>
                                        <th scope="col">Pending &gt; 3M</th>
                                        <th scope="col">Avg resolution time (in days)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Investors</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>SEBI (Scores)</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Others</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Annual -->
                <div class="tab-pane fade" id="pills-annual" role="tabpanel" aria-labelledby="pills-annual-tab" tabindex="0">
                    <div class="table-wrap p-2">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Received from</th>
                                        <th scope="col">Pending last month</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Resolved</th>
                                        <th scope="col">Total pending</th>
                                        <th scope="col">Pending &gt; 3M</th>
                                        <th scope="col">Avg resolution time (in days)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Investors</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>SEBI (Scores)</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Others</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <p class="muted-note mt-3">Regulatory Disclosures data shown above is provided monthly.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== /EQUITY SECTION ===== -->

    <!-- FAQ Section -->
    <section class="faq-section py-5 ">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: var(--primary-color); font-size: 2.7rem;">Still Have Questions?</h2>
            <div class="row align-items-center">
                <!-- FAQ Accordion (right) -->
                <div class="col-lg-7 order-2 order-md-1">
                    <div class="accordion custom-accordion" id="faqAccordion">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1-heading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    1. Do I need a Demat account?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you will need a Demat account to start investing in stocks and securities.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    2. What if I’m already investing in stocks?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    That’s great! Our services can complement your existing investments by providing research-backed insights and strategies to maximize returns.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    3. What’s the risk involved?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    All investments carry some risk. We focus on minimizing risk through diversification and data-driven decisions, but market fluctuations are inevitable.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    4. What kind of returns can I expect?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Returns vary depending on market conditions, but our goal is to help you achieve consistent, long-term wealth creation rather than short-term gains.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    5. What makes your stock advisory different from tip-based services or Telegram groups?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Unlike tip-based services, our advice is backed by in-depth research, transparency, and a focus on long-term financial success rather than speculation.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq6-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                    6. Can I talk to someone before subscribing?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! You can schedule a free consultation with our advisors to understand how we can help before you subscribe.
                                </div>
                            </div>
                        </div>

                    </div> <!-- /.custom-accordion -->
                </div>

                <!-- Bot illustration (left) -->
                <div class="col-lg-5 mb-4 mb-lg-0 text-center order-1 order-md-2">
                    <img src="./public/assets/image/FAQ3.gif" alt="Have Questions Bot" class="h-100 mx-auto d-block" style="max-width: 350px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>