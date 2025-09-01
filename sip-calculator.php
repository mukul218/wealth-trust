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
    <link rel="stylesheet" href="./public/assets/css/sip-ui.css">

    <!-- Add after your existing CSS links -->
    <link rel="stylesheet" href="./public/assets/css/sip-ui.css">

    <!-- Chart.js for the pie chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

    <!-- Indian number formatting helper (optional but tiny) -->
    <script>
        window.formatINR = (num) =>
            num.toLocaleString('en-IN', {
                maximumFractionDigits: 0
            });
    </script>

</head>

<body>

    <!-- include nav -->
    <?php
    include_once './includes/header.php';
    ?>

    <div class="hero-section container" id="sip-calc-hero">
        <div class="row g-4 justify-content-center">
            <!-- Left: Inputs -->
            <div class="col-lg-7">
                <div class="card sip-card shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="h4 mb-0 me-2">SIP Calculator</h2>
                            <span class="badge bg-light text-secondary border ms-2">SIP</span>
                        </div>
                        <p class="text-muted small mb-4">
                            Calculate the future value of your monthly SIP. Enter your SIP amount, expected annual return, and investment period to see final corpus, total invested, and growth.
                        </p>


                        <form class="calc-form" data-calculator="sip">
                            <!-- Monthly SIP -->
                            <div class="mb-4 border-bottom pb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label fw-semibold">Monthly SIP Amount</label>
                                    <div class="input-group input-group-sm w-auto">
                                        <span class="input-group-text">₹</span>
                                        <input id="sip_amount" name="sip_amount" type="number" class="form-control"
                                            value="5000" min="500" step="500">
                                    </div>
                                </div>
                                <input id="sip_amount_range" type="range" class="form-range"
                                    min="500" max="200000" step="500" value="2500">
                                <div class="d-flex justify-content-between small text-muted">
                                    <span>₹500</span><span>₹2,00,000</span>
                                </div>
                            </div>

                            <!-- Interest -->
                            <div class="mb-4 border-bottom pb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label fw-semibold">Expected Return (p.a. %)</label>
                                    <div class="input-group input-group-sm w-auto">

                                        <input id="interest_rate" name="interest_rate" type="number" class="form-control form-control-sm w-auto"
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
                            <div class="mb-4 border-bottom pb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label fw-semibold">Period</label>
                                    <div class="input-group input-group-sm w-auto">
                                        <input id="period_years" type="number" class="form-control form-control-sm w-auto"
                                            value="10" min="1" max="50">
                                        <span class="small text-muted">years</span>
                                    </div>
                                </div>
                                <input id="period_years_range" type="range" class="form-range"
                                    min="1" max="50" step="1" value="10">
                                <div class="d-flex justify-content-between small text-muted">
                                    <span>1 Year</span><span>50 Years</span>
                                </div>
                                <!-- hidden field for existing backend compatibility -->
                                <input id="period_months" name="period" type="hidden" value="120">
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <button class="btn btn-success px-4 d-flex align-items-center justify-content-center" type="submit" id="calculator-submit-btn">
                                    <span class="calc-text">Calculate</span>
                                    <span class="calc-loader spinner-border spinner-border-sm text-light ms-2 d-none"
                                        role="status" aria-hidden="true"></span>
                                </button>
                                <button class="btn btn-outline-secondary px-4" type="reset" id="targetSipReset">Reset</button>
                            </div>

                        </form>

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
                        <h5 class="card-title mb-3">Break-up of Total Payment</h5>

                        <!-- Doughnut -->
                        <div class="mb-4" style="max-width: 300px !important; margin: auto !important;">
                            <canvas id="pieChart" height="200"></canvas>
                        </div>

                        <!-- KPIs -->
                        <div id="resultBox" class="result-box d-none">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="kpi">
                                        <div class="kpi-title">Final Corpus</div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Section (from previous response) -->
    <?php
    include_once './includes/footer.php';
    ?>

    <script src="./calculator/calculator-api.js"></script>
    <script src="./calculator/calculator-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>


    <script>
        $(function() {
            // sync initial values
            $("#sip_amount_range").val($("#sip_amount").val());
            $("#interest_rate_range").val($("#interest_rate").val());
            $("#period_years_range").val($("#period_years").val());
            $("#period_months").val($("#period_years").val() * 12);

            // then bind inputs <-> sliders
            bindRangeAndInput("#sip_amount_range", "#sip_amount");
            bindRangeAndInput("#interest_rate_range", "#interest_rate");
            bindRangeAndInput("#period_years_range", "#period_years", val => {
                $("#period_months").val(val * 12);
            });

            // put this at the top of your page script block
            let sipPieChart = null; // Chart.js instance, NOT the canvas element


            setupCalculatorForm(".calc-form", {
                onSuccess: function(d) {

                    // KPIs...
                    $("#finalCorpus").text("₹" + formatINR(d.maturity_amount));
                    $("#totalInvested").text("₹" + formatINR(d.invested_amount));
                    $("#totalGrowth").text("₹" + formatINR(d.growth_value));
                    $("#assumptionsText").text(
                        `SIP ₹${formatINR(d.sip_amount)} for ${d.period / 12} years @ ${d.interest_rate}%`
                    );
                    $(".result-box").removeClass("d-none");

                    // Pie chart
                    const pieData = {
                        labels: ["Amount Invested", "Total Growth"],
                        datasets: [{
                            data: [d.invested_amount, d.growth_value],
                            backgroundColor: ["#198754", "#c9f5d6"]
                        }]
                    };

                    const canvas = document.getElementById("pieChart");
                    const ctx = canvas.getContext("2d");

                    if (sipPieChart instanceof Chart) {
                        sipPieChart.data = pieData;
                        sipPieChart.update();
                    } else {
                        sipPieChart = new Chart(ctx, {
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
            $("#targetSipReset").on("click", function() {
                $(".result-box").addClass("d-none");
                if (sipPieChart instanceof Chart) {
                    sipPieChart.destroy();
                    sipPieChart = null;
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