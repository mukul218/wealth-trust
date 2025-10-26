<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WealthTrust Capital Services</title>
    <?php
    include_once './includes/css-lib.php'
    ?>
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>
    <section class="hero-section">
        <div class="container">
            <!-- Disclosure Section -->
            <div class="">
                <div class="card-body">
                    <h2 class="card-title h4 text-primary mb-4">Disclosure</h2>
                    <h5 class="fw-bold mb-3">Commission Disclosure</h5>
                    <p>
                        WealthTrust Capital Services is offered commissions for mutual fund business sourced under its own ARN code. The commission earned by the firm varies from fund house to fund house and from scheme to scheme. As per SEBI circular:
                        <strong>SEBI/IMD/CIR No. 4/168230/09</strong>, following are the details of the commission earned by WealthTrust Capital Services from various AMCs, whose products are being distributed:
                    </p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Refer to T30 cities in India as defined by AMFI, and commission could be higher in case of B30 cities.</li>
                        <li class="list-group-item">Are subject to change, without any prior consent and at the sole discretion and agreement between WealthTrust Capital Services and the respective AMCs.</li>
                        <li class="list-group-item">Apply only to investments subscribed into Regular/Distributor Plans, which involve payment of commission to MFDs. No upfront commission is paid to/received by WealthTrust Capital Services.</li>
                        <li class="list-group-item">Details of scheme-level commission on mutual funds are available with your Wealth/Relationship Manager and will be provided on request.</li>
                        <li class="list-group-item">This information is compiled on a best-effort basis and rates are updated as and when they are received from AMCs.</li>
                    </ul>
                    <p>
                        You can check the gross commissions earned by WealthTrust Capital Services in any particular financial year by clicking on the following link:
                        <a href="https://www.amfiindia.com/commission-disclosure" class="btn btn-link p-0">AMFI Commission Disclosure</a>
                    </p>
                </div>
            </div>

            <!-- Risk Factors Section -->
            <div class="">
                <div class="card-body">
                    <h2 class="card-title h4 text-danger mb-4">Risk Factors</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Investments in Mutual Funds are subject to market risks. Please read all scheme-related documents carefully before investing.</li>
                        <li class="list-group-item">Mutual Fund schemes do not assure or guarantee any returns. Past performance of any Mutual Fund scheme may or may not be sustained in the future.</li>
                        <li class="list-group-item">There is no guarantee that the investment objective of any suggested scheme shall be achieved.</li>
                        <li class="list-group-item">Investors are advised to check and evaluate the Exit Loads and Total Expense Ratio (TER) applicable at the time of investment before finalizing any decision.</li>
                        <li class="list-group-item">WealthTrust Capital Services deals only in Regular Plans of Mutual Fund schemes and earns a trailing commission on client investments.</li>
                        <li class="list-group-item">Disclosure of commission earnings is made to clients at the time of investment.</li>
                        <li class="list-group-item">Investors have the option to invest in Direct Plans of every Mutual Fund scheme, which come with a lower expense ratio. WealthTrust Capital Services does not earn any commission on Direct Plans and therefore does not deal in them.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Disclosure Image -->
    <section class="disclosure-image-section mb-5">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="mb-4">Regulatory Disclosure</h2>

            <!-- Image -->
            <img loading="lazy" src="./public/assets/image/disclosure.jpeg"
                alt="Disclosure Image"
                class="img-fluid d-block mx-auto">
        </div>
    </section>


    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>