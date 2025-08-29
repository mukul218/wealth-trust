<?php /* root/retirement.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retirement Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./public/assets/css/style.css">
</head>

<body>
  <?php include_once './includes/header.php'; ?>

  <div class="container hero-section">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Retirement Calculator</h5>
          </div>
          <div class="card-body">
            <form class="calc-form" data-calculator="retirement">
              <div class="row g-3">
                <div class="col-md-3">
                  <label class="form-label fw-semibold">Current Age</label>
                  <input name="current_age" type="number" min="0" class="form-control" value="30" required>
                </div>
                <div class="col-md-3">
                  <label class="form-label fw-semibold">Retirement Age</label>
                  <input name="retirement_age" type="number" min="1" class="form-control" value="60" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Target Wealth At Retirement</label>
                  <div class="input-group"><span class="input-group-text">₹</span>
                    <input name="wealth_amount" type="number" min="1" class="form-control" value="115528894" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Inflation (%)</label>
                  <input name="inflation_rate" type="number" step="0.01" min="0" class="form-control" value="5" required>
                </div>
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Expected Return (%)</label>
                  <input name="expected_return" type="number" step="0.01" min="0" class="form-control" value="12" required>
                </div>
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Savings You Have Now</label>
                  <div class="input-group"><span class="input-group-text">₹</span>
                    <input name="savings_amount" type="number" min="0" class="form-control" value="2500000" required>
                  </div>
                </div>
              </div>
              <div class="mt-4 d-flex gap-2">
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
  <?php include_once './includes/footer.php'; ?>
</body>

</html>