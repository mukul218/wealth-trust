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
 <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon.ico">

    <style>
        /* Document-style typography to match the screenshot */
        :root {
            --doc-font: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue",
                Arial, "Noto Sans", "Liberation Sans", "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol";
        }

        body {
            background: #fff;
            /* no special bg */
            font-family: var(--doc-font);
            color: #111;
            line-height: 1.45;
            font-size: 16px;
            /* readable, Word-like */
        }

        .doc-wrap {
            max-width: 760px;
            /* tight column like the image */
            margin-inline: auto;
            /* padding: 24px 16px; */
        }

        .small-meta {
            font-size: 0.9rem;
            text-transform: none;
            letter-spacing: 0;
            color: #333;
        }

        .doc-title-top {
            font-size: 0.95rem;
            font-weight: 600;
            text-align: left;
            margin-bottom: .25rem;
        }

        .doc-h1 {
            font-size: 1.25rem;
            /* similar to the screenshot main heading */
            font-weight: 700;
            margin: 0 0 1rem 0;
        }

        .doc-h2 {
            font-size: 1.05rem;
            font-weight: 700;
            margin: 1.25rem 0 .5rem 0;
        }

        .doc-section-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin: 1rem 0 .25rem 0;
        }

        /* Lists to emulate the simple Word bullets/numbers in the image */
        .doc-ol {
            counter-reset: item;
            list-style: decimal;
            padding-left: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .doc-ul {
            list-style: disc;
            padding-left: 1.25rem;
            margin-bottom: 0.25rem;
        }

        .doc-ul-circle {
            list-style: circle;
            /* the small “o” bullets like in the image */
            padding-left: 1.25rem;
            margin-bottom: .25rem;
        }

        .doc-ol>li,
        .doc-ul>li,
        .doc-ul-circle>li {
            margin: .25rem 0;
        }

        /* Tighten link styling to feel like document text */
        a {
            color: #0a58ca;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Subtle spacing blocks (no borders, no shadow) */
        .mb-xxs {
            margin-bottom: .25rem;
        }

        .mb-s {
            margin-bottom: .5rem;
        }

        .mb-m {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>




    <section class="hero-section doc-wrap">

        <!-- Top line exactly like the image -->
        <div class="doc-title-top text-center">Annexure B- Grievance Redressal Mechanism (for Accessibility Issues)</div>


        <!-- Subtitle with date line -->
        <h2 class="doc-h2 mb-s">
            Grievance Redressal Mechanism – Accessibility Compliance
            <span class="small-meta">(SEBI Circular dated July 31, 2025)</span>
        </h2>

        <!-- Intro paragraph -->
        <p class="mb-m">
            In compliance with the SEBI circular,
            <strong>WealthTrust Capital Services</strong> has established a dedicated grievance
            redressal mechanism to address accessibility-related complaints from persons with
            disabilities (<abbr title="Persons with Disabilities">PwDs</abbr>).
        </p>

        <!-- 1. Dedicated Channels -->
        <h3 class="doc-section-title">1. Dedicated Channels</h3>
        <ul class="doc-ul-circle">
            <li>
                <strong>Email:</strong>
                <a href="mailto:admin@wealthtrustcap.com">admin@wealthtrustcap.com</a>
            </li>
            <li>
                <strong>Helpline:</strong>
                <a href="tel:+919819039345">+91-9819039345</a>
                <span class="small-meta">(operational Mon–Fri, 9:30 AM – 6:00 PM)</span>
            </li>
            <li>
                <strong>Web Form:</strong>
                Available on
                <a href="./disabilities.php" target="_blank" rel="noopener">Disabilities</a>
            </li>
        </ul>

        <!-- 2. Process -->
        <h3 class="doc-section-title">2. Process</h3>
        <ul class="doc-ul-circle">
            <li>
                All accessibility-related grievances will be acknowledged within
                <strong>2 working days</strong>.
            </li>
            <li>
                Resolution/response will be provided within
                <strong>15 working days</strong>.
            </li>
            <li>
                Complex issues requiring longer timelines will be communicated clearly to the
                complainant.
            </li>
        </ul>

        <!-- 3. Escalation Matrix -->
        <h3 class="doc-section-title">3. Escalation Matrix</h3>
        <ul class="doc-ul-circle">
            <li>
                <strong>Level 1: Nodal Officer</strong> (Ms. Sneha Jain)<br />
                Email: <a href="mailto:admin@wealthtrustcap.com">admin@wealthtrustcap.com</a><br />
                Contact: <a href="tel:+919819039345">+91-9819039345</a>
            </li>
            <li>
                <strong>Level 2: Partner</strong> (Ms. Sneha Jain)<br />
                Email: <a href="mailto:admin@wealthtrustcap.com">admin@wealthtrustcap.com</a><br />
                Contact: <a href="tel:+919819039345">+91-9819039345</a>
            </li>
        </ul>

    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>

</body>

</html>