<?php /* root/house.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WealthTrust | House Goal Calculator</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Base + SIP UI styles (reuse SIP look) -->
  <link rel="stylesheet" href="./public/assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon.ico">
  <link rel="stylesheet" href="./public/assets/css/sip-ui.css">


  <script type="application/ld+json">
    {
      /retirement-calculator , etc. 
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Investment Calculator Tools | WealthTrust Capital",
      "description": "Use our free online calculators to plan SIPs, Lumpsum, 
      Retirement, and other financial goals.
      ",
      "url": "https://www.wealthtrustcap.com/house-calculator"
    }
  </script>

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
              <h2 class="h4 mb-0 me-2">House <span class="text-success">Goal</span> Calculator</h2>
              <span class="badge bg-light text-secondary border ms-2">Target SIP</span>
            </div>
            <p class="text-muted small mb-4">
              Find the monthly SIP needed to reach your house budget (inflation-adjusted) over time.
            </p>

            <form class="calc-form" data-calculator="house">
              <!-- Target Amount -->
              <div class="mb-4 border-bottom pb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Target Amount</label>
                  <div class="input-group input-group-sm w-auto">
                    <span class="input-group-text">₹</span>
                    <input id="wealth_amount" name="wealth_amount" type="number" class="form-control"
                      value="2500000" min="100000" step="5000">
                  </div>
                </div>
                <input id="wealth_amount_range" type="range" class="form-range"
                  min="100000" max="100000000" step="5000" value="2500000">
                <div class="d-flex justify-content-between small text-muted">
                  <span>₹1 Lakh</span><span>₹10 Crore</span>
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

              <!-- Period (years) -->
              <div class="mb-4">
                <div class="d-flex justify-content-between">
                  <label class="form-label fw-semibold">Period</label>
                  <div class="input-group input-group-sm w-auto">
                    <input id="period" name="period" type="number" class="form-control form-control-sm w-auto"
                      value="30" min="1" max="50">
                    <span class="small text-muted">years</span>
                  </div>
                </div>
                <input id="period_range" type="range" class="form-range"
                  min="1" max="50" step="1" value="30">
                <div class="d-flex justify-content-between small text-muted">
                  <span>1 Year</span><span>50 Years</span>
                </div>
              </div>

              <!-- Actions -->
              <div class="d-flex gap-2 align-items-center">
                <button class="btn btn-success px-4 d-flex align-items-center justify-content-center" type="submit" id="calculator-submit-btn">
                  <span class="calc-text">Calculate</span>
                  <span class="calc-loader spinner-border spinner-border-sm text-light ms-2 d-none"
                    role="status" aria-hidden="true"></span>
                </button>
                <button class="btn btn-outline-secondary px-4" type="reset" id="houseReset">Reset</button>
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
            <h5 class="card-title mb-3">Break-up of Total Amount</h5>

            <div class="mb-4" style="max-width: 300px; margin: auto;">
              <canvas id="housePieCanvas" height="200"></canvas>
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
                    <div class="kpi-title">Final Corpus (Target)</div>
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

  <!-- Common calculator helpers (after footer, per your convention) -->
  <script src="./calculator/calculator-api.js"></script>
  <script src="./calculator/calculator-ui.js"></script>

  <!-- Page JS -->
  <script>
    $(function() {
      // Initial sync
      $("#wealth_amount_range").val($("#wealth_amount").val());
      $("#inflation_rate_range").val($("#inflation_rate").val());
      $("#expected_return_range").val($("#expected_return").val());
      $("#period_range").val($("#period").val());

      // Bind sliders ↔ inputs
      bindRangeAndInput("#wealth_amount_range", "#wealth_amount");
      bindRangeAndInput("#inflation_rate_range", "#inflation_rate");
      bindRangeAndInput("#expected_return_range", "#expected_return");
      bindRangeAndInput("#period_range", "#period");

      // Chart instance
      let housePieChart = null;

      setupCalculatorForm(".calc-form", {
        onSuccess: function(d) {
          // Target SIP style response:
          // wealth_amount, inflation_rate, expected_return, period,
          // target_wealth, sip_amount, invested_amount, growth_amount

          const requiredSip = Number(d.sip_amount || 0);
          const targetWealth = Number(d.target_wealth || 0);
          const invested = Number(d.invested_amount || 0);
          const growth = Number(d.growth_amount || Math.max(targetWealth - invested, 0));
          const years = Number(d.period ?? $("#period").val() ?? 0);
          const er = d.expected_return ?? $("#expected_return").val();
          const inf = d.inflation_rate ?? $("#inflation_rate").val();

          // KPIs
          $("#requiredSip").text("₹" + formatINR(requiredSip));
          $("#finalCorpus").text("₹" + formatINR(targetWealth));
          $("#totalInvested").text("₹" + formatINR(invested));
          $("#totalGrowth").text("₹" + formatINR(growth));

          $("#assumptionsText").html(
            `Period: ${years} years · Return: ${er}% · Inflation: ${inf}%`
          );

          $(".result-box").removeClass("d-none");

          // Pie chart (Invested vs Growth)
          const pieData = {
            labels: ["Amount Invested", "Total Growth"],
            datasets: [{
              data: [Math.max(invested, 0), Math.max(growth, 0)],
              backgroundColor: ["#198754", "#c9f5d6"]
            }]
          };

          const ctx = document.getElementById("housePieCanvas").getContext("2d");
          if (housePieChart instanceof Chart) {
            housePieChart.data = pieData;
            housePieChart.update();
          } else {
            housePieChart = new Chart(ctx, {
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
      $("#houseReset").on("click", function() {
        $(".result-box").addClass("d-none");
        if (housePieChart instanceof Chart) {
          housePieChart.destroy();
          housePieChart = null;
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