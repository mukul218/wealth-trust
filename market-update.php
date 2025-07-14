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

    <div class="container py-5 hero-section">
        <div class="row mx-3">
            <div class="col-lg-7">
                <h1 class="fw-bold" style="color: #399082; font-size: 3rem;">Monthly Market Updates</h1>
                <p class="mt-4" style="font-size: 1.2rem;">
                    Provides you with an encompassing view of the current economy, equity and debt markets for the month along with the likely impact on investments.
                </p>
                <button class="btn btn-success btn-lg rounded-pill mt-3 px-4">Subscribe</button>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background: #fcf7f3;">
        <div class="container">
            <div class="row g-4">
                <!-- Main news headline with image -->
                <div class="col-lg-8">
                    <div class="position-relative" style="background: #eee; min-height: 400px; border-radius: 8px; overflow: hidden;">
                        <!-- News background image (replace src with your actual image) -->
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80"
                            alt="Main news" class="w-100 h-100" style="object-fit: cover; opacity: 0.5; position: absolute; top: 0; left: 0;">
                        <div class="position-relative p-4" style="z-index: 2;">
                            <h2 class="fw-bold mb-3" style="font-size: 2.5rem;">Main news - headlines</h2>
                            <p style="font-size: 1.3rem; font-weight: 500;">
                                Description about News...<br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing eli
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Sidebar news cards -->
                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded-3 shadow-sm h-100">
                        <h3 class="fw-bold text-center" style="color: #399082; border-bottom: 2px solid #399082; padding-bottom: 0.5rem;">News heading</h3>
                        <!-- News card 1 -->
                        <div class="border rounded-3 p-3 my-3">
                            <div style="color: #399082; font-size: 1.1rem;">Image content-<br>Lorem ipsum dolor</div>
                            <div class="mt-2"><a href="#" class="fw-semibold" style="color: #399082;">Date by may 15th</a></div>
                        </div>
                        <!-- News card 2 -->
                        <div class="border rounded-3 p-3 my-3">
                            <div style="color: #399082; font-size: 1.1rem;">Image content-<br>Lorem ipsum dolor</div>
                            <div class="mt-2"><a href="#" class="fw-semibold" style="color: #399082;">Date by may 15th</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>