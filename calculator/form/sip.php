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
    <link rel="stylesheet" href="./../public/assets/css/style.css">

    <style>
        /* for  EQUITY ▸ Regulatory Disclosure (NEW SECTION) only  */

        #equity-regulatory-disclosure {
            background: var(--secondary-color);
        }

        #equity-regulatory-disclosure .brand-title {
            color: var(--dark-green);
            font-weight: 700;
        }

        #equity-regulatory-disclosure .subtle {
            color: #1b1b1b;
            opacity: .9;
        }

        /* Tab (pill) styles to match the screenshot */
        #equity-regulatory-disclosure .disclosure-pills .nav-link {
            border-radius: .6rem;
            background: #e8fff1;
            color: #4a4a4a;
            font-weight: 600;
            padding: .5rem 1rem;
            border: 1px solid rgba(0, 0, 0, .06);
        }

        #equity-regulatory-disclosure .disclosure-pills .nav-link.active {
            background: #fff;
            color: #000;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .02) inset;
        }

        /* Card-like table wrapper */
        #equity-regulatory-disclosure .table-wrap {
            background: #fff;
            border-radius: .8rem;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .05) inset;
        }

        /* Table styling to echo design */
        #equity-regulatory-disclosure table {
            margin: 0;
        }

        #equity-regulatory-disclosure thead th {
            font-weight: 600;
            background: #f7fff9;
            white-space: nowrap;
        }

        #equity-regulatory-disclosure tbody td,
        #equity-regulatory-disclosure thead th {
            padding: .95rem .75rem;
            vertical-align: middle;
            font-size: .95rem;
        }

        #equity-regulatory-disclosure .muted-note {
            color: #333;
            opacity: .8;
            font-size: .95rem;
        }

        /* Responsive tweaks */
        @media (max-width: 767.98px) {
            #equity-regulatory-disclosure .brand-title {
                font-size: 1.35rem;
            }

            #equity-regulatory-disclosure .table-responsive {
                border-radius: .8rem;
                background: #fff;
            }

            #equity-regulatory-disclosure tbody td:first-child {
                min-width: 180px;
            }
        }
    </style>
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>

    <form class="calc-form" data-calculator="sip">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Monthly SIP Amount</label>
                <input name="sip_amount" type="number" min="1" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Interest rate (p.a. %)</label>
                <input name="interest_rate" type="number" step="0.01" min="0" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Period (months)</label>
                <input name="period" type="number" min="1" class="form-control" required>
            </div>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Calculate</button>
        </div>

        <div class="alert alert-light border mt-3 d-none result-box" role="alert"></div>
    </form>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>


<form class="calc-form" data-calculator="sip">
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Monthly SIP Amount</label>
            <input name="sip_amount" type="number" min="1" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Interest rate (p.a. %)</label>
            <input name="interest_rate" type="number" step="0.01" min="0" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Period (months)</label>
            <input name="period" type="number" min="1" class="form-control" required>
        </div>
    </div>

    <div class="mt-3">
        <button class="btn btn-primary" type="submit">Calculate</button>
    </div>

    <div class="alert alert-light border mt-3 d-none result-box" role="alert"></div>
</form>