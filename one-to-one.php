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
 <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon.ico">
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

    <!-- Financial Expert Section -->
    <section class="hero-section" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Text Content -->
                <div class="col-md-6 text-center text-md-start ps-md-5">
                    <h2 class="fw-bold mb-3" style="font-size: 3rem;">
                        <b>
                            You Might Be <span class="color-primary">Investing</span><br>
                            Your <span class="color-primary">Money Well.</span>
                        </b>
                    </h2>
                    <p class="mb-4 fs-5">But a financial expert can add more.</p>

                    <!-- Feature Boxes -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="p-2 rounded bg-light-green d-flex align-items-center shadow-sm w-auto">
                            <img src="./public/assets/image/icon/o1.png" alt="Trusted"
                                class="me-3" style="width: 40px; height: 40px;">
                            <strong>Trusted by <span class="color-primary">500+ families</span></strong>
                        </div>
                        <div class="p-2 rounded bg-light-green d-flex align-items-center shadow-sm w-auto">
                            <img src="./public/assets/image/icon/o2.png" alt="Managing"
                                class="me-3" style="width: 40px; height: 40px;">
                            <strong>Managing <span class="color-primary">₹200+ crore</span></strong>
                        </div>
                        <div class="p-2 rounded bg-light-green d-flex align-items-center shadow-sm w-auto">
                            <img src="./public/assets/image/icon/o3.png" alt="Experience"
                                class="me-3" style="width: 40px; height: 40px;">
                            <strong><span class="color-primary">15 Years</span> of Experience</strong>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="https://calendly.com/snehajain-wealthtrustcapitalservices/30"
                        class="btn btn-success px-4 rounded-pill"
                        target="_blank"
                        rel="noopener">
                        Schedule a Free Call
                    </a>

                </div>

                <!-- Image -->
                <div class="col-md-6 text-center">
                    <img src="./public/assets/image/you-might-be-investing.gif" alt="Financial Expert"
                        class="img-fluid mx-auto d-block">
                </div>

            </div>
        </div>
    </section>

    <!-- Why Consult With an Expert Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3 sction-title fs-1"> <b>Why consult <span class="color-primary">with an expert?</span> </b></h2>
            <p class="mb-4">Ask yourself these 3 questions:</p>

            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="border rounded p-4 h-100 bg-white">
                        <img src="./public/assets/image/icon/oo1.png" alt="Time Icon" class="mb-3 mx-auto d-block" style="width:50px; height:50px;">
                        <p class="mb-0 fw-bold">Do you have the time to manage your investments actively?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded p-4 h-100 bg-white">
                        <img src="./public/assets/image/icon/oo2.png" alt="Expertise Icon" class="mb-3 mx-auto d-block" style="width:50px; height:50px;">
                        <p class="mb-0 fw-bold">Do you have the expertise to pick the right products?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded p-4 h-100 bg-white">
                        <img src="./public/assets/image/icon/oo3.png" alt="Calm Decision Icon" class="mb-3 mx-auto d-block" style="width:50px; height:50px;">
                        <p class="mb-0 fw-bold">Can you stay calm and make rational decisions in a volatile market?</p>
                    </div>
                </div>
            </div>

            <p class="mt-4 fw-bold">Even if one answer is "no," it's time to talk to an expert.</p>
            <a href="https://calendly.com/snehajain-wealthtrustcapitalservices/30"
                class="btn btn-success mt-2 px-4 rounded-pill"
                target="_blank"
                rel="noopener">
                Book a call
            </a>

        </div>
    </section>


    <!-- Financial Planning Goals Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="fw-bold mb-2 section-title">
                <b>
                    You will end up at <span class="color-primary">your destination</span> when you <span class="color-primary">plan right.</span>
                </b>
            </h2>
            <p class="mb-5 fs-4">What is your priority?</p>

            <div class="row g-4 justify-content-center">

                <!-- Retirement -->
                <div class="col-md-4 col-sm-6">
                    <a href="./retirement-calculator.php" class="text-decoration-none text-dark">
                        <div class="p-4 border rounded h-100 bg-white text-center">
                            <img src="./public/assets/image/icon/kk1.png" alt="Retirement Icon" class="mb-3 mx-auto d-block" style="width: 50px;">
                            <h4 class="fw-bold">Retirement</h4>
                            <p>Build a plan that lasts as long as you do. No running out of money.</p>
                        </div>
                    </a>
                </div>

                <!-- Wealth Building -->
                <div class="col-md-4 col-sm-6">
                    <a href="./crorepati-calculator.php" class="text-decoration-none text-dark">
                        <div class="p-4 border rounded h-100 bg-white text-center">
                            <img src="./public/assets/image/icon/kk2.png" alt="Wealth Icon" class="mb-3 mx-auto d-block" style="width: 50px;">
                            <h4 class="fw-bold">Wealth Building</h4>
                            <p>Create a long-term investment strategy that compounds meaningfully.</p>
                        </div>
                    </a>
                </div>

                <!-- Child Education -->
                <div class="col-md-4 col-sm-6">
                    <a href="./target-sip-calculator.php" class="text-decoration-none text-dark">
                        <div class="p-4 border rounded h-100 bg-white text-center">
                            <img src="./public/assets/image/icon/kk3.png" alt="Child Education Icon" class="mb-3 mx-auto d-block" style="width: 50px;">
                            <h4 class="fw-bold">Child Education</h4>
                            <p>Estimate costs, set timelines, and invest accordingly.</p>
                        </div>
                    </a>
                </div>

                <!-- Child's Marriage -->
                <div class="col-md-4 col-sm-6">
                    <a href="./marriage-calculator.php" class="text-decoration-none text-dark">
                        <div class="p-4 border rounded h-100 bg-white text-center">
                            <img src="./public/assets/image/icon/kk4.png" alt="Child's Marriage Icon" class="mb-3 mx-auto d-block" style="width: 50px;">
                            <h4 class="fw-bold">Child's Marriage</h4>
                            <p>Plan a worry-free wedding fund that doesn’t strain your future.</p>
                        </div>
                    </a>
                </div>

                <!-- Dream Home -->
                <div class="col-md-4 col-sm-6">
                    <a href="./house-calculator.php" class="text-decoration-none text-dark">
                        <div class="p-4 border rounded h-100 bg-white text-center">
                            <img src="./public/assets/image/icon/kk5.png" alt="Dream Home Icon" class="mb-3 mx-auto d-block" style="width: 50px;">
                            <h4 class="fw-bold">Dream Home</h4>
                            <p>Buy without regrets or EMI burdens.</p>
                        </div>
                    </a>
                </div>

                <!-- Dream Car -->
                <div class="col-md-4 col-sm-6">
                    <a href="./car-calculator.php" class="text-decoration-none text-dark">
                        <div class="p-4 border rounded h-100 bg-white text-center">
                            <img src="./public/assets/image/icon/kk6.png" alt="Dream Car Icon" class="mb-3 mx-auto d-block" style="width: 50px;">
                            <h4 class="fw-bold">Dream Car</h4>
                            <p>Make your lifestyle goals a reality.</p>
                        </div>
                    </a>
                </div>

            </div>

            <p class="mt-5 fs-4">Let’s help you plan</p>
            <a href="https://calendly.com/snehajain-wealthtrustcapitalservices/30"
                class="btn btn-success rounded-pill px-4"
                target="_blank"
                rel="noopener">
                Schedule a call
            </a>

        </div>
    </section>

    <!-- Expert Value SectionSuccess stories
 -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="section-title fw-bold mb-2">
                <b>
                    What value does an <span class="color-primary">expert provide?</span>
            </h2>
            </b>
            <p class="mb-4 fs-4">Vanguard estimates that advisors can add up to 3% in net returns</p>
            <p class="fw-semibold mb-5">Compound growth of ₹100 after 35 years</p>

            <!-- Graph Image or Canvas Placeholder -->
            <d40 class="bg-light-green -4">
                <img src="./public/assets/image/compound-growth.gif" alt="Compound Growth Chart" class="img-fluid mx-auto d-block" style="max-height: 500px;">
            </d40>

            <a href="./about.php" class="btn btn-success rounded-pill px-4">Learn More</a>
        </div>
    </section>

    <!-- Success Stories & CTA Section -->
    <section class="py-5" style="background-color:#fcf8f5;">
        <div class="container text-center">

            <!-- Success Stories -->
            <h2 class="section-title fw-bold mb-4 color-primary">
                <b>
                    Success stories
                </b>
            </h2>

            <div class="row g-3 justify-content-center mb-5">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="testimonial-card light-green shadow-sm text-start h-100 w-100">
                        <strong class="d-block mb-2">Sameer Kulkarni, 34, Marketing Manager, Pune</strong>
                        <p class="testimonial-text mb-0">
                            “I thought I had everything figured out with SIPs. But after my call with Sneha, I realised how scattered my investments
                            were. In one hour, she helped me structure my portfolio with purpose.”
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="testimonial-card light-green shadow-sm text-start h-100 w-100">
                        <strong class="d-block mb-2">Neha Arora, 42, Entrepreneur, Mumbai</strong>
                        <p class="testimonial-text mb-0">
                            “My call with WealthTrust changed the way I view money. It was like therapy for my finances.”
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="testimonial-card light-green shadow-sm text-start h-100 w-100">
                        <strong class="d-block mb-2">Ashish Patel, 39, NRI, Dubai</strong>
                        <p class="testimonial-text mb-0">
                            “I was over-diversified and underprepared. Now I have a focused plan for retirement and my daughter’s future.”
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Heading -->
            <h2 class="fw-bold mb-2 section-title pt-5">
                <b>
                    Let’s help you make <span class="color-primary">the right choices</span>
                </b>
            </h2>
            <p class="mb-4 fs-4">What you get on the call:</p>

            <!-- Features List -->
            <div class="row g-3 justify-content-center mb-4">
                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="feature-pill border bg-white rounded d-flex align-items-center justify-content-center gap-2 h-100 w-100 p-2">
                        <img src="./public/assets/image/icon/lk1.png" alt="Expert consultation" style="width:35px; height:35px;">
                        <span class="fw-semibold">Expert consultation</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="feature-pill border bg-white rounded d-flex align-items-center justify-content-center gap-2 h-100 w-100 p-2">
                        <img src="./public/assets/image/icon/lk2.png" alt="Financial health check" style="width:35px; height:35px;">
                        <span class="fw-semibold">Your financial health check</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="feature-pill border bg-white rounded d-flex align-items-center justify-content-center gap-2 h-100 w-100 p-2">
                        <img src="./public/assets/image/icon/lk3.png" alt="Goal mapping" style="width:35px; height:35px;">
                        <span class="fw-semibold">Goal mapping and guidance</span>
                    </div>
                </div>
            </div>

            <!-- Book Button -->
            <a href="https://calendly.com/snehajain-wealthtrustcapitalservices/30"
                class="btn btn-success mt-2 px-4 rounded-pill"
                target="_blank"
                rel="noopener">
                Book Now
            </a>
        </div>
    </section>

    <!-- Final FAQs (refactored) -->
    <section class="faq-section py-5" style="background-color:#fcf8f5;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 section-title" style="color:var(--primary-color);"><b>FAQ’s</b></h2>

            <div class="row align-items-center g-4">
                <!-- Accordion -->
                <div class="col-lg-7 order-2 order-md-1">
                    <div class="custom-accordion" id="faqAccordion2">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq21-heading">
                                <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq21"
                                    aria-expanded="true"
                                    aria-controls="faq21">
                                    1. How long is the consultation call?
                                </button>
                            </h2>
                            <div id="faq21" class="accordion-collapse collapse show"
                                aria-labelledby="faq21-heading"
                                data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Usually 30–45 minutes, depending on your needs.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq22-heading">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq22"
                                    aria-expanded="false"
                                    aria-controls="faq22">
                                    2. Is it really free?
                                </button>
                            </h2>
                            <div id="faq22" class="accordion-collapse collapse"
                                aria-labelledby="faq22-heading"
                                data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Yes, the call is absolutely free with no hidden charges.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq23-heading">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq23"
                                    aria-expanded="false"
                                    aria-controls="faq23">
                                    3. Who will I speak to?
                                </button>
                            </h2>
                            <div id="faq23" class="accordion-collapse collapse"
                                aria-labelledby="faq23-heading"
                                data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    You'll speak directly with a certified WealthTrust advisor.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq24-heading">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq24"
                                    aria-expanded="false"
                                    aria-controls="faq24">
                                    4. Will I be pressured to buy something?
                                </button>
                            </h2>
                            <div id="faq24" class="accordion-collapse collapse"
                                aria-labelledby="faq24-heading"
                                data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    No. This is a no-pressure, informative consultation to guide you.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq25-heading">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq25"
                                    aria-expanded="false"
                                    aria-controls="faq25">
                                    5. What if I already have a CA/agent?
                                </button>
                            </h2>
                            <div id="faq25" class="accordion-collapse collapse"
                                aria-labelledby="faq25-heading"
                                data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    No problem! We work alongside your current advisor with complementary support.
                                </div>
                            </div>
                        </div>

                    </div><!-- /.custom-accordion -->
                </div>

                <!-- Bot illustration -->
                <div class="col-lg-5 text-center order-1 order-md-2">
                    <img src="./public/assets/image/FAQ3.gif"
                        alt="Have Questions Bot"
                        class="img-fluid mb-3 mx-auto d-block"
                        style="max-width:350px; width:80%;">
                    <p class="fw-semibold text-success mb-0">Have Questions?</p>
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