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
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold display-5 mb-3">
                        Want To Invest <span class="text-primary">Like A Pro</span><br>
                        Without Spending Hours <br>
                        <span class="text-primary">In Research?</span>
                    </h2>

                    <p class="text-muted mb-4">
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
            <p class="text-muted text-center mb-5">Transparent Pricing. No Hidden Fees.</p>

            <!-- Cards -->
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-12 col-lg-4 mb-md-0 mb-5 mt-0">
                    <div class="offering-card offering--green h-100 p-4 border rounded d-flex flex-column">
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="./public/assets/img/logo.png" alt="" class="portfolio-badge" style="height: 50px; width: 50px;">
                                <div>
                                    <h5 class="m-0 fw-bold">Curated Portfolio</h5>
                                    <small class="text-muted">Ready stocks baskets</small>
                                </div>
                            </div>

                            <ul class="offering-list">
                                <li>Custom-built portfolio</li>
                                <li>Updates on company fundamentals, triggers and valuations</li>
                                <li>Clear investment rationale to support long-term decisions</li>
                            </ul>
                        </div>

                        <!-- Bottom section -->
                        <div class="mt-auto">
                            <hr class="offering-sep my-4">
                            <p class="m-0 fw-semibold text-success">
                                Recommended Investment: Rs. 20 lakhs
                            </p>
                            <p class="m-0 text-success">Contact us for more details</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-outline-primary rounded-pill px-4">Subscribe</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-lg-4 my-md-0 my-5">
                    <div class="offering-card offering--blue h-100 p-4 border rounded d-flex flex-column">
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="./public/assets/image/icon/small-cap.png" alt="" class="portfolio-badge">
                                <div>
                                    <h5 class="m-0 fw-bold">Small Case</h5>
                                    <small class="text-muted">Ready stocks baskets</small>
                                </div>
                            </div>

                            <ul class="offering-list">
                                <li>Multiple curated baskets, each with 10–15 high-conviction stocks</li>
                                <li>Built for long-term growth across themes &amp; sectors</li>
                                <li>Periodic rebalancing based on company performance and macro trends</li>
                            </ul>
                        </div>

                        <!-- Bottom section -->
                        <div class="mt-auto">
                            <hr class="offering-sep my-4">
                            <p class="m-0 fw-semibold text-primary">
                                Minimum Investment: Rs. 50,000
                            </p>
                            <p class="m-0 text-primary">Fees: Rs. 7,500 per year</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-outline-primary rounded-pill px-4">Subscribe</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-lg-4 mt-md-0 mt-5">
                    <div class="offering-card offering--cream h-100 p-4 border rounded d-flex flex-column">
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="./public/assets/image/icon/right-check.png" alt="" class="portfolio-badge">
                                <div>
                                    <h5 class="m-0 fw-bold">Pickright</h5>
                                    <small class="text-muted">Ready stocks baskets</small>
                                </div>
                            </div>

                            <ul class="offering-list">
                                <li>Positional trading calls across equities and F&amp;O</li>
                                <li>Automated portfolio updates based on market trends</li>
                                <li>Easy tracking with a user-friendly app and timely alerts</li>
                            </ul>
                        </div>

                        <!-- Bottom section -->
                        <div class="mt-auto">
                            <hr class="offering-sep my-4">
                            <p class="m-0 fw-semibold text-warning">
                                Recommended Investment: &gt; Rs. 50,000
                            </p>
                            <p class="m-0 text-warning">Fees: Rs. 7,500 per year</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-outline-primary rounded-pill px-4">Subscribe</button>
                    </div>
                </div>
            </div>

            <!-- Big CTA (always visible, with extra spacing) -->
            <div class="text-center mt-5 pt-4">
                <a href="#" class="btn btn-primary btn-lg rounded-pill px-5">
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
                            <img src="./public/assets/image/icon/discovery-call.png" alt="Discovery Call" class="img-fluid mx-auto d-block" style="max-width:80px;">
                        </div>
                        <h5 class="fw-bold">Discovery Call</h5>
                        <p class="text-muted mb-0">We understand your goals, lifestyle, income, and risk profile.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/customised-strategy.png" alt="Customised Strategy" class="img-fluid mx-auto d-block" style="max-width:80px;">
                        </div>
                        <h5 class="fw-bold">Customised Strategy</h5>
                        <p class="text-muted mb-0">We build a tailored equity strategy for you.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/stock-advisory.png" alt="Stock Advisory" class="img-fluid mx-auto d-block" style="max-width:80px;">
                        </div>
                        <h5 class="fw-bold">Stock Advisory</h5>
                        <p class="text-muted mb-0">Handpicked stocks with rationale on when to enter, exit, and why.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="how-card text-center p-4 h-100 rounded shadow-sm">
                        <div class="mb-3">
                            <img src="./public/assets/image/icon/regular-portfolio.png" alt="Regular Portfolio Review" class="img-fluid mx-auto d-block" style="max-width:80px;">
                        </div>
                        <h5 class="fw-bold">Regular Portfolio Review</h5>
                        <p class="text-muted mb-0">Assess performance, and rebalance if needed.</p>
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
                                <i class="fa-solid fa-check text-primary me-2"></i> Which stocks to buy
                            </li>
                            <li class="who-for-item mb-2">
                                <i class="fa-solid fa-check text-primary me-2"></i> How much to invest
                            </li>
                            <li class="who-for-item mb-2">
                                <i class="fa-solid fa-check text-primary me-2"></i> When to exit
                            </li>
                            <li class="who-for-item mb-2">
                                <i class="fa-solid fa-check text-primary me-2"></i> Don’t have time to research
                            </li>
                            <li class="who-for-item mb-0">
                                <i class="fa-solid fa-check text-primary me-2"></i> And you can’t control your emotions
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
                        style="max-width: 400px;">
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

    <!-- FAQ Section -->
    <section class="faq-section py-5" style="background: var(--section-bg-light);">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: var(--primary-color); font-size: 2.7rem;">Still Have Questions?</h2>
            <div class="row align-items-center">

                <!-- FAQ Accordion (right) -->
                <div class="col-lg-7">
                    <div class="custom-accordion" id="faqAccordion">
                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1-heading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    1. Who is WealthTrust Capital Services best suited for?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We cater to professionals, business owners, and families looking to invest smartly, plan taxes efficiently, and secure their financial future, whether you're just starting or managing significant wealth.
                                </div>
                            </div>
                        </div>
                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    2. What makes WealthTrust different from other advisors?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our advisory is highly personalized, unbiased, and built on a solid track record of helping clients achieve their financial goals.
                                </div>
                            </div>
                        </div>
                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    3. Can I book a consultation even if I’m new to investing?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! We work with both first-time and experienced investors, and will guide you every step of the way.
                                </div>
                            </div>
                        </div>
                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    4. What is the minimum investment amount required to start?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We recommend a minimum investment of ₹10,000, but our team will help tailor a plan for your specific needs.
                                </div>
                            </div>
                        </div>
                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    5. Are your services only for people in a specific city or region?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, we work with clients all over India (and NRIs too!). Location is never a barrier.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.custom-accordion -->
                </div>
                <!-- Bot illustration (left) -->
                <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                    <img src="./public/assets/image//FAQ3.gif" alt="Have Questions Bot" class="img-fluid mx-auto d-block" style="max-width: 350px;">
                    <!-- Replace with your SVG/PNG -->
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