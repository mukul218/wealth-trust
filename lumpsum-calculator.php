<?php /* root/lumpsum.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lumpsum Calculator</title>
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
            <h5 class="mb-0">Lumpsum Calculator</h5>
          </div>
          <div class="card-body">
            <form class="calc-form" data-calculator="lumpsum">
              <div class="row g-3">
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Lumpsum Amount</label>
                  <div class="input-group">
                    <span class="input-group-text">₹</span>
                    <input name="lumpsum_amount" type="number" class="form-control" min="1" value="500000" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Expected Return (%)</label>
                  <input name="expected_return" type="number" class="form-control" step="0.01" min="0" value="12" required>
                </div>
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Time Period (years)</label>
                  <input name="years" type="number" class="form-control" min="1" value="30" required>
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