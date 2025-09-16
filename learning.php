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

    <!-- Financial Expert Section -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Text Content -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="fw-bold" style="color: #267C6D;">You might be investing your money well.</h2>
                    <p class="mb-3">But a financial expert can add more. Learn how</p>
                    <button class="btn btn-success rounded-pill mb-4"
                        onclick="window.open('https://calendly.com/snehajain-wealthtrustcapitalservices/30', '_blank')">
                        Book a free call
                    </button>

                    <!-- Feature Boxes -->
                    <div class="mb-2 p-3 rounded" style="background-color: #d9f5e5; display: flex; align-items: center;">
                        <img src="icon1.svg" alt="icon" style="width: 24px; height: 24px; margin-right: 10px;">
                        <strong>Trusted by <span style="font-weight: 600;">500+ families</span></strong>
                    </div>
                    <div class="mb-2 p-3 rounded" style="background-color: #d9f5e5; display: flex; align-items: center;">
                        <img src="icon2.svg" alt="icon" style="width: 24px; height: 24px; margin-right: 10px;">
                        <strong>Managing <span style="font-weight: 600;">₹200+ crore</span></strong>
                    </div>
                    <div class="p-3 rounded" style="background-color: #d9f5e5; display: flex; align-items: center;">
                        <img src="icon3.svg" alt="icon" style="width: 24px; height: 24px; margin-right: 10px;">
                        <strong><span style="font-weight: 600;">15 Years</span> of Experience</strong>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-6 text-center">
                    <img src="expert-illustration.png" alt="Financial Expert" class="img-fluid" style="max-height: 400px;">
                </div>

            </div>
        </div>
    </section>

    <!-- Why Consult With an Expert Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Why consult with an expert?</h2>
            <p class="mb-4">Ask yourself these 3 questions:</p>

            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="border rounded p-4 h-100">
                        <i class="bi bi-check-circle text-success fs-3 mb-2"></i>
                        <p class="mb-0">Do you have the time to manage your investments actively?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded p-4 h-100">
                        <i class="bi bi-check-circle text-success fs-3 mb-2"></i>
                        <p class="mb-0">Do you have the expertise to pick the right products?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded p-4 h-100">
                        <i class="bi bi-check-circle text-success fs-3 mb-2"></i>
                        <p class="mb-0">Can you stay calm and make rational decisions in a volatile market?</p>
                    </div>
                </div>
            </div>

            <p class="mt-4">Even if one answer is "no," it's time to talk to an expert.</p>
            <a href="#" class="btn btn-success mt-2 px-4 rounded-pill">Book a call</a>
        </div>
    </section>


    <!-- Financial Planning Goals Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="fw-bold mb-2">You will end up at your destination when you plan right.</h2>
            <p class="mb-5">What is your priority?</p>

            <div class="row g-4 justify-content-center">

                <!-- Retirement -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 border rounded h-100">
                        <img src="icons/retirement.svg" alt="Retirement Icon" class="mb-3" style="width: 40px;">
                        <h5 class="fw-bold">Retirement</h5>
                        <p>Build a plan that lasts as long as you do. No running out of money.</p>
                    </div>
                </div>

                <!-- Wealth Building -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 border rounded h-100">
                        <img src="icons/wealth-building.svg" alt="Wealth Icon" class="mb-3" style="width: 40px;">
                        <h5 class="fw-bold">Wealth Building</h5>
                        <p>Create a long-term investment strategy that compounds meaningfully.</p>
                    </div>
                </div>

                <!-- Child Education -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 border rounded h-100">
                        <img src="icons/education.svg" alt="Child Education Icon" class="mb-3" style="width: 40px;">
                        <h5 class="fw-bold">Child Education</h5>
                        <p>Estimate costs, set timelines, and invest accordingly.</p>
                    </div>
                </div>

                <!-- Child's Marriage -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 border rounded h-100">
                        <img src="icons/marriage.svg" alt="Child's Marriage Icon" class="mb-3" style="width: 40px;">
                        <h5 class="fw-bold">Child's Marriage</h5>
                        <p>Plan a worry-free wedding fund that doesn’t strain your future.</p>
                    </div>
                </div>

                <!-- Dream Home -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 border rounded h-100">
                        <img src="icons/home.svg" alt="Dream Home Icon" class="mb-3" style="width: 40px;">
                        <h5 class="fw-bold">Dream Home</h5>
                        <p>Buy without regrets or EMI burdens.</p>
                    </div>
                </div>

                <!-- Dream Car -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 border rounded h-100">
                        <img src="icons/car.svg" alt="Dream Car Icon" class="mb-3" style="width: 40px;">
                        <h5 class="fw-bold">Dream Car</h5>
                        <p>Make your lifestyle goals a reality.</p>
                    </div>
                </div>

            </div>

            <p class="mt-5">Let’s help you plan</p>
            <a href="#" class="btn btn-success rounded-pill px-4">Schedule a call</a>
        </div>
    </section>

    <!-- Expert Value Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">
            <h2 class="fw-bold mb-2">What value does an expert provide?</h2>
            <p class="mb-4">Vanguard estimates that advisors can add up to 3% in net returns</p>
            <p class="fw-semibold mb-5">Compound growth of ₹100 after 35 years</p>

            <!-- Graph Image or Canvas Placeholder -->
            <div class="text-center mb-4">
                <img src="assets/img/compound-growth-chart.png" alt="Compound Growth Chart" class="img-fluid" style="max-height: 400px;">
            </div>

            <a href="#" class="btn btn-success rounded-pill px-4">Learn More</a>
        </div>
    </section>

    <!-- Success Stories & CTA Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container text-center">

            <!-- Success Stories -->
            <h2 class="fw-bold mb-4">Success stories</h2>
            <div class="row g-3 justify-content-center mb-5">

                <div class="col-md-4">
                    <div class="p-4 rounded" style="background-color: #ccf7d5;">
                        <strong>Sameer Kulkarni, 34, Marketing Manager, Pune</strong>
                        <p class="mb-0">"I thought I had everything figured out with SIPs. But after my call with Sneha, I realised how scattered my investments were. In one hour, she helped me structure my portfolio with purpose."</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded" style="background-color: #ccf7d5;">
                        <strong>Neha Arora, 42, Entrepreneur, Mumbai</strong>
                        <p class="mb-0">"My call with WealthTrust changed the way I view money. It was like therapy for my finances."</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded" style="background-color: #ccf7d5;">
                        <strong>Ashish Patel, 39, NRI, Dubai</strong>
                        <p class="mb-0">"I was over-diversified and underprepared. Now I have a focused plan for retirement and my daughter’s future."</p>
                    </div>
                </div>

            </div>

            <!-- CTA Heading -->
            <h2 class="fw-bold mb-2">Let’s help you make the right choices</h2>
            <p class="mb-4">What you get on the call:</p>

            <!-- Features List -->
            <div class="row g-3 justify-content-center mb-4">
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded d-flex align-items-center justify-content-center h-100">
                        <i class="bi bi-check-circle-fill text-success me-2"></i> Expert consultation
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded d-flex align-items-center justify-content-center h-100">
                        <i class="bi bi-check-circle-fill text-success me-2"></i> Your financial health check
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 border rounded d-flex align-items-center justify-content-center h-100">
                        <i class="bi bi-check-circle-fill text-success me-2"></i> Goal mapping and guidance
                    </div>
                </div>
            </div>

            <!-- Book Button -->
            <a href="#" class="btn btn-success rounded-pill px-4">Book Now</a>
        </div>
    </section>

    <!-- Final FAQs Section -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container">
            <div class="row align-items-center">

                <!-- FAQ Accordion -->
                <div class="col-md-7">
                    <h2 class="fw-bold text-center text-md-start mb-4">FAQs</h2>
                    <div class="accordion" id="faqAccordion2">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq21">
                                <button class="accordion-button bg-success-subtle fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse21" aria-expanded="true" aria-controls="faqCollapse21">
                                    1. How long is the consultation call?
                                </button>
                            </h2>
                            <div id="faqCollapse21" class="accordion-collapse collapse show" aria-labelledby="faq21" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Usually 30–45 minutes, depending on your needs.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq22">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse22" aria-expanded="false" aria-controls="faqCollapse22">
                                    2. Is it really free?
                                </button>
                            </h2>
                            <div id="faqCollapse22" class="accordion-collapse collapse" aria-labelledby="faq22" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Yes, the call is absolutely free with no hidden charges.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq23">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse23" aria-expanded="false" aria-controls="faqCollapse23">
                                    3. Who will I speak to?
                                </button>
                            </h2>
                            <div id="faqCollapse23" class="accordion-collapse collapse" aria-labelledby="faq23" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    You'll speak directly with a certified WealthTrust advisor.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq24">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse24" aria-expanded="false" aria-controls="faqCollapse24">
                                    4. Will I be pressured to buy something?
                                </button>
                            </h2>
                            <div id="faqCollapse24" class="accordion-collapse collapse" aria-labelledby="faq24" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    No. This is a no-pressure, informative consultation to guide you.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq25">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse25" aria-expanded="false" aria-controls="faqCollapse25">
                                    5. What if I already have a CA/agent?
                                </button>
                            </h2>
                            <div id="faqCollapse25" class="accordion-collapse collapse" aria-labelledby="faq25" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    No problem! We offer complementary support that works alongside your current advisor.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bot Illustration -->
                <div class="col-md-5 text-center mt-5 mt-md-0">
                    <img src="assets/img/faq-bot.png" alt="FAQ Bot" class="img-fluid mb-2" style="max-height: 280px;">
                    <p class="fw-semibold fs-5 text-success">Have Questions?</p>
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