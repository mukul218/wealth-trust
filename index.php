<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WealthTrust Capital Services - Invest with Confidence</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/css/style.css">
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Invest with Confidence<br>
                            <small>Achieve Your Life Goals on Time</small>
                        </h1>
                        <p>We simplify investing with expert guidance, so you can focus on what matters most.</p>

                        <div class="trust-badge">
                            <i class="fas fa-shield-alt me-2"></i>
                            Trusted by 500+ Families.
                        </div>

                        <div class="trust-badge">
                            <i class="fas fa-check-circle me-2"></i>
                            Free, No Obligations
                        </div>

                        <div class="mt-4">
                            <a href="#contact" class="btn btn-primary btn-lg">Book a Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./public/assets/img/indexHero.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="stats-bar">
        <div class="container my-5">
            <div class="row justify-content-lg-between justify-content-center align-items-center stat-row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="stat-item">
                        <h6>Boutique Wealth</h6>
                        <h5>Management</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="stat-item">
                        <h6>SEBI Registered</h6>
                        <h5>Research Analyst</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="stat-item">
                        <h6>16 Years of Market</h6>
                        <h5>Wisdom</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="stat-item">
                        <h6>200 cr.+ Under</h6>
                        <h5>Management</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="stat-item">
                        <h6>2000+ Equity Pack</h6>
                        <h5>subscribers</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-section py-5">
            <div class="container">
                <!-- Centered heading -->
                <h2 class="fw-bold text-center mb-5" style="color: #399082; font-size: 2.8rem;">
                    About WealthTrust Capital Services
                </h2>
                <div class="row align-items-center">
                    <!-- Illustration -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="about-illustration text-center">
                            <img src="./public/assets/img/indexSec.png" alt="Wealth advisor illustration"
                                style="max-width: 80%; height: auto;">
                            <!-- Replace src with your actual illustration image file -->
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-6">
                        <div class="about-content" style="color: #424242;">
                            <p>Confused about which stocks to pick? Does tax planning feel like a maze? We’re here to simplify it all.</p>
                            <p>At WealthTrust Capital Services, we’ve helped 500+ families invest confidently and achieve financial freedom.</p>
                            <p>Founded by Sneha Jain, our mission is to make wealth creation stress-free and accessible.</p>
                            <p>Sneha Jain has a Master’s in Accounting & Finance from the London School of Economics.</p>
                            <p>She has worked with reputed asset management companies, such as Pramerica Asset Managers Private Limited and HSBC Global Asset Management, India.</p>
                            <p>She has more than a decade of work experience in investment management.</p>
                            <div class="mt-4">
                                <a href="#services" class="btn" style="background: #399082; color: #fff; border-radius: 25px; padding: 10px 28px; font-weight: 500;">
                                    Know More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Offerings Section -->
    <section id="services" class="offerings-section">
        <div class="container">
            <h2>Our Offerings</h2>
            <p class="offerings-subtitle">Want a roadmap to financial freedom, need research-backed stocks or mutual fund curations? We have got your back:</p>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="offering-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4>Wealth Management: Your Gateway to Financial Freedom</h4>
                            <div style="font-size: 2rem; color: var(--primary-color);">
                                <i class="fas fa-coins"></i>
                            </div>
                        </div>
                        <ul>
                            <li>AMFI-registered mutual fund distributor</li>
                            <li>Helping you grow, protect, & preserve wealth</li>
                            <li>Mutual funds, insurance, tax planning, & more.</li>
                            <li>Constant support at every stage</li>
                            <li>15+ years of track record</li>
                        </ul>
                        <div class="mt-4">
                            <h3>01</h3>
                        </div>
                        <button class="card-arrow-btn">
                            <i class="fas fa-arrow-up-right"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="offering-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4>SEBI-Registered Research Analyst</h4>
                            <div style="font-size: 2rem; color: var(--primary-color);">
                                <i class="fas fa-search-dollar"></i>
                            </div>
                        </div>
                        <ul>
                            <li>Expert curated portfolios</li>
                            <li>Choose portfolio, subscribe, invest, repeat</li>
                            <li>Periodic rebalancing, in line with the strategy</li>
                            <li>Designed for your goals</li>
                            <li>No lock-in</li>
                        </ul>
                        <div class="mt-4">
                            <h3>02</h3>
                        </div>
                        <button class="card-arrow-btn">
                            <i class="fas fa-arrow-up-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="why-us-section">
        <div class="container">
            <h2>Why Us?</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-4">We ensure you have financial peace of mind.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>16+ years of investment experience</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Trusted by 500+ families</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Timely, goal-based investment</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Research-backed by analysts</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Transparent with a proven track record</li>
                    </ul>
                    <p class="mt-4">Want more reasons? Let's get on a call</p>
                    <a href="#contact" class="btn btn-primary">Book Now</a>
                </div>
                <div class="col-lg-6">
                    <img src="./public/assets/img/herothree.gif" alt="imag" srcset="">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2>Hear from Happy Investors</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card light-green">
                        <div class="testimonial-text">
                            "I am pleased to offer my endorsement for Sneha, a proficient wealth manager. She took the time to understand my long-term and short-term financial goals, crafted a tailored portfolio accordingly. From that point onward, she and her team have capably overseen all aspects. As a newcomer to investments, I greatly appreciated Sneha's expertise."
                        </div>
                        <div class="testimonial-author">- Ankita Arora</div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card light-green">
                        <div class="testimonial-text">
                            "I am very happy with the financial insights of Sneha and her team. Personal finance is a very ignored aspect in everyone's life, and WTC acts as a perfect bridge in handling and dealing with personal finances and wealth management for you. I don't have to worry about a thing. Everything is managed by Sneha Jain and her team at WTC."
                        </div>
                        <div class="testimonial-author">- Ashish Massey</div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card light-green">
                        <div class="testimonial-text">
                            "I am incredibly grateful to have had Sneha Jain as my trusted financial advisor. Her expertise, dedication, and personalised guidance have been invaluable on my journey toward financial security. There is a plethora of financial advisors, however, the reason I chose to go with her is because she is authentic, honest, resilient, not only as a person but also with her work."
                        </div>
                        <div class="testimonial-author">- Yashvi Vira</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="text-start">Not convinced yet?</h2>
                    <h4 style="color: var(--primary-color);">Join our 2-hour Investment Masterclass</h4>
                    <p class="mb-4">Clear all your doubts and take charge of your finances to live a stress-free life. Register for free (a gift for scrolling to the bottom).</p>
                    <a href="#masterclass" class="btn btn-outline-primary me-3">Book Your Seat</a>

                    <div class="mt-3">
                        <h4 style="color: var(--primary-color);">Stay Updated</h4>
                        <p>Get monthly market insights to your inbox</p>
                        <a href="#newsletter" class="btn btn-primary">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./public/assets/img/indexThree.png" alt="CTA Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section py-5" style="background: var(--section-bg-light);">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: var(--primary-color); font-size: 2.7rem;">Have Questions?</h2>
            <div class="row align-items-center">
                <!-- Bot illustration (left) -->
                <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                    <img src="./public/assets/img/haveQuestion.png" alt="Have Questions Bot" style="max-width: 350px; width: 80%;">
                    <!-- Replace with your SVG/PNG -->
                </div>
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
            </div>
        </div>
    </section>

    <section class="featured-section">
        <div class="container">
            <h2 class="section-title">Featured With:</h2>
            <div class="row media-logos mb-4">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="media-logo-item">
                        <img src="./public/assets/img/plogo1.png" alt="Logo 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="media-logo-item">
                        <img src="./public/assets/img/plogo2.png" alt="Logo 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="media-logo-item">
                        <img src="./public/assets/img/plogo3.png" alt="Logo 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="media-logo-item">
                        <img src="./public/assets/img/plogo4.png" alt="Logo 1" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row article-cards">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="article-card">
                        <h6>Why is the Global Economy nearing recession in 2023?</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="article-card">
                        <h6>Planning For Your Retirement</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="article-card">
                        <h6>Shiksha Se Samriddhi: क्या Share Market में आप बिना तैयारी का निवेश करने का सोच रहे हैं? |
                            CNBC Awaaz</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="article-card">
                        <h6>Sneha's guide to financial freedom</h6>
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