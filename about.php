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

    <!-- Who Are We Section -->
    <section class="who-are-we-section hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Who Are We?</h2>
                    <div class="who-are-we-content">
                        <p>WealthTrust Capital Services is your SEBI-registered partner in practical, goal-driven wealth management.</p>
                        <p>Over time, we built our planning model and quietly grew into a team that now manages <strong>₹200+ crore for 500+ families.</strong></p>
                        <p>We don't believe in one-size-fits-all. We ask a lot of questions, listen even more, and then build a plan that fits you.</p>
                        <p>Along the way, we've conducted 80+ workshops because knowledge is empowerment.</p>
                        <p>If you're looking for honest, thoughtful, research-backed financial guidance, click the button.</p>

                        <div class="row mt-4">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <div class="mission-vision-card">
                                    <h3>Mission</h3>
                                    <p>To be the trusted leader delivering precise, profitable, and research-driven financial advice.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mission-vision-card">
                                    <h3>Vision</h3>
                                    <p>To grow clients' wealth through clear guidance and exceptional service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="mission-vision-card">
                                    <h3>Values</h3>
                                    <ul>
                                        <li>Integrity over everything.</li>
                                        <li>Quality that shows.</li>
                                        <li>Honesty at all times.</li>
                                        <li>Clients before commissions.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block"> <!-- Hide on small/medium, show on large and up -->
                    <div class="about-image-container">
                        <img src="./public/assets/img/about.png" alt="About Us Illustration" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Leadership Section -->
    <section class="leadership-section mb-5">
        <div class="container">
            <div class="notched-container  p-5">
                <div class="row p-5">

                    <div class="profile-image col-3 ">
                        <img src="./public/assets/img/ceo1.png" alt="Mrs. Sneha Jain">
                        <h6 class="mt-3"> <strong>Mrs. Sneha Jain </strong><br>Founder & CEO</h6>
                    </div>
                    <div class="leadership-content col-8 m-auto">
                        <h2 class="text-decoration-underline">Leadership</h2>
                        <p>Mrs. Sneha Jain, Founder & CEO, has 10+ years of rich experience across wealth management, equity research, corporate finance, and investment banking. She brings a rare blend of strategic insight and on-ground expertise.Backed by a Master's in Accounting and Finance and tenures at leading institutions like HSBC and PGIM, she has built a solid reputation for delivering impactful financial solutions.<br>Since launching WealthTrust Capital Services, she has guided 500+ clients toward their financial goals through a holistic, personalised planning approach.Beyond leading the firm, she's passionate about financial education and has conducted 70+ workshops.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="investor-journey-section text-center py-5" style="background-color: #bdf5ce;">
        <div class="container">
            <div class="mb-5">
                <div class="row align-items-center justify-content-between text-center text-lg-start g-3">

                    <!-- Left: Heading -->
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-0">Journey of an investor with WTC</h2>
                    </div>

                    <!-- Center: Description -->
                    <div class="col-lg-4">
                        <p class="mb-0 color-primary fs-5">Once you invest with Wealth Trust Capital, here is what you can expect:</p>
                    </div>

                    <!-- Right: Button -->
                    <div class="col-lg-2 text-lg-end">
                        <a href="#" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-semibold">Book Now</a>
                    </div>

                </div>
            </div>

            <!-- Background journey image as visual layout -->
            <div class="journey-bg-image position-relative mx-auto">
                <!-- Centered call to action text -->
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="p-3 px-4 text-white rounded-pill fw-semibold text-center shadow-sm" style="background: var(--primary-color)">
                        Your goals are one call away.
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