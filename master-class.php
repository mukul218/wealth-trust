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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/assets/css/style.css">
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
    <!-- Masterclass Promo (Hero) -->
    <section class="hero-section master-hero">
        <div class="container">
            <div class="soft-frame p-3 p-md-4 bg-white m-3">
                <!-- Split heading like the reference -->
                <h1 class="display-5  text-center mb-4 fw-bold"><b>

                        Never Think Twice <span class="text-primary">Before Spending</span>
                    </b>
                </h1>
                <div class="row align-items-center g-4">
                    <!-- Left: photo -->
                    <div class="col-md-5 text-center">
                        <div class="photo-card m-auto">
                            <img src="./public/assets/img/ceo1.png" class="img-fluid mx-auto d-block" alt="Masterclass Host">
                        </div>
                    </div>

                    <!-- Right: green panel with tiles -->
                    <div class="col-md-7">
                        <h2 class="text-md-end fs-1 text-center">
                            <span class="text-dark">Unlock the life you dream of with</span><br>
                            <span class="text-primary"> smart investing</span>
                        </h2>
                        <div class="mc-panel p-4 p-md-4 rounded-4">
                            <h5 class="text-white text-center mb-4">Join our 2-hour investment masterclass</h5>

                            <div class="row g-3">
                                <!-- Date -->
                                <div class="col-sm-6">
                                    <div class="mc-tile d-flex align-items-center">
                                        <span class="icon-chip">
                                            <i class="fas fa-calendar-alt"></i>
                                        </span>
                                        <div>
                                            <div class="mc-label">Date</div>
                                            <div class="mc-value">Sun, 5th July 25</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Time -->
                                <div class="col-sm-6">
                                    <div class="mc-tile d-flex align-items-center">
                                        <span class="icon-chip">
                                            <i class="fas fa-clock"></i>
                                        </span>
                                        <div>
                                            <div class="mc-label">Time</div>
                                            <div class="mc-value">12:00pm</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Language -->
                                <div class="col-sm-6">
                                    <div class="mc-tile d-flex align-items-center">
                                        <span class="icon-chip">
                                            <i class="fas fa-language"></i>
                                        </span>
                                        <div>
                                            <div class="mc-label">Language</div>
                                            <div class="mc-value">English</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recorded -->
                                <div class="col-sm-6">
                                    <div class="mc-tile d-flex align-items-center">
                                        <span class="icon-chip">
                                            <i class="fas fa-video"></i>
                                        </span>
                                        <div>
                                            <div class="mc-label">Recorded in</div>
                                            <div class="mc-value">Zoom</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="text-white text-center mt-4 mb-0 fw-semibold">Transform your life</p>
                        </div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-primary rounded-pill px-4">Book my Seat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5" style="background-color:#fcf8f5;">
        <div class="container text-center">

            <!-- split-colored heading like the mock -->
            <h2 class="section-title mb-4 ">
                Are you overwhelmed <span class="text-primary">by these questions?</span>
            </h2>

            <div class="row justify-content-center">
                <!-- 1 -->
                <div class="col-md-5 mb-3 color-primary">
                    <div class="q-card">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/mc1.png" alt="" />
                        </span>
                        <span class="q-text">Am I investing the right way?</span>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-md-5 mb-3 color-primary">
                    <div class="q-card">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/mc2.png" alt="" />
                        </span>
                        <span class="q-text">Is my portfolio diversified enough?</span>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-md-5 mb-3 color-primary">
                    <div class="q-card">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/mc3.png" alt="" />
                        </span>
                        <span class="q-text">Will I have enough to retire comfortably?</span>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-md-5 mb-3 color-primary">
                    <div class="q-card">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/mc4.png" alt="" />
                        </span>
                        <span class="q-text">How do I plan my exit?</span>
                    </div>
                </div>

                <!-- 5 — wide tile -->
                <div class="col-md-10 mb-4 color-primary">
                    <div class="q-card q-card-wide">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/mc5.png" alt="" />
                        </span>
                        <span class="q-text">Why aren’t my returns matching my expectations?</span>
                    </div>
                </div>
            </div>

            <p class="mb-3 fs-6 fw-bold">Get answers to each of these in simple language</p>
            <a href="#" class="btn btn-primary rounded-pill px-4">Book Now</a>
        </div>
    </section>

    <!-- What You'll Learn in the Masterclass -->
    <section class="py-5" style="background-color:#fcf8f5;">
        <div class="container text-center">
            <h2 class="section-title  mb-5">
                What Will You Learn <span class="text-primary">In The Masterclass?</span>
            </h2>

            <div class="row justify-content-center g-4">
                <!-- 1 -->
                <div class="col-md-4">
                    <div class="q-card d-flex flex-column align-items-center text-center p-3">
                        <span class="q-icon mb-3">
                            <img src="./public/assets/image/icon/ml1.png" alt="Mistakes Icon" class="img-fluid" style="max-width:60px;" />
                        </span>
                        <span class="q-text">5 costly mistakes people make with their money &amp; how to avoid them?</span>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-md-4">
                    <div class="q-card d-flex flex-column align-items-center text-center p-3">
                        <span class="q-icon mb-3">
                            <img src="./public/assets/image/icon/ml2.png" alt="Retirement Icon" class="img-fluid" style="max-width:60px;" />
                        </span>
                        <span class="q-text">How should you calculate the retirement corpus needed?</span>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-md-4">
                    <div class="q-card d-flex flex-column align-items-center text-center p-3">
                        <span class="q-icon mb-3">
                            <img src="./public/assets/image/icon/ml3.png" alt="Goals Icon" class="img-fluid" style="max-width:60px;" />
                        </span>
                        <span class="q-text">Where to invest and how much for different life goals?</span>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-md-4">
                    <div class="q-card d-flex flex-column align-items-center text-center p-3">
                        <span class="q-icon mb-3">
                            <img src="./public/assets/image/icon/ml4.png" alt="Exit Icon" class="img-fluid" style="max-width:60px;" />
                        </span>
                        <span class="q-text">Why does exit planning matter &amp; how to do it right?</span>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-md-4">
                    <div class="q-card d-flex flex-column align-items-center text-center p-3">
                        <span class="q-icon mb-3">
                            <img src="./public/assets/image/icon/ml5.png" alt="Formula Icon" class="img-fluid" style="max-width:60px;" />
                        </span>
                        <span class="q-text">The secret formula to turn your goals into reality.</span>
                    </div>
                </div>
            </div>

            <p class="mt-4 fs-6 fw-bold">Stop guessing, start building a secure future</p>
            <a href="#" class="btn btn-primary rounded-pill px-4">Reserve Seat</a>
        </div>
    </section>

    <!-- Why Choose WealthTrust -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="section-title  mb-5">
                Why choose <span class="text-primary">WealthTrust?</span>
            </h2>

            <div class="row justify-content-center g-4">
                <!-- 1 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="q-card text-center d-block h-100 pt-4">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/g1.png" alt="Guidance">
                        </span><br>
                        <span class="q-text">Guidance when you are stuck</span>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="q-card text-center d-block h-100 pt-4">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/g2.png" alt="200 Cr">
                        </span><br>
                        <span class="q-text">Over 200 Cr. under management</span>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="q-card text-center d-block h-100 pt-4">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/g3.png" alt="Experience">
                        </span><br>
                        <span class="q-text">Veterans with 15+ years of experience</span>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="q-card text-center d-block h-100 pt-4">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/g4.png" alt="Families">
                        </span><br>
                        <span class="q-text">Trusted by 500+ families</span>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="q-card text-center d-block h-100 pt-4">
                        <span class="q-icon">
                            <img src="./public/assets/image/icon/g5.png" alt="Workshops">
                        </span><br>
                        <span class="q-text">80+ workshops delivered &amp; counting</span>
                    </div>
                </div>
            </div>

            <p class="mt-4 fw-bold">We don’t just tell you where to invest. We help you understand why.</p>
            <a href="#" class="btn btn-primary rounded-pill px-4">Book my seat</a>
        </div>
    </section>

    <!-- Who Should Attend -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="section-title  mb-4">Who should <span class="color-primary">attend?</span></h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded h-100 bg-white">
                        <img src="./public/assets/img/o1-new.png" alt="Professional" class="img-fluid mb-2 mx-auto d-block">
                        <p class="mb-0">People who want professional management</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded h-100 bg-white">
                        <img src="./public/assets/img/o2.png" alt="Passion Focus" class="img-fluid mb-2 mx-auto d-block">
                        <p class="mb-0">People who want money to grow & they focus on their passion</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded h-100 bg-white">
                        <img src="./public/assets/img/o3.png" alt="Secure Future" class="img-fluid mb-2 mx-auto d-block">
                        <p class="mb-0">Individuals who want a secure financial future</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded h-100 bg-white">
                        <img src="./public/assets/img/o4.png" alt="Money Work" class="img-fluid mb-2 mx-auto d-block">
                        <p class="mb-0">Anyone who wants to make their money work for them</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="section-title  mb-5">Hear From <span class="color-primary">Past Attendees</span></h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded text-start h-100 bg-white">
                        <h6 class=" text-success">Anjali Deshmukh</h6>
                        <p class="mb-0">I had been investing in mutual funds for 3 years but had no idea what I was actually doing. I picked funds based on what friends said or what was trending. This webinar helped me realise the importance of goal-based investing and having a strategy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded text-start h-100 bg-white">
                        <h6 class=" text-success">Rohit Khandelwal</h6>
                        <p class="mb-0">I’ve attended a few webinars before — most were just about selling some product or filled with technical jargon. But this one stood out. Sneha and the team spoke in simple language, used real-life examples, and answered questions with patience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded text-start h-100 bg-white">
                        <h6 class=" text-success">Manish Rawat</h6>
                        <p class="mb-0">For years, I kept delaying financial planning, thinking I would ‘figure it out later.’ I’ve made decent money, but didn’t know how to grow or protect it. This masterclass opened my eyes. It helped me understand how much I need to retire, how to exit bad investments, and how to plan clearly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Your Speaker -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container">
            <h2 class="section-title text-center  mb-5">
                Meet <span class="color-primary">Your Speaker</span>
            </h2>

            <div class="row align-items-center justify-content-center g-4">
                <!-- Speaker Image & Name -->
                <div class="col-md-4 text-center">
                    <img src="./public/assets/img/ceo1.png"
                        class="img-fluid rounded-4 border mx-auto"
                        alt="Masterclass Host" style="max-width: 280px;">
                    <h4 class="mt-3 mb-0 fw-bold"><b>Sneha Jain</b></h4>
                    <p class="mb-0">CEO / Founder</p>
                </div>

                <!-- Speaker Details -->
                <div class="col-md-6 bg-light-green p-3 rounded border">
                    <p class="fs-5 mb-4 fw-bold ">
                        “It’s not just about returns. It’s about life goals, freedom, and confidence.” &mdash; Sneha Jain
                    </p>
                    <ul class=" fs-5">
                        <li class="mb-2">SEBI Registered Research Analyst</li>
                        <li class="mb-2">Founder, WealthTrust Capital Services</li>
                        <li class="mb-2">AMFI-Registered Mutual Fund Distributor</li>
                        <li class="mb-2">16+ years of experience in financial markets</li>
                        <li class="mb-2">Helped 500+ families build wealth</li>
                        <li class="mb-2">Known for making finance relatable and human</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container">
            <h2 class="section-title text-center  mb-4">FAQs</h2>

            <div class="custom-accordion" id="faqAccordion">

                <!-- FAQ 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1-heading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                            1. Do I have to invest after the webinar?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Not at all. There’s no obligation to invest. If you want personalised guidance, we offer a free 1-on-1 session afterward.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                            2. What language is the webinar conducted in?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The webinar is conducted in English, using simple and easy-to-understand language.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                            3. How technical is the content?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The content is designed for everyday investors. No prior financial knowledge is needed.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq4-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                            4. Can I attend this with my spouse/partner?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely. In fact, we encourage couples to attend together for aligned financial goals.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq5-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                            5. What if I miss the live webinar?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Don’t worry. You’ll get access to the recorded session if you register.
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq6-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                            6. Is this for advanced investors, too?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. Even seasoned investors find our strategies eye-opening and highly relevant.
                        </div>
                    </div>
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