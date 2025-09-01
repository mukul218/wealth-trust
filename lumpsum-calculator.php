<?php /* root/lumpsum.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WealthTrust | Lumpsum Calculator</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Base styles + SIP UI (reused for look) -->
  <link rel="stylesheet" href="./public/assets/css/style.css">
  <link rel="stylesheet" href="./public/assets/css/sip-ui.css">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

  <!-- INR formatter -->
  <script>
    window.formatINR = (num) =>
      Number(num || 0).toLocaleString('en-IN', {
        maximumFractionDigits: 0
      });
  </script>
</head>

<body>

  <?php include_once './includes/header.php'; ?>

  <div class="hero-section container" id="sip-calc-hero"><!-- reuse same id to get SIP styles -->
    <div class="row g-4 justify-content-center">

      <!-- Left: Inputs -->
      <div class="col-lg-7">
        <div class="card sip-card shadow-sm">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <h2 class="h4 mb-0 me-2">Lumpsum Investment Calculator</h2>
              <span class="badge bg-light text-secondary border ms-2">Lumpsum</span>
            </div>
            <p class="text-muted small mb-4">
              Estimate your future corpus for a one-time investment at an assumed annual return.
            </p>

            <form class="calc-form" data-calculator="lumpsum">
              <!-- Lumpsum Amount -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Lumpsum Amount</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">₹</span>
                    <input id="lumpsum_amount" name="lumpsum_amount" type="number" class="form-control"
                      value="100000" min="1000" step="1000">
                  </div>
                </div>
                <input id="lumpsum_amount_range" type="range" class="form-range"
                  min="1000" max="10000000" step="1000" value="100000">
                <div class="d-flex justify-content-between small text-muted">
                  <span>₹1000</span><span>₹1 Crore</span>
                </div>
              </div>

              <!-- Expected Return -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Expected Return (p.a. %)</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">%</span>
                    <input id="interest_rate" name="expected_return" type="number"
                      class="form-control form-control-sm w-auto"
                      value="12" min="1" max="30" step="0.1">
                  </div>
                </div>
                <input id="interest_rate_range" type="range" class="form-range"
                  min="1" max="30" step="0.1" value="12">
                <div class="d-flex justify-content-between small text-muted">
                  <span>1%</span><span>30%</span>
                </div>
              </div>

              <!-- Period -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Investment Period</label>
                  <div class="input-group input-group-sm w-auto">
                    <input id="period_years" type="number" class="form-control form-control-sm w-auto"
                      value="10" min="1" max="30">
                    <span class="small text-muted">years</span>
                  </div>
                </div>
                <input id="period_years_range" type="range" class="form-range"
                  min="1" max="30" step="1" value="10">
                <div class="d-flex justify-content-between small text-muted">
                 <span>1 Year</span><span>50 Years</span>
                </div>
                <!-- backend compatibility -->
                <input id="period_months" name="years" type="hidden" value="120">
              </div>

              <!-- Actions -->
              <div class="d-flex gap-2 align-items-center">
                <button class="btn btn-success px-4 d-flex align-items-center justify-content-center" type="submit">
                  <span class="calc-text">Calculate</span>
                  <span class="calc-loader spinner-border spinner-border-sm text-light ms-2 d-none"
                    role="status" aria-hidden="true"></span>
                </button>
                <button class="btn btn-outline-secondary px-4" type="reset" id="lumpsumReset">Reset</button>
              </div>
            </form>
            <!-- Quick links to other calculators -->
                      <div class="calc-links mt-4">
              <div class="small text-muted mb-2">Explore other calculators</div>

              <div class="row row-cols-1 row-cols-md-3 g-2">
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="sip-calculator.php">SIP Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="car-calculator.php">Car Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="house-calculator.php">House Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="lumpsum-calculator.php">Lumpsum Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="marriage-calculator.php">Marriage Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="vacation-calculator.php">Vacation Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="crorepati-calculator.php">Crorepati Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="retirement-calculator.php">Retirement Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="target-sip-calculator.php">Target SIP Calculator</a>
                </div>
                <div class="col">
                  <a class="btn btn-light border w-100 d-flex justify-content-center text-nowrap" href="lumpsum-target-calculator.php">Lumpsum Target</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Results -->
      <div class="col-lg-5">
        <div class="card shadow-sm h-100">
          <div class="card-body p-4">
            <h5 class="card-title mb-3">Break-up of Total Amount</h5>

            <div class="mb-4" style="max-width: 300px; margin: auto;">
              <canvas id="lumpsumPieCanvas" height="200"></canvas>
            </div>

            <div class="result-box d-none">
              <div class="row gy-3">
                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Final Corpus</div>
                    <div class="kpi-value" id="finalCorpus">—</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Amount Invested</div>
                    <div class="kpi-value" id="totalInvested">—</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Total Growth</div>
                    <div class="kpi-value" id="totalGrowth">—</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="kpi small">
                    <div class="kpi-title">Assumptions</div>
                    <div class="text-muted" id="assumptionsText">—</div>
                  </div>
                </div>
              </div>
            </div><!-- /result-box -->
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include_once './includes/footer.php'; ?>

  <!-- Common calculator helpers -->
  <script src="./calculator/calculator-api.js"></script>
  <script src="./calculator/calculator-ui.js"></script>



  <!-- Page JS -->
  <script>
    $(function() {
      // Initial sync to match number inputs
      $("#lumpsum_amount_range").val($("#lumpsum_amount").val());
      $("#interest_rate_range").val($("#interest_rate").val());
      $("#period_years_range").val($("#period_years").val());
      $("#period_months").val($("#period_years").val());

      // Bind sliders ↔ inputs
      bindRangeAndInput("#lumpsum_amount_range", "#lumpsum_amount");
      bindRangeAndInput("#interest_rate_range", "#interest_rate");
      bindRangeAndInput("#period_years_range", "#period_years", val => {
        $("#period_months").val(val);
      });

      // Chart instance (NOT the canvas element)
      let lumpsumPieChart = null;

      // Submit handler via common helper
      setupCalculatorForm(".calc-form", {
        onSuccess: function(d) {
          // API → fields
          const invested = Number(d.lumpsum_amount || $("#lumpsum_amount").val() || 0); // 100000
          const corpus = Number(d.future_amount || 0); // 310585
          const years = Number(d.years ?? $("#years").val() ?? 0); // 10
          const rate = d.expected_return ?? $("#expected_return").val(); // 12
          const growth = Math.max(0, corpus - invested);

          // KPIs
          $("#finalCorpus").text("₹" + formatINR(corpus));
          $("#totalInvested").text("₹" + formatINR(invested));
          $("#totalGrowth").text("₹" + formatINR(growth));
          $("#assumptionsText").text(
            `Invest ₹${formatINR(invested)} for ${years} years @ ${rate}%`
          );

          $(".result-box").removeClass("d-none");

          // Pie chart (Invested vs Growth)
          const pieData = {
            labels: ["Amount Invested", "Total Growth"],
            datasets: [{
              data: [invested, growth],
              backgroundColor: ["#198754", "#c9f5d6"]
            }]
          };

          const ctx = document.getElementById("lumpsumPieCanvas").getContext("2d");
          if (window.lumpsumPieChart instanceof Chart) {
            window.lumpsumPieChart.data = pieData;
            window.lumpsumPieChart.update();
          } else {
            window.lumpsumPieChart = new Chart(ctx, {
              type: "doughnut",
              data: pieData,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    position: "bottom"
                  }
                }
              }
            });
          }
        }
      });

      // Reset cleanup
      $("#lumpsumReset").on("click", function() {
        $(".result-box").addClass("d-none");
        if (window.lumpsumPieChart instanceof Chart) {
          window.lumpsumPieChart.destroy();
          window.lumpsumPieChart = null;
        }
      });

      // (Optional) slider fill color like SIP
      (function() {
        function setFill(el) {
          const min = parseFloat(el.min) || 0,
            max = parseFloat(el.max) || 100,
            val = parseFloat(el.value) || 0;
          const pct = ((val - min) * 100) / (max - min);
          el.style.setProperty('--_percent', pct + '%');
        }
        document.querySelectorAll('#sip-calc-hero .form-range').forEach(r => {
          setFill(r);
          r.addEventListener('input', () => setFill(r));
        });
      })();
    });
  </script>

</body>

</html>