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
    <!-- ====== BECOME A BUSINESS ASSOCIATE ====== -->
    <section class="hero-section" style="background-color:#fcf8f5;">
        <div class="container">
            <!-- Title -->
            <h2 class="section-title text-center mb-4">
                <span class="text-dark">Become</span> <span class="text-primary">A Business Associate</span>
            </h2>

            <div class="row g-4">
                <!-- Left: Illustration -->
                <div class="col-lg-5 text-center">
                    <img src="./public/assets/image/hand-shake.gif"
                        alt="WealthTrust Partnership"
                        class="img-fluid ba-hero-img">
                </div>

                <!-- Right: Copy -->
                <div class="col-lg-7">
                    <div class="ba-copy card border-0 bg-white rounded-4 shadow-sm p-4 p-md-5">
                        <p class="m-0 text-uppercase fw-semibold letter-1 text-muted">Start your own business –
                            <span class="text-primary">Become a Business Associate with WealthTrust</span>
                        </p>

                        <div class="mt-4">
                            <h6 class="mb-2 text-primary fw-bold">What to Expect?</h6>
                            <p class="mb-3">Embark on a valuable, long-lasting partnership with WealthTrust Capital.</p>

                            <h6 class="mb-2 text-primary fw-bold">What you need: Drive to run your own business</h6>
                            <ul class="ba-list">
                                <li>If you are a progressive entrepreneur who wishes to make large strides in business.</li>
                                <li>Credibility, strong values and strong network of contacts in your community.</li>
                                <li>Professional licenses as per applicability (e.g., Mutual Fund: AMFI certification).</li>
                                <li>This innovative franchising program pairs the strength of experienced, service-oriented financial
                                    professionals with multiple products under one roof, robust operations, product know-how, and an
                                    investor-first philosophy of WealthTrust Capital Services.</li>
                            </ul>

                            <h6 class="mb-2 text-primary fw-bold">Our Role</h6>
                            <ul class="ba-list">
                                <li>Become the trusted face and voice of WealthTrust Capital Services in your community.</li>
                                <li>End-to-end product level trainings with back-end and front-end support to expedite growth.</li>
                                <li>Operational support with technology to ensure economies of scale.</li>
                                <li>On-field support and periodic portfolio reviews for your clients.</li>
                                <li>Client acquisition support and management events.</li>
                                <li>Wide suite of products – Mutual Funds, Insurance, Home/Business/Loan solutions, Fixed Income,
                                    Bonds, Real Estate Products & Services, Gold, PMS, Estate & Tax Planning, and Private Equity
                                    integrated into the financial plan.</li>
                            </ul>

                            <div class="mt-4">
                                <a href="#contact" class="btn btn-primary rounded-pill px-4">Apply to Partner</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /Right -->
            </div>
        </div>
    </section>

    <!-- ====== PARTNER QUICK SIGNUP ====== -->
    <section class="py-5" style="background-color:#fcf8f5;">
        <div class="container">
            <!-- Headline -->
            <h2 class="fw-bold mb-4 text-uppercase lh-sm" style="letter-spacing:.3px;">
                <span class="text-primary">Get the required support</span>
                <span class="text-dark"> you need for various financial products</span><br>
                <span class="text-dark">to</span>
                <span class="text-primary"> expedite the growth of your business.</span>
            </h2>

            <!-- Form -->
            <form action="/partners/register" method="post" class="ba-quick-form" novalidate>
                <div class="row g-3">
                    <!-- name + contact side by side -->
                    <div class="col-md-6">
                        <input type="text" name="full_name" class="form-control form-control-lg rounded-3"
                            placeholder="Enter your full name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" name="contact" class="form-control form-control-lg rounded-3"
                            placeholder="Enter your Contact" required>
                    </div>

                    <!-- email (full) -->
                    <div class="col-12">
                        <input type="email" name="email" class="form-control form-control-lg rounded-3"
                            placeholder="Enter your Email" required>
                    </div>

                    <!-- city (full) -->
                    <div class="col-12">
                        <input type="text" name="city" class="form-control form-control-lg rounded-3"
                            placeholder="Enter your City">
                    </div>

                    <!-- buttons -->
                    <div class="col-12 d-flex flex-wrap gap-3 mt-2">
                        <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">
                            Register Now
                        </button>
                        <a href="#join" class="btn btn-outline-primary rounded-pill px-4 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>