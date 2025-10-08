<footer class="site-footer color-primary mt-5" id="footer-container">
    <div class="footer-bg container-fluid bg-white">
        <div class="container">
            <div class="row gy-5 align-items-start">

                <!-- Left: Logo & Info -->
                <div class="col-lg-4 col-md-12 footer-col-left pe-lg-4 my-0 footer-left-cont">
                    <a class="navbar-brand d-inline-flex align-items-center pt-4 mt-5" href="./">
                        <img src="./public/assets/img/logo.png" alt="WealthTrustCap" class="footer-logo-img">
                    </a>

                    <div class="contact-info mt-4">
                        <h5 class="footer-label">Contact us at</h5>
                        <p class="footer-phone m-0"><a class="text-decoration-none text-black" href="tel:+919819039345">+91 98190 39345</a></p>
                    </div>

                    <div class="location-info mt-3">
                        <h5 class="footer-label">Our Location</h5>
                        <address class="mb-0 text-black">
                            WealthTrust Capital Services <br>
                            Konark Shram, Office No. 309,<br>
                            3rd Floor, Janata Nagar, Tardeo Road,<br>
                            Mumbai Central – 400034
                        </address>
                    </div>

                    <div class="email-info mt-3">
                        <h5 class="footer-label">Email Us</h5>
                        <p class="mb-0"><a class="text-black text-decoration-none" href="mailto:enquiry@wealthtrustcap.com">enquiry@wealthtrustcap.com</a></p>
                    </div>
                </div>

                <!-- Middle: Menus + Social/App -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 pt-4 ps-0 ps-md-5">
                            <h4 class="footer-heading">Our Services</h4>
                            <ul class="footer-links color-primary">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="equity.php">Services</a></li>
                                <li><a href="master-class.php">Masterclass</a></li>
                                <li><a href="one-to-one.php">1-1 Call</a></li>
                                <li><a href="disabilities.php">Disability Act</a></li>
                                <li><a href="disclosure.php">Disclosure</a></li>
                            </ul>

                            <h4 class="footer-heading mt-4">Follow us on</h4>
                            <div class="d-flex flex-wrap gap-2">
                                <a aria-label="Twitter" href="https://x.com/wealthtrustcap?s=21&t=eOUzT264wNr7BUKc3YYFEQ" class="social-icon-link"><i class="fab fa-twitter"></i></a>
                                <a aria-label="LinkedIn" href="https://www.linkedin.com/company/wealthtrust-capital-services/ " class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                                <a aria-label="Facebook" href="https://www.facebook.com/share/1F8ghGJPBE/?mibextid=wwXIfr " class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                                <a aria-label="Instagram" href="https://www.instagram.com/wealthtrustcapital?igsh=MWlpYTFraTZpd2ExMQ== " class="social-icon-link"><i class="fab fa-instagram"></i></a>
                                <a aria-label="YouTube" href="https://youtube.com/@wealthtrustcapital?si=n8RJ6pi_2XUr1JEb" class="social-icon-link"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>

                        <div class="col-6 pt-4">
                            <h4 class="footer-heading">Calculators</h4>
                            <ul class="footer-links">
                                <li><a href="sip-calculator.php">SIP Calculator</a></li>
                                <li><a href="lumpsum-calculator.php">Lumpsum Calculator</a></li>
                                <li><a href="target-sip-calculator.php">Target SIP Calculator</a></li>
                                <li><a href="lumpsum-target-calculator.php">Lumpsum Target Calculator</a></li>
                                <li><a href="crorepati-calculator.php">Crorepati Calculator</a></li>
                                <li><a href="./car-calculator.php">Car Calculator</a></li>
                                <li><a href="./house-calculator.php">House Calculator</a></li>
                            </ul>

                            <h4 class="footer-heading mt-4">Download our app</h4>
                            <div class="d-flex gap-2">
                                <a aria-label="Android" href="#" class="social-icon-link"><i class="fa-brands fa-google-play"></i></a>
                                <a aria-label="Apple" href="#" class="social-icon-link"><i class="fab fa-apple"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Newsletter -->
                <div class="col-lg-2 col-md-12 pt-4">
                    <h4 class="footer-heading primary">Stay Updated</h4>
                    <p class="mb-3 small">Get monthly market insights to your inbox</p>
                    <form id="newsletterForm" class="newsletter-form d-flex flex-column gap-2">
                        <input type="email" id="newsletterEmail" class="form-control" placeholder="Email" required>
                        <button class="btn btn-subscribe" type="submit" id="newsletterBtn">
                            <span class="btn-text">Subscribe</span>
                            <span class="btn-loader spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </form>

                    <div id="newsletterAlert" class="mt-2"></div>


                </div>
            </div>
            <section class="certification-section">
                <div class="container text-white">p
                    
                    <p class="text-center mt-4 text-black">
                        Mutual fund investments are subject to market risks. Read the scheme information and other related documents carefully, before investing. Past performance is not indicative of future returns.
                    </p>
                </div>
            </section>
            <div class="col-12 text-center py-2">
                <p class="copyright-text">&copy; 2025 WealthTrustCap. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<?php
include_once "./public/assets/js/externalScript.php";
?>

<script>
    $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();

        const email = $('#newsletterEmail').val().trim();
        if (!email) {
            $('#newsletterAlert').html('<div class="alert alert-warning">Please enter an email.</div>');
            return;
        }

        const $btn = $('#newsletterBtn');
        const $btnText = $btn.find('.btn-text');
        const $btnLoader = $btn.find('.btn-loader');

        // Show loader, hide text
        $btn.prop('disabled', true);
        $btnText.addClass('d-none');
        $btnLoader.removeClass('d-none');

        $.ajax({
            url: './api/newsletter/subscribe.php',
            type: 'POST',
            data: {
                email
            },
            dataType: 'json',
            success: function(res) {
                if (res.status === 'success') {
                    $('#newsletterAlert').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    $('#newsletterForm')[0].reset();
                } else {
                    $('#newsletterAlert').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            },
            error: function() {
                $('#newsletterAlert').html('<div class="alert alert-danger">Server error. Please try again later.</div>');
            },
            complete: function() {
                // Hide loader, show text
                $btn.prop('disabled', false);
                $btnText.removeClass('d-none');
                $btnLoader.addClass('d-none');
            }
        });
    });
</script>