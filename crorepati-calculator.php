<?php /* root/crorepati.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WealthTrust | Become A Crorepati</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Base + SIP UI styles (reused look) -->
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

  <!-- Reuse SIP styles by keeping the same container id -->
  <div class="hero-section container" id="sip-calc-hero">
    <div class="row g-4 justify-content-center">

      <!-- Left: Inputs -->
      <div class="col-lg-7">
        <div class="card sip-card shadow-sm">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <h2 class="h4 mb-0 me-2">Become a <span class="text-success">Crorepati</span></h2>
              <span class="badge bg-light text-secondary border ms-2">Goal @ Retirement</span>
            </div>
            <p class="text-muted small mb-4">
              Calculate the monthly SIP needed to reach your target wealth at retirement, considering
              inflation and your current savings.
            </p>

            <form class="calc-form" data-calculator="crorepati">
              <!-- Current Age -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Current Age</label>
                  <div class="input-group input-group-sm w-auto">
                    <input id="current_age" name="current_age" type="number"
                      class="form-control form-control-sm w-auto"
                      value="30" min="18" max="70" step="1">
                    <span class="input-group-text">yrs</span>
                  </div>
                </div>
                <input id="current_age_range" type="range" class="form-range"
                  min="18" max="70" step="1" value="30">
                <div class="d-flex justify-content-between small text-muted">
                  <span>18 Years</span><span>70 Years</span>
                </div>
              </div>

              <!-- Retirement Age -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Retirement Age</label>
                  <div class="input-group input-group-sm w-auto">
                    <input id="retirement_age" name="retirement_age" type="number"
                      class="form-control form-control-sm w-auto"
                      value="60" min="25" max="80" step="1">
                    <span class="input-group-text">yrs</span>
                  </div>
                </div>
                <input id="retirement_age_range" type="range" class="form-range"
                  min="25" max="80" step="1" value="60">
                <div class="d-flex justify-content-between small text-muted">
                  <span>25 Years</span><span>80 Years</span>
                </div>
              </div>

              <!-- Target Wealth at Retirement -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Target Wealth at Retirement</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">₹</span>
                    <input id="wealth_amount" name="wealth_amount" type="number" class="form-control"
                      value="100000000" min="100000" step="5000">
                  </div>
                </div>
                <input id="wealth_amount_range" type="range" class="form-range"
                  min="100000" max="200000000" step="5000" value="100000000">
                <div class="d-flex justify-content-between small text-muted">
                  <span>₹1 Lakh</span><span>₹20 Crore</span>
                </div>
              </div>

              <!-- Inflation -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Inflation (p.a. %)</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">%</span>
                    <input id="inflation_rate" name="inflation_rate" type="number"
                      class="form-control form-control-sm w-auto"
                      value="5" min="0" max="15" step="0.1">
                  </div>
                </div>
                <input id="inflation_rate_range" type="range" class="form-range"
                  min="0" max="15" step="0.1" value="5">
                <div class="d-flex justify-content-between small text-muted">
                  <span>0%</span><span>15%</span>
                </div>
              </div>

              <!-- Expected Return -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Expected Return (p.a. %)</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">%</span>
                    <input id="expected_return" name="expected_return" type="number"
                      class="form-control form-control-sm w-auto"
                      value="12" min="1" max="30" step="0.1">
                  </div>
                </div>
                <input id="expected_return_range" type="range" class="form-range"
                  min="1" max="30" step="0.1" value="12">
                <div class="d-flex justify-content-between small text-muted">
                  <span>1%</span><span>30%</span>
                </div>
              </div>

              <!-- Savings You Have Now -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Savings You Have Now</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">₹</span>
                    <input id="savings_amount" name="savings_amount" type="number" class="form-control"
                      value="2500000" min="0" step="5000">
                  </div>
                </div>
                <input id="savings_amount_range" type="range" class="form-range"
                  min="0" max="200000000" step="5000" value="2500000">
                <div class="d-flex justify-content-between small text-muted">
                  <span>₹0</span><span>₹20 Crore</span>
                </div>
              </div>

              <!-- Actions -->
              <div class="d-flex gap-2 align-items-center">
                <button class="btn btn-success px-4 d-flex align-items-center justify-content-center" type="submit" id="calculator-submit-btn">
                  <span class="calc-text">Calculate</span>
                  <span class="calc-loader spinner-border spinner-border-sm text-light ms-2 d-none"
                    role="status" aria-hidden="true"></span>
                </button>
                <button class="btn btn-outline-secondary px-4" type="reset" id="crorepatiReset">Reset</button>
              </div>
            </form>
            <!-- Quick links to other calculators -->
                      <div class="calc-links mt-4 d-none d-md-block">
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
            <h5 class="card-title mb-3">Break-up: Invested vs Earnings</h5>

            <div class="mb-4" style="max-width: 300px; margin: auto;">
              <canvas id="crorepatiPieCanvas" height="200"></canvas>
            </div>

            <div class="result-box d-none">
              <div class="row gy-3">
                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Required Monthly SIP</div>
                    <div class="kpi-value" id="requiredSip">—</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Target Wealth (Inflation-Adj.)</div>
                    <div class="kpi-value" id="targetWealth">—</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Projected Final Corpus</div>
                    <div class="kpi-value" id="finalCorpus">—</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Total Invested</div>
                    <div class="kpi-value" id="totalInvested">—</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Total Earnings</div>
                    <div class="kpi-value" id="totalEarnings">—</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="kpi">
                    <div class="kpi-title">Additional Savings Needed</div>
                    <div class="kpi-value" id="additionalSavings">—</div>
                  </div>
                </div>


                <div class="col-12">
                  <div class="kpi small">
                    <div class="kpi-title">Assumptions</div>
                    <div class="text-muted" id="assumptionsText">—</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include_once './includes/footer.php'; ?>

  <!-- Common calculator helpers (after footer, per your convention) -->
  <script src="./calculator/calculator-api.js"></script>
  <script src="./calculator/calculator-ui.js"></script>

  <!-- Page JS -->
  <script>
    $(function() {
      // Initial sync to match number inputs
      $("#current_age_range").val($("#current_age").val());
      $("#retirement_age_range").val($("#retirement_age").val());
      $("#wealth_amount_range").val($("#wealth_amount").val());
      $("#inflation_rate_range").val($("#inflation_rate").val());
      $("#expected_return_range").val($("#expected_return").val());
      $("#savings_amount_range").val($("#savings_amount").val());

      // Bind sliders ↔ inputs
      bindRangeAndInput("#current_age_range", "#current_age");
      bindRangeAndInput("#retirement_age_range", "#retirement_age");
      bindRangeAndInput("#wealth_amount_range", "#wealth_amount");
      bindRangeAndInput("#inflation_rate_range", "#inflation_rate");
      bindRangeAndInput("#expected_return_range", "#expected_return");
      bindRangeAndInput("#savings_amount_range", "#savings_amount");

      // Chart instance
      let crorepatiPieChart = null;

      setupCalculatorForm(".calc-form", {
        onSuccess: function(d) {
          // Derive period from ages
          const currentAge = Number(d.current_age ?? $("#current_age").val() ?? 0);
          const retireAge = Number(d.retirement_age ?? $("#retirement_age").val() ?? 0);
          const years = Math.max(0, retireAge - currentAge);

          // API fields from your sample payload
          const reqSip = Number(d.monthly_savings ?? 0); // ₹ 147,489
          const targetWealth = Number(d.target_wealth ?? 0); // ₹ 529,308,283
          const targetAmount = Number(d.target_amount ?? 0); // projected corpus (invested + earnings)
          const invested = Number(d.invested_amount ?? 0); // ₹ 53,096,040
          const earnings = Number(d.total_earnings ?? 0); // ₹ 401,312,438
          const addlSavings = Number(d.target_savings ?? 0); // ₹ 74,899,805 (gap/top-up)
          const er = d.expected_return ?? $("#expected_return").val();
          const inf = d.inflation_rate ?? $("#inflation_rate").val();
          const savingsNow = Number(d.savings_amount ?? $("#savings_amount").val() ?? 0);

          // KPIs
          $("#requiredSip").text("₹" + formatINR(reqSip));
          $("#targetWealth").text("₹" + formatINR(targetWealth));
          $("#finalCorpus").text("₹" + formatINR(targetAmount));
          $("#totalInvested").text("₹" + formatINR(invested));
          $("#totalEarnings").text("₹" + formatINR(earnings));
          $("#additionalSavings").text("₹" + formatINR(addlSavings));

          $("#assumptionsText").html(
            `Horizon: ${years} years · Return: ${er}% · Inflation: ${inf}% · ` +
            `Savings now: ₹${formatINR(savingsNow)}`
          );

          $(".result-box").removeClass("d-none");

          // Pie chart: Invested vs Earnings (cleaner since API gives both)
          const pieData = {
            labels: ["Total Invested", "Total Earnings"],
            datasets: [{
              data: [Math.max(invested, 0), Math.max(earnings, 0)],
              backgroundColor: ["#198754", "#c9f5d6"]
            }]
          };

          const ctx = document.getElementById("crorepatiPieCanvas").getContext("2d");
          if (crorepatiPieChart instanceof Chart) {
            crorepatiPieChart.data = pieData;
            crorepatiPieChart.update();
          } else {
            crorepatiPieChart = new Chart(ctx, {
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

          // (optional) If you want to highlight shortfall/surplus textually:
          // const gap = targetWealth - targetAmount; // should equal addlSavings
          // if (gap > 0) { /* show a small note: "Shortfall ₹…" */ }
        }

      });

      // Reset cleanup
      $("#crorepatiReset").on("click", function() {
        $(".result-box").addClass("d-none");
        if (crorepatiPieChart instanceof Chart) {
          crorepatiPieChart.destroy();
          crorepatiPieChart = null;
        }
      });

      // Optional: slider fill color like SIP
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