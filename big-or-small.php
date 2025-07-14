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
    <!-- Financial Goals Hero Section -->
    <section class="cta-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2><strong>BIG OR SMALL,</strong></h2>
                    <h3>Accomplish All Your Financial Goals</h3>
                    <p>We are your CFO, managing everything from mutual funds to insurance, taxes to real estate, so you can live stress-free.</p>
                    <a href="#" class="btn btn-primary mt-3">Book a call</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/financial-goals.png" class="img-fluid" alt="Financial Goals">
                </div>
            </div>
        </div>
    </section>

    <!-- What Do We Offer -->
    <section class="why-us-section py-5 text-center">
        <div class="container">
            <h2>What do we offer?</h2>
            <p>Multiple solutions under one roof</p>
            <div class="row g-3 mt-4">
                <div class="col-md-3">
                    <div class="offering-card">Mutual Funds<br><small>Inflation-beating wealth creation</small></div>
                </div>
                <div class="col-md-3">
                    <div class="offering-card">Insurance<br><small>Shield during emergencies</small></div>
                </div>
                <div class="col-md-3">
                    <div class="offering-card">Tax Planning<br><small>Strategic and smart saving</small></div>
                </div>
                <div class="col-md-3">
                    <div class="offering-card">Fixed Income<br><small>For safety-first investors</small></div>
                </div>
                <div class="col-md-3">
                    <div class="offering-card">Real Estate<br><small>Invest smartly in real estate</small></div>
                </div>
                <div class="col-md-3">
                    <div class="offering-card">Loans<br><small>Unlock cash for financial needs</small></div>
                </div>
                <div class="col-md-3">
                    <div class="offering-card">Private Equity, AIFs, PMS<br><small>Advanced options for diversification</small></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Goal Planner -->
    <section class="why-us-section py-5 text-center">
        <div class="container">
            <h2>Your Personal Goal Planner</h2>
            <p>Choose your goal</p>
            <div class="row justify-content-center my-4">
                <div class="col-md-2 goal-box">Emergency</div>
                <div class="col-md-2 goal-box">Dream Car</div>
                <div class="col-md-2 goal-box">Dream Home</div>
                <div class="col-md-2 goal-box">Wealth Building</div>
                <div class="col-md-2 goal-box">Retirement</div>
                <div class="col-md-2 goal-box selected-goal">Child Education</div>
                <div class="col-md-2 goal-box">Child Marriage</div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <p>Having a fund to depend on, allows your child to dream high and achieve those dreams without financial constraints.</p>
                    <img src="assets/img/child-education.png" alt="Child Education" class="img-fluid">
                    <a href="#" class="btn btn-primary mt-3">Plan Goal</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="cta-section py-5">
        <div class="container">
            <h2>How It Works</h2>
            <p>Uncomplicate your financial life. Here is how we work:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><strong>Discovery Call</strong> – Understand your life goals and current financial picture</li>
                        <li><strong>Portfolio Design</strong> – Choose the right mix of MFs, insurance, and other tools</li>
                        <li><strong>Annual Wealth Review</strong> – Life evolves. So does your plan.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><strong>Goal Mapping</strong> – Break down each goal into a timeline, value, and monthly investment</li>
                        <li><strong>Execution & Monitoring</strong> – We invest, track, and rebalance regularly</li>
                    </ul>
                    <img src="assets/img/how-it-works.png" class="img-fluid" alt="How It Works">
                    <a href="#" class="btn btn-primary mt-3">Book a call</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Is This For -->
    <section class="why-us-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="row g-3">
                        <div class="col-6">Salaried professionals</div>
                        <div class="col-6">Business owner</div>
                        <div class="col-6">NRI</div>
                        <div class="col-6">HNI</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Who Is This For?</h2>
                    <ul>
                        <li>Salaried professional planning retirement or kids' education</li>
                        <li>Business owner looking to optimise taxes and diversify wealth</li>
                        <li>NRI managing India-based assets</li>
                        <li>HNI aiming to preserve and grow intergenerational wealth</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="text-center">What do our happy investors say?</h2>
            <div class="row mt-4 g-3">
                <div class="col-md-4 testimonial-card">
                    <strong>— Ritu Sharma, Senior IT Professional, Pune</strong><br>
                    “My SIPs are aligned with my daughter’s education, and I no longer stress over market noise.”
                </div>
                <div class="col-md-4 testimonial-card">
                    <strong>— Rakesh Sinha, MSME Entrepreneur, Indore</strong><br>
                    “A flexible investment plan with MFs and insurance that adjusts with my cash flow.”
                </div>
                <div class="col-md-4 testimonial-card">
                    <strong>— Neha L., NRI Client, UAE</strong><br>
                    “Structured plan to manage India-based assets and NPS contributions.”
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="cta-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">FAQs</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="accordion" id="faqAccordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true">
                                    1. How is wealth management different from stock or mutual fund advice?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Wealth management covers everything: your goals, taxes, insurance, real estate, and investments — all under one umbrella.
                                </div>
                            </div>
                        </div>
                        <!-- Add more accordion items as needed -->
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="assets/img/faq-bot-2.png" class="img-fluid" alt="FAQ Bot">
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