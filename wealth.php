<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo tag -->
    <meta name="description" content="WealthTrust Capital offers goal-based wealth management and personalized investment solutions focused on long-term growth, transparency, and prudent financial planning.">
    <meta name="keywords" content="wealth management, financial planning, portfolio advisory, investment strategy, personal finance solutions">
    <title>Wealth Management Services | Personalized Financial Planning</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon.ico">
    <link rel="canonical" href="https://www.wealthtrustcap.com/wealth" />

    <meta property="og:title" content="Wealth Management Services | Smart Financial Planning for Investors" />
    <meta property="og:description" content="Comprehensive wealth management and financial advisory services to help you plan, invest, and achieve financial success." />
    <meta property="og:url" content="https://www.wealthtrustcap.com/wealth" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="OG_IMAGE_URL" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Wealth Management Services | Smart Financial Planning for Investors" />
    <meta name="twitter:description" content="Comprehensive wealth management and financial advisory services." />
    <meta name="twitter:image" content="OG_IMAGE_URL" />


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Wealth Management",
            "provider": {
                2 "@type": "Organization",
                "name": "WealthTrust Capital",
                "url": "https://www.wealthtrustcap.com"
            },
            "description": "Comprehensive wealth management services including 
            investment planning,
            goal - based advisory,
            and portfolio optimization.
            "
        }
    </script>
    <style>
        .custom-accordion .accordion-button:not(.collapsed) {
            background: var(--secondary-color);
            color: #000;
            box-shadow: none;
        }

        .custom-accordion .accordion-button:not(.collapsed)::after {
            content: '−';
            color: #000;
        }
    </style>
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>

    <!-- Financial Goals Hero Section -->
    <section class="hero-section bg-white">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0 ps-md-5">
                    <h2 class="fw-bold display-5 mb-3">
                        <span class="text-primary">Big Or Small,</span><br>
                        <span class="text-dark">Accomplish All Your<br>Financial Goals</span>
                    </h2>

                    <p class="mb-4">
                        We are your CFO, managing everything from mutual funds to insurance,
                        taxes to real estate, so you can live stress-free.
                    </p>

                    <a href="https://calendly.com/wealthtrustcapitalservices/new-meeting"
                        class="btn btn-primary rounded-pill px-4 py-2"
                        target="_blank"
                        rel="noopener">
                        Book a call
                    </a>

                </div>

                <!-- Right Image -->
                <div class="col-md-6 text-center">
                    <img src="./public/assets/image/big-small-goals.gif"
                        alt="Financial Goals"
                        class="img-fluid mx-auto d-block"
                        style="max-width: 100%">
                </div>

            </div>
        </div>
    </section>

    <!-- What You Get Section -->
    <section class="why-us-section py-5 text-center">
        <div class="container">
            <h2 class="section-title m-0 mb-2">
                What do <span class="text-primary">we offer?</span>
            </h2>
            <p class="mb-5">Multiple solutions under one roof</p>

            <!-- Row 1: 4 cards -->
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl1.png" alt="Mutual funds" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>Mutual funds</strong>
                            <small>Inflation-beating wealth creation</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl2.png" alt="Insurance" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>Insurance</strong>
                            <small>Shield during emergencies</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl3.png" alt="Tax planning" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>Tax planning</strong>
                            <small>Strategic and smart saving</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl4.png" alt="Fixed income" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>Fixed income</strong>
                            <small>For safety-first investors</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: 3 cards -->
            <div class="row g-4 justify-content-center mt-1">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl5.png" alt="REITS" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>REITS</strong>
                            <small>Invest smartly in real estate</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl6.png" alt="Loans" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>Loans</strong>
                            <small>Unlock cash for financial needs</small>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="offer-grid-card">
                        <div class="offer-corner">
                            <img src="./public/assets/image/icon/wl7.png" alt="Private equity, AIFs, PMS" class="offer-corner-icon">
                        </div>
                        <div class="offer-text">
                            <strong>Private equity, AIFs, PMS</strong>
                            <small>Advanced options for diversification</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-5">
                <a href="https://wealthtrustcapital.themfbox.com" class="btn btn-primary rounded-pill px-5">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Goal Planner -->
    <section class="why-us-section py-5 text-center">
        <div class="container">
            <h2 class="section-title m-0 mb-2">
                Your Personal <span class="text-primary">Goal Planner</span>
            </h2>
            <p class="mb-4">Choose your goal</p>

            <div class="row justify-content-center g-4 py-3 mb-5">
                <div class="col-12 col-lg-4">
                    <div class="d-grid gap-3">
                        <button type="button" class="goal-box btn text-start selected-goal"
                            data-goal='{"title":"Wealth building","desc":"Systematic, compounding-led wealth creation aligned to your time horizon.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/wealth.png" alt="" class="goal-icon"> Wealth building
                        </button>
                    </div>
                </div>
            </div>

            <div class="row g-4 align-items-start">
                <!-- Left column -->
                <div class="col-12 col-lg-4">
                    <div class="d-grid gap-3 goal-stack-left">
                        <button type="button" class="goal-box btn text-start"
                            data-goal='{"title":"Emergency","desc":"Build a buffer to handle unforeseen expenses without selling investments.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/emergency.png" alt="" class="goal-icon"> Emergency
                        </button>

                        <button type="button" class="goal-box btn text-start"
                            data-goal='{"title":"Dream Car","desc":"Plan your car purchase with a smart saving and investing path.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/car.png" alt="" class="goal-icon"> Dream Car
                        </button>

                        <button type="button" class="goal-box btn text-start"
                            data-goal='{"title":"Dream Home","desc":"Move towards your home goal with a disciplined, goal-based plan.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/home.png" alt="" class="goal-icon"> Dream Home
                        </button>
                    </div>
                </div>

                <!-- Center card -->
                <div class="col-12 col-lg-4">
                    <div class="goal-center card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title mb-3" id="goalTitle">Wealth building</h5>
                            <img id="goalImg" src="./public/assets/image/dream.gif" alt="Wealth building" class="img-fluid mb-3 rounded">
                            <p class="card-text text-muted" id="goalDesc">
                                Systematic, compounding-led wealth creation aligned to your time horizon.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right column -->
                <div class="col-12 col-lg-4">
                    <div class="d-grid gap-3 goal-stack-right">
                        <button type="button" class="goal-box btn text-start"
                            data-goal='{"title":"Retirement","desc":"Secure your post-work life with inflation-aware, risk-fit allocation.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/retirement.png" alt="" class="goal-icon"> Retirement
                        </button>

                        <button type="button" class="goal-box btn text-start"
                            data-goal='{"title":"Child Education","desc":"Prepare a financial ladder for your child to achieve their dreams.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/education.png" alt="" class="goal-icon"> Child Education
                        </button>

                        <button type="button" class="goal-box btn text-start"
                            data-goal='{"title":"Child’s Marriage","desc":"Plan large future expenses with a balanced, milestone-based plan.","img":"./public/assets/image/dream.gif"}'>
                            <img src="./public/assets/image/icon/marriage.png" alt="" class="goal-icon"> Child’s Marriage
                        </button>
                    </div>
                </div>
            </div>

            <!-- CTA under grid -->
            <div class="text-center mt-4">
                <a id="planGoalBtn" href="./sip-calculator.php" class="btn btn-primary rounded-pill px-5">
                    Plan My Goal
                </a>
            </div>

        </div>
    </section>

    <section class="howitworks-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-2 section-title">How It <span class="text-primary">Works</span></h2>
            <p class="mb-5">
                Uncomplicate your financial life. Here is how we work:
            </p>

            <!-- Background with steps -->
            <div class="hiw-wrapper position-relative mx-auto">
                <!-- Background with Discovery, Goal Mapping, etc. -->
                <img src="./public/assets/image/bg.png"
                    alt="Steps background"
                    class="img-fluid">

                <!-- Center animated GIF -->
                <img src="./public/assets/image/how-it-work.gif"
                    alt="Central process"
                    class="hiw-center-gif">
            </div>

            <!-- Mobile/Tablet timeline (hidden on desktop) -->
            <ol class="hiw-mobile list-unstyled text-start mx-auto">
                <li class="hiw-step">
                    <img src="./public/assets/image/icon/dc.png" alt="" class="hiw-ico mx-3 my-2">
                    <div>
                        <h6 class="mb-1 fw-semibold">Discovery Call</h6>
                        <p class="mb-0 text-muted">Understand your life goals and current financial picture</p>
                    </div>
                </li>

                <li class="hiw-step">
                    <img src="./public/assets/image/icon/gm.png" alt="" class="hiw-ico mx-3 my-2">
                    <div>
                        <h6 class="mb-1 fw-semibold">Goal Mapping</h6>
                        <p class="mb-0 text-muted">Break goals into a timeline, value, and monthly investment</p>
                    </div>
                </li>

                <li class="hiw-step">
                    <img src="./public/assets/image/icon/execute.png" alt="" class="hiw-ico mx-3 my-2">
                    <div>
                        <h6 class="mb-1 fw-semibold">Execution &amp; Monitoring</h6>
                        <p class="mb-0 text-muted">We invest, track, and rebalance regularly</p>
                    </div>
                </li>

                <li class="hiw-step">
                    <img src="./public/assets/image/icon/design.png" alt="" class="hiw-ico mx-3 my-2">
                    <div>
                        <h6 class="mb-1 fw-semibold">Portfolio Design</h6>
                        <p class="mb-0 text-muted">Choose the right mix of MFs, insurance, and other tools</p>
                    </div>
                </li>

                <li class="hiw-step">
                    <img src="./public/assets/image/icon/review.png" alt="" class="hiw-ico mx-3 my-2">
                    <div>
                        <h6 class="mb-1 fw-semibold">Annual Wealth Review</h6>
                        <p class="mb-0 text-muted">Life evolves. So does your plan.</p>
                    </div>
                </li>
            </ol>

            <!-- CTA -->
            <div class="mt-4">
                <a href="https://calendly.com/wealthtrustcapitalservices/new-meeting"
                    class="btn btn-primary rounded-pill px-4"
                    target="_blank"
                    rel="noopener">
                    Book a call
                </a>
            </div>

        </div>
    </section>

    <!-- Who Is This For -->
    <section class="who-for-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">
                Who Is This <span class="text-primary">For?</span>
            </h2>
            <div class="row align-items-center">
                <!-- Left: Illustration -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="./public/assets/image/who-is-this-for-2.gif"
                        alt="Who is this for"
                        class="img-fluid mx-auto d-block">
                </div>

                <!-- Right: Checklist -->
                <div class="col-md-6">
                    <p class="mb-3">Whether you're a:</p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-3 p-2 bg-white rounded shadow-sm who-for-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-check2-circle text-success fw-bold me-3"
                                viewBox="0 0 16 16" style="min-width:20px;">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                            </svg>
                            <span class="fw-semibold">Salaried professional planning retirement or kids’ education</span>
                        </li>

                        <li class="d-flex align-items-center mb-3 p-2 bg-white rounded shadow-sm who-for-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-check2-circle text-success fw-bold me-3"
                                viewBox="0 0 16 16" style="min-width:20px;">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                            </svg>
                            <span class="fw-semibold">Business owner looking to optimise taxes and diversify wealth</span>
                        </li>

                        <li class="d-flex align-items-center mb-3 p-2 bg-white rounded shadow-sm who-for-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-check2-circle text-success fw-bold me-3"
                                viewBox="0 0 16 16" style="min-width:20px;">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                            </svg>
                            <span class="fw-semibold">NRI managing India-based assets</span>
                        </li>

                        <li class="d-flex align-items-center p-2 bg-white rounded shadow-sm who-for-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-check2-circle text-success fw-bold me-3"
                                viewBox="0 0 16 16" style="min-width:20px;">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                            </svg>
                            <span class="fw-semibold">HNI aiming to preserve and grow intergenerational wealth</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">
                What do our <span class="text-primary">happy investors</span> say?
            </h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card p-3 rounded h-100 shadow-sm">
                        <strong>— Ritu Sharma, Senior IT Professional, Pune</strong>
                        <p class="mb-0 mt-2">
                            “I always thought I could manage my finances on my own. But once I started working with Sneha and her team, I realised what true goal-based planning feels like. My SIPs are aligned with my daughter’s education, and I no longer stress over market noise.”
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-3 rounded h-100 shadow-sm">
                        <strong>— Rakesh Sinha, MSME Entrepreneur, Indore</strong>
                        <p class="mb-0 mt-2">
                            “As a business owner, my income is irregular, which makes long-term planning hard. WealthTrust helped me create a flexible yet disciplined investment plan with mutual funds and insurance that adjusts with my cash flow.”
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-3 rounded h-100 shadow-sm">
                        <strong>— Neha L., NRI Client, UAE</strong>
                        <p class="mb-0 mt-2">
                            “I live in Dubai but wanted a structured plan to manage my India-based assets and NPS contributions. WealthTrust gave me one advisor, one plan, and complete peace of mind.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5 ">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: var(--primary-color); font-size: 2.7rem;">FAQ’s</h2>
            <div class="row align-items-center">
                <!-- FAQ Accordion (right) -->
                <div class="col-lg-7 order-2 order-md-1">
                    <div class="accordion custom-accordion" id="faqAccordion">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1-heading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    1. How is wealth management different from stock or mutual fund advice?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Wealth management covers everything: your goals, taxes, insurance, real estate, and investments — all under one umbrella.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    2. Is this only for high-net-worth individuals?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No. Our services are for professionals, business owners, NRIs, and families of all sizes who want to manage money smarter and plan for the future.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    3. Will I get dedicated expert support?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. You get direct access to experienced advisors who understand your unique goals and guide you with personalized strategies.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    4. How are you compensated?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We charge transparent, flat advisory fees. Our recommendations are unbiased, with no hidden commissions or product pushes.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    5. Can I include my spouse or parents in the planning?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely. We encourage family-based financial planning so that your entire household’s goals are aligned and secure.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq6-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                    6. Do you offer online/virtual support?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. Most of our consultations and reviews are virtual, so you can connect with us anytime, anywhere in the world.
                                </div>
                            </div>
                        </div>

                    </div> <!-- /.custom-accordion -->
                </div>

                <!-- Bot illustration (left) -->
                <div class="col-lg-5 mb-4 mb-lg-0 text-center order-1 order-md-2">
                    <img src="./public/assets/image/FAQ3.gif" alt="FAQ Bot" class="h-100 mx-auto d-block">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleEl = document.getElementById('goalTitle');
            const descEl = document.getElementById('goalDesc');
            const imgEl = document.getElementById('goalImg');
            const planBtn = document.getElementById('planGoalBtn');

            // Map goal titles -> calculator links
            const goalToCalculator = {
                'Wealth building': './sip-calculator.php',
                'Emergency': './lumpsum-calculator.php',
                'Dream Car': './car-calculator.php',
                'Dream Home': './house-calculator.php',
                'Retirement': './retirement-calculator.php',
                'Child Education': './target-sip-calculator.php',
                'Child’s Marriage': './marriage-calculator.php'
            };

            const boxes = document.querySelectorAll('.goal-box');

            function updatePlanLink(title) {
                // Fallback to SIP if no mapping found
                planBtn.href = goalToCalculator[title] || './sip-calculator.php';
            }

            // Initialize link based on the preselected goal
            const initiallySelected = document.querySelector('.goal-box.selected-goal');
            if (initiallySelected) {
                const initData = JSON.parse(initiallySelected.getAttribute('data-goal'));
                updatePlanLink(initData.title);
            } else {
                updatePlanLink(titleEl.textContent.trim());
            }

            boxes.forEach(btn => {
                btn.addEventListener('click', () => {
                    // update selected state
                    boxes.forEach(b => b.classList.remove('selected-goal'));
                    btn.classList.add('selected-goal');

                    // read payload
                    const data = JSON.parse(btn.getAttribute('data-goal'));
                    titleEl.textContent = data.title;
                    descEl.textContent = data.desc;
                    imgEl.src = data.img;
                    imgEl.alt = data.title;

                    // update CTA link
                    updatePlanLink(data.title);
                });
            });
        });
    </script>

</body>

</html>