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

    <!-- ========== GET IN TOUCH ========== -->
    <section class="hero-section" style="background-color:#fcf8f5;">
        <div class="container">
            <h2 class="section-title text-center mb-5">
                <span class="text-dark">Get In Touch</span> <span class="text-primary">With Us</span>
            </h2>

            <div class="row g-4 align-items-center justify-content-center">
                <!-- Left: quick contact info -->
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <ul class="list-unstyled mb-0">
                        <!-- Call -->
                        <li class="d-flex align-items-start mb-4">
                            <span class="contact-badge me-3">
                                <img src="./public/assets/image/icon/phone.png" alt="Phone" />
                            </span>
                            <div>
                                <h5 class="mb-1 color-primary">Give us a call</h5>
                                <a href="tel:+919819039345" class="mb-0 text-black text-decoration-none">+91 98190 39345</a>
                            </div>
                        </li>

                        <!-- Mail -->
                        <li class="d-flex align-items-start mb-4">
                            <span class="contact-badge me-3">
                                <img src="./public/assets/image/icon/mail.png" alt="Email" />
                            </span>
                            <div>
                                <h5 class="mb-1 color-primary">Mail us at</h5>
                                <a href="mailto:enquiry@wealthtrustcap.com" class="mb-0 text-black text-decoration-none">enquiry@wealthtrustcap.com</a>
                                <!-- Or with a preset subject:
    <a href="mailto:enquiry@wealthtrustcap.com?subject=Website%20Enquiry" class="mb-0 text-muted text-decoration-none">enquiry@wealthtrustcap.com</a>
    -->
                            </div>
                        </li>

                        <!-- Address / Directions -->
                        <li class="d-flex align-items-start">
                            <span class="contact-badge me-3">
                                <img src="./public/assets/image/icon/map-pin.png" alt="Directions" />
                            </span>
                            <div>
                                <h5 class="mb-1 color-primary">Get directions here</h5>
                                <p class="mb-0 text-muted">
                                    WealthTrust Capital Services<br>
                                    Konark Shram, Office No. 309, 3rd Floor, Janata Nagar, Tardeo Road,<br>
                                    Mumbai Central – 400034
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>



                <!-- Right: form panel -->
                <div class="col-lg-7">
                    <div class="contact-card rounded-4 shadow-sm p-4 p-md-5">
                        <form action="/contact/submit" method="post" novalidate>
                            <!-- Name -->
                            <div class="row align-items-center mb-3">
                                <label class="col-sm-3 col-form-label contact-label">Name :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-lg rounded-3" name="name" placeholder="Your name" required>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="row align-items-center mb-3">
                                <label class="col-sm-3 col-form-label contact-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control form-control-lg rounded-3" name="email" placeholder="you@example.com" required>
                                </div>
                            </div>
                            <!-- Contact -->
                            <div class="row align-items-center mb-3">
                                <label class="col-sm-3 col-form-label contact-label">Contact :</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control form-control-lg rounded-3" name="phone" placeholder="00000-00000" required>
                                </div>
                            </div>
                            <!-- City -->
                            <div class="row align-items-center mb-3">
                                <label class="col-sm-3 col-form-label contact-label">City :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-lg rounded-3" name="city" placeholder="Mumbai">
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="row align-items-start mb-4">
                                <label class="col-sm-3 col-form-label contact-label">Message :</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control rounded-3" name="message" rows="4" placeholder="Query is about to…"></textarea>
                                </div>
                            </div>
                            <!-- Submit -->
                            <div class="text-center ps-sm-3">
                                <button type="submit" class="btn btn-primary rounded-pill px-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Right -->
            </div>
        </div>
    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>