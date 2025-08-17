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
    <section>

        <!-- here come main content -->
        <!-- ====== ABOUT HERO ====== -->
        <section class="hero-section pt-5">
            <div class="container pt-5">
                <div class="position-relative">
                    <!-- Background Image -->
                    <img src="./public/assets/image/about-us.png" alt="About Us" class="w-100 rounded shadow-sm">

                    <!-- Overlay for desktop -->
                    <div class="d-none d-md-block position-absolute top-50 start-50 translate-middle bg-white bg-opacity-75 rounded shadow-sm p-4 text-center" style="max-width: 800px;">
                        <h2 class="section-title m-0 mb-3 text-primary">ABOUT US</h2>
                        <p class="text-muted mb-0">
                            At WealthTrust Capital Services, we are more than wealth managers.
                            We are your partners in prosperity with a commitment to transparency,
                            expertise, and personalized solutions. We guide you on a journey of
                            financial growth and success.
                        </p>
                    </div>
                </div>

                <!-- Normal flow for mobile -->
                <div class="d-block d-md-none mt-3 bg-white bg-opacity-75 rounded shadow-sm p-4 text-center">
                    <h2 class="section-title m-0 mb-3 text-primary">ABOUT US</h2>
                    <p class="text-muted mb-0">
                        At WealthTrust Capital Services, we are more than wealth managers.
                        We are your partners in prosperity with a commitment to transparency,
                        expertise, and personalized solutions. We guide you on a journey of
                        financial growth and success.
                    </p>
                </div>
            </div>
        </section>

        <!-- ====== MISSION ====== -->
        <section class="py-5">
            <div class="container">
                <div class="bg-light-green rounded p-5 text-center">
                    <h2 class="section-title text-center m-0 mb-4">Mission</h2>

                    <p class="mb-2">
                        To be the extension and reason for the financial wellness of our clients.
                    </p>
                    <p class="mb-2">
                        To be synonymous with precision, hailed as a research-first organisation,
                        and ensure financial independence for all.
                    </p>
                    <p class="mb-0">
                        To establish ourselves as the most preferred partner in wealth management,
                        with optimal and exceptional strategic acumen.
                    </p>
                </div>
            </div>
        </section>

        <!-- ====== VISION ====== -->
        <section class="py-4">
            <div class="container">
                <div class="bg-light-green rounded p-5 text-center">
                    <h2 class="section-title text-center m-0 mb-4">Vision</h2>
                    <p class="mb-0">
                        To map, manage, and multiply clients investment by providing appropriate
                        advice and excellent service. To be the hallmark of brilliance with
                        distinctive tracks and tactics in our line of business.
                    </p>
                </div>
            </div>
        </section>

        <!-- ====== OUR VALUES ====== -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center m-0 mb-4">
                    <span class="text-dark">Our</span> <span class="text-primary">Values</span>
                </h2>

                <div class="row g-4 text-center">
                    <!-- Integrity -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="value-icon rounded-pill mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <img src="./public/assets/image/icon/integrity.png" alt="Integrity" class="img-fluid" style="max-width: 60px;">
                        </div>
                        <h6 class="text-primary mb-1 fs-5"><b> Integrity</b></h6>
                        <p class="text-muted text-sm mb-0">
                            Conduct business with the highest ethics — moral and professional, every time.
                        </p>
                    </div>

                    <!-- Quality -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="value-icon rounded-pill mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <img src="./public/assets/image/icon/quality.png" alt="Quality" class="img-fluid" style="max-width: 60px;">
                        </div>
                        <h6 class="text-primary mb-1 fs-5"><b> Quality</b></h6>
                        <p class="text-muted text-sm mb-0">
                            Uphold the uppermost standards in our offerings and services.
                        </p>
                    </div>

                    <!-- Honesty -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="value-icon rounded-pill mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <img src="./public/assets/image/icon/honesty.png" alt="Honesty" class="img-fluid" style="max-width: 60px;">
                        </div>
                        <h6 class="text-primary mb-1 fs-5"><b> Honesty</b></h6>
                        <p class="text-muted text-sm mb-0">
                            Be trustworthy and live up to the confidence clients place in us.
                        </p>
                    </div>

                    <!-- Commitment -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="value-icon rounded-pill mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <img src="./public/assets/image/icon/commitment.png" alt="Commitment to Customer" class="img-fluid" style="max-width: 60px;">
                        </div>
                        <h6 class="text-primary mb-1 fs-5"><b> Commitment to Customer</b></h6>
                        <p class="text-muted text-sm mb-0">
                            Ensure clients thrive through premium service and support at all times.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====== OUR HISTORY ====== -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center m-0 mb-4">
                    <span class="text-dark">Our</span> <span class="text-primary">History</span>
                </h2>
                <div class="d-flex justify-content-center">
                    <img src="./public/assets/image/our-history.gif"
                        alt="WealthTrust history chart"
                        class="img-fluid rounded"
                        style="max-width: 100%;">
                </div>
            </div>
        </section>

        <!-- ====== TEAM BANNER ====== -->
        <section class="py-4">
            <div class="container p-0">
                <div class="position-relative m-auto">
                    <img src="./public/assets/img/about-hero-bg.png"
                        alt="WealthTrust team"
                        class="w-100 rounded shadow-sm">

                    <!-- centered CTA button -->
                    <div class="position-absolute top-100 start-50 translate-middle pb-3">
                        <a href="./our-team.php" class="btn btn-primary rounded-pill">MEET OUR TEAM</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====== OUR OFFICE ====== -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center m-0 mb-4">
                    <span class="text-dark">Our</span> <span class="text-primary">Office</span>
                </h2>

                <div class="row g-4 align-items-stretch">
                    <!-- Office photo + address -->
                    <div class="col-12 col-lg-6">
                        <div class="bg-surface rounded shadow-sm p-4 h-100 text-center">
                            <div class="mb-3">
                                <img src="./public/assets/img/about-hero-bg.png"
                                    alt="WealthTrust office plate"
                                    class="img-fluid rounded">
                            </div>
                            <h6 class="mb-1">Office Address</h6>
                            <p class="text-muted mb-0">
                                Konark Shram, Office No. 307, 308, 309, 3rd Floor, Janata Nagar, Tardeo Road,<br>
                                Mumbai Central – 400034
                            </p>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="col-12 col-lg-6">
                        <div class="bg-surface rounded shadow-sm p-2 h-100">
                            <div class="ratio ratio-16x9">
                                <!-- replace src with your Maps embed URL -->
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!...your-map-id..."
                                    style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>