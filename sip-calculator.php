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
    include_once './includes/header.php';
    ?>

    <div class="hero-section container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">SIP Calculator</h5>
                    </div>
                    <div class="card-body">

                        <form class="calc-form" data-calculator="sip">
                            <div class="row g-3">

                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Monthly SIP Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input value="2500" name="sip_amount" type="number" min="1" class="form-control" placeholder="25000" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Interest Rate (p.a. %)</label>
                                    <input value="12" name="interest_rate" type="number" step="0.01" min="0" class="form-control" placeholder="12.5" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Period (months)</label>
                                    <input value="120" name="period" type="number" min="1" class="form-control" placeholder="120" required>
                                </div>
                            </div>

                            <div class="mt-4 d-flex justify-content-start gap-2">
                                <button class="btn btn-primary px-4" type="submit">Calculate</button>
                                <button class="btn btn-outline-secondary px-4" type="reset">Reset</button>
                            </div>

                            <div class="alert alert-light border mt-4 d-none result-box" role="alert"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./calculator/calculator.js"></script>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once './includes/footer.php';
    ?>

</body>

</html>