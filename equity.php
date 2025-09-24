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
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon.ico">

    <style>
        /* ===== Regulatory Disclosure styles (scoped) ===== */
        #equity-regulatory-disclosure {
            /* mint backdrop like screenshot (uses your palette if present) */
            background: var(--secondary-color, #c9f5d6);
        }

        /* tab pills */
        #equity-regulatory-disclosure .disclosure-pills .nav-link {
            border-radius: 0.9rem;
            padding: .5rem 1rem;
            background: #e9ecef;
            color: #495057;
            border: 1px solid transparent;
        }

        #equity-regulatory-disclosure .disclosure-pills .nav-link.active {
            background: #fff;
            color: #111;
            border-color: rgba(13, 110, 253, .35);
            /* subtle blue border */
            box-shadow: 0 0 0 .18rem rgba(13, 110, 253, .20);
            /* blue focus ring */
        }

        /* card-like table wrapper */
        #equity-regulatory-disclosure .table-wrap {
            background: #fff;
            border-radius: 1rem;
            border: 1px solid rgba(0, 0, 0, .06);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .08);
        }

        /* header bar (single soft strip with rounded ends) */
        #equity-regulatory-disclosure thead {
            background: #f4f6f8;
        }

        #equity-regulatory-disclosure thead th {
            border: 0 !important;
            color: #6c757d;
            font-weight: 600;
            padding-top: .9rem;
            padding-bottom: .9rem;
        }

        #equity-regulatory-disclosure thead th:first-child {
            border-top-left-radius: .6rem;
            border-bottom-left-radius: .6rem;
        }

        #equity-regulatory-disclosure thead th:last-child {
            border-top-right-radius: .6rem;
            border-bottom-right-radius: .6rem;
        }

        /* body rows — very light separators, no heavy borders */
        #equity-regulatory-disclosure .table> :not(caption)>*>* {
            border-bottom: 1px solid rgba(0, 0, 0, .04);
            padding-top: .9rem;
            padding-bottom: .9rem;
        }

        /* tiny footnote text */
        #equity-regulatory-disclosure .muted-note {
            color: #6c757d;
            font-size: .9rem;
        }

        /* responsive container width (optional) */
        #equity-regulatory-disclosure .container {
            max-width: 1200px;
        }


        /* ===== Tabs group: rounded white background like screenshot ===== */
        #equity-regulatory-disclosure .disclosure-pills {
            display: inline-flex;
            /* sit as one compact group */
            align-items: center;
            padding: .375rem;
            /* inner gutter around pills */
            gap: .25rem;
            /* small gap between pills */
            background: #fff;
            /* group background */
            border: 1px solid rgba(0, 0, 0, .06);
            border-radius: 12px;
            /* big rounded corners */
            box-shadow: 0 6px 18px rgba(0, 0, 0, .08);
        }

        /* reset li spacing inside */
        #equity-regulatory-disclosure .disclosure-pills .nav-item {
            margin: 0;
        }

        /* base tab pill */
        #equity-regulatory-disclosure .disclosure-pills .nav-link {
            border: 0;
            background: transparent;
            /* inactive pills sit on group bg */
            color: #6b7280 !important;
            text-decoration: none;
            /* muted text */
            padding: .5rem 1rem;
            line-height: 1;
            border-radius: 6px;
            /* pill shape */
            transition: color .15s ease, background-color .15s ease, box-shadow .15s ease;
        }

        /* active tab pill (grey chip) */
        #equity-regulatory-disclosure .disclosure-pills .nav-link.active {
            background: #d9dbe1;
            color: #111 !important;
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .06);
            text-decoration: none;
        }

        /* focus ring for keyboard nav */
        #equity-regulatory-disclosure .disclosure-pills .nav-link:focus {
            box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .20);
        }

        /* small tweak on phones */
        @media (max-width: 576px) {
            #equity-regulatory-disclosure .disclosure-pills {
                width: 100%;
                /* let group span width if needed */
                padding: .3rem;
            }

            #equity-regulatory-disclosure .disclosure-pills .nav-link {
                padding: .5rem .75rem;
            }
        }


        /* light grey header bar */
        #equity-regulatory-disclosure .table-wrap .table thead th {
            background-color: #f4f5f7 !important;
            /* ultra-light grey */
            color: #6c757d;
            font-weight: 600;
            border: 0 !important;
            /* no borders in header */
            padding-top: .9rem;
            padding-bottom: .9rem;
        }

        /* rounded ends for the header strip */
        #equity-regulatory-disclosure .table-wrap .table thead th:first-child {
            border-top-left-radius: .75rem;
            border-bottom-left-radius: .75rem;
        }

        #equity-regulatory-disclosure .table-wrap .table thead th:last-child {
            border-top-right-radius: .75rem;
            border-bottom-right-radius: .75rem;
        }

        /* ensure cells touch (no gap between th backgrounds) */
        #equity-regulatory-disclosure .table-wrap .table {
            border-collapse: separate;
            border-spacing: 0;
        }

        /* keep header labels on a single line */
        #equity-regulatory-disclosure .table thead th {
            white-space: nowrap !important;
            overflow: hidden;
            /* optional: prevent spill */
            text-overflow: ellipsis;
            /* optional: show … if too narrow */
        }

        .btn-pill {
            border-radius: 9999px;
        }

        /* Gradient using Guardian colors */
        .gradient-btn {
            color: #fff;
            border: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--dark-green), var(--light-green));
            background-size: 200% 200%;
            box-shadow: 0 8px 20px rgba(58, 139, 127, 0.3);
            transition: transform .2s ease, box-shadow .2s ease, filter .2s ease;
            animation: gradientShift 6s ease infinite;
            position: relative;
            overflow: visible;
        }

        .gradient-btn:hover,
        .gradient-btn:focus {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(45, 90, 79, 0.4);
            text-decoration: none;
            filter: brightness(1.05);
        }

        .gradient-btn:active {
            transform: translateY(0);
            box-shadow: 0 6px 16px rgba(45, 90, 79, 0.35);
        }

        /* Animated pulsing ring */
        .gradient-btn::after {
            content: "";
            position: absolute;
            inset: -6px;
            border-radius: inherit;
            pointer-events: none;
            box-shadow: 0 0 0 0 rgba(58, 139, 127, 0.35);
            transition: box-shadow .2s ease;
        }

        .gradient-btn:hover::after,
        .gradient-btn:focus::after {
            box-shadow: 0 0 0 8px rgba(58, 139, 127, 0.18);
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
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
                        All you do is invest, we handle the rest.
                    </p>

                    <a href="https://wealthtrustcapitalservices.smallcase.com/"
                        class="btn btn-primary rounded-pill px-4 py-2"
                        target="_blank"
                        rel="noopener">
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
                        <a href="https://wealthtrustcapitalservices.smallcase.com/" target="_blank" class="btn btn-pill btn-blue">
                            Subscribe
                        </a>
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
                        <a href="https://pickright.in/investment/advisor-detail/60212628fcf0997e93910424"
                            target="_blank"
                            class="btn btn-pill btn-cream">
                            Subscribe
                        </a>
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
                            <h5 class="text-primary mb-1"><b>Portfolio Construction</b></h5>
                            <p class="mb-0 text-muted">Because your money should work for you</p>
                        </div>
                        <div class="card-visual">
                            <img src="./public/assets/img/ss1.png" class="img-fluid" alt="Personalized Portfolio Construction">
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
                <a href="https://wealthtrustcapitalservices.smallcase.com/"
                    class="btn btn-primary rounded-pill px-4 d-sm-inline-block"
                    target="_blank"
                    rel="noopener">
                    Invest Now
                </a>
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
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/customised-strategy.png" alt="Customised Strategy" class="img-fluid mx-auto d-block" style="max-width:110px;">
                        </div>
                        <h5 class="fw-bold">Expert-curated Portfolios</h5>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/regular-portfolio.png" alt="Regular Portfolio Review" class="img-fluid mx-auto d-block" style="max-width:110px;">
                        </div>
                        <h5 class="fw-bold">Regular Portfolio Review</h5>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="https://wealthtrustcapitalservices.smallcase.com/"
                    class="btn btn-primary rounded-pill px-5"
                    target="_blank"
                    rel="noopener">
                    Get Started
                </a>
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
                        <a href="https://wealthtrustcapitalservices.smallcase.com/"
                            class="btn btn-outline-primary rounded-pill px-4"
                            target="_blank"
                            rel="noopener">
                            Invest Now
                        </a>

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
            <p class="subtle mb-4">WealthTrust Capital Services Konark Shram, Office No. 309, 3rd Floor, Janata Nagar, Tardeo Road, Mumbai Central – 400034</p>

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
                    <button class="nav-link active" id="pills-current-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-current" type="button" role="tab"
                        aria-controls="pills-current" aria-selected="true">Current Month</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-monthly" type="button" role="tab"
                        aria-controls="pills-monthly" aria-selected="false">Monthly</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-annual-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-annual" type="button" role="tab"
                        aria-controls="pills-annual" aria-selected="false">Annual</button>
                </li>
            </ul>

            <div class="tab-content">

                <!-- Current Month -->
                <div class="tab-pane fade show active" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab" tabindex="0">
                    <div class="table-wrap p-2">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Received from</th>
                                        <th scope="col">Pending last month</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Resolved</th>
                                        <th scope="col">Total pending</th>
                                        <th scope="col">Pending &gt;3M</th>
                                        <th scope="col">Avg resolution time (in days)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Monthly -->
                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab" tabindex="0">
                    <div class="table-wrap p-2">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Month</th>
                                        <th scope="col">Carried Forward</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Resolved</th>
                                        <th scope="col">Pending</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Annual -->
                <div class="tab-pane fade" id="pills-annual" role="tabpanel" aria-labelledby="pills-annual-tab" tabindex="0">
                    <div class="table-wrap p-2">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Year</th>
                                        <th scope="col">Carried Forward</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Resolved</th>
                                        <th scope="col">Pending</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <p class="muted-note mt-3">Regulatory Disclosures data shown above is provided monthly.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section: Important Disclosures & Guides -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2 class="mb-3">Important Investor Documents</h2>
                    <p class="text-muted mb-4">
                        Access key resources to understand your investor profile and review our equity disclosure.
                    </p>

                    <!-- Investor Character PDF -->
                    <a
                        id="download-investor-character"
                        class="btn btn-lg gradient-btn btn-pill px-4 mb-3"
                        href="./public/assets/pdf/investor-charter.pdf"
                        download
                        aria-label="Download investor character PDF">
                        Download Investor Character
                    </a>

                    <!-- Equity Disclosure PDF -->
                    <a
                        id="download-equity-disclosure"
                        class="btn btn-lg gradient-btn btn-pill px-4  mb-3"
                        href="./public/assets/pdf/equity-disclosure.pdf"
                        download
                        aria-label="Download equity disclosure PDF">
                        Download Equity Disclosure
                    </a>
                </div>
            </div>
        </div>
    </section>


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

    <script>
        // ===== 1) Data (replace with your real numbers) =====
        // Fetch data from API and render
        function loadDisclosureData() {
            // Current Month
            $.getJSON("./api/disclosure/current.php", function(resp) {
                if (resp.status === "success") {
                    const tbody = document.querySelector("#pills-current tbody");
                    renderTable(tbody, resp.data, [
                        "source",
                        "pending_last_month",
                        "received",
                        "resolved",
                        "total_pending",
                        "pending_over_3m",
                        "avg_days"
                    ]);
                }
            });

            // Monthly
            $.getJSON("./api/disclosure/monthly.php", function(resp) {
                if (resp.status === "success") {
                    const tbody = document.querySelector("#pills-monthly tbody");
                    renderTable(tbody, resp.data, [
                        "month",
                        "carried_forward",
                        "received",
                        "resolved",
                        "pending"
                    ]);
                }
            });

            // Annual
            $.getJSON("./api/disclosure/annual.php", function(resp) {
                if (resp.status === "success") {
                    const tbody = document.querySelector("#pills-annual tbody");
                    renderTable(tbody, resp.data, [
                        "year",
                        "carried_forward",
                        "received",
                        "resolved",
                        "pending"
                    ]);
                }
            });
        }

        // Load on page ready
        $(document).ready(function() {
            loadDisclosureData();
        });

        // ===== 2) Tiny renderer =====
        function renderTable(tbodyEl, rows, cols) {
            if (!tbodyEl) return;
            // clear existing
            while (tbodyEl.firstChild) tbodyEl.removeChild(tbodyEl.firstChild);

            rows.forEach(r => {
                const tr = document.createElement('tr');
                cols.forEach(key => {
                    const td = document.createElement('td');
                    const val = r[key] ?? '';
                    td.textContent = val;
                    tr.appendChild(td);
                });
                tbodyEl.appendChild(tr);
            });
        }

        // ===== 3) Hook up to your existing markup =====
        document.addEventListener('DOMContentLoaded', () => {
            const currentTBody = document.querySelector('#pills-current tbody');
            const monthlyTBody = document.querySelector('#pills-monthly tbody');
            const annualTBody = document.querySelector('#pills-annual tbody');

            // Define column orders (must match your THEADs)
            renderTable(currentTBody, cmRows, [
                'source', 'pending_last_month', 'received', 'resolved', 'total_pending', 'pending_over_3m', 'avg_days'
            ]);

            renderTable(monthlyTBody, monthlyRows, [
                'month', 'carried_forward', 'received', 'resolved', 'pending'
            ]);

            renderTable(annualTBody, annualRows, [
                'year', 'carried_forward', 'received', 'resolved', 'pending'
            ]);
        });
        // JS fallback: if the browser ignores `download` (e.g., cross-origin), force a download via Blob
        (function() {
            const link = document.getElementById('download-investor-character');
            const PDF_URL = link.getAttribute('href'); // 🔁 ensure this is your real PDF path

            link.addEventListener('click', async function(e) {
                // If same-origin, the 'download' attribute usually works—no need to intercept.
                // Try a fetch fallback for broader compatibility.
                try {
                    e.preventDefault();

                    const res = await fetch(PDF_URL);
                    if (!res.ok) {
                        // If fetch fails (CORS or 404), just navigate to the file (opens in-tab)
                        window.location.href = PDF_URL;
                        return;
                    }

                    const blob = await res.blob();
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'investor-character.pdf';
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    URL.revokeObjectURL(url);
                } catch (err) {
                    // As a last resort, open the file
                    window.location.href = PDF_URL;
                }
            });
        })();
    </script>


</body>

</html>