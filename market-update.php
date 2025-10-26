<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo tag -->
    <meta name="description" content="Stay updated with unbiased market insights and economic trends. WealthTrust Capital provides educational market content for informed financial decision-making.">
    <meta name="keywords" content="market insights, financial updates, economic trends, investment research, market analysis">
    <title>Market Insights & Financial Trends | WealthTrust Capital</title>
    <?php
    include_once './includes/css-lib.php'
    ?>
    <link rel="canonical" href="https://www.wealthtrustcap.com/market-update" />

    <meta property="og:title" content="Market Updates & Insights | WealthTrust Capital" />
    <meta property="og:description" content="Stay informed with expert market insights and investment updates from WealthTrust Capital." />
    <meta property="og:url" content="https://www.wealthtrustcap.com/market-update" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="OG_IMAGE_URL" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Market Updates & Insights | WealthTrust Capital" />
    <meta name="twitter:description" content="Stay informed with expert market insights and investment updates from WealthTrust Capital." />
    <meta name="twitter:image" content="OG_IMAGE_URL" />

    <style>
        /* WebKit Browsers (Chrome, Edge, Safari) */
        #pdfList::-webkit-scrollbar {
            width: 8px;
        }

        #pdfList::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 8px;
        }

        #pdfList::-webkit-scrollbar-thumb {
            background-color: #399082;
            border-radius: 8px;
        }
    </style>

</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>

    <div class="hero-section d-flex align-items-center"
        style="background: url('./public/assets/img/mu-bg.png') center/cover no-repeat; min-height: 80vh; border-radius: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <h1 class="fw-bold" style="font-size: 3rem;">Monthly Outlook</h1>
                    <p class="mt-4" style="font-size: 1.2rem;">
                        Provides you with an encompassing view of the current economy, equity and debt markets
                        for the month along with the likely impact on investments.
                    </p>
                    <button id="scrollSubscribe" class="btn btn-success btn-lg rounded-pill mt-3 px-4 shadow">Subscribe</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background: #fcf7f3;">
        <div class="container">
            <div class="row g-4">
                <!-- Latest PDF highlight -->
                <div class="col-lg-8" id="latestPdfBlock">
                    <!-- Latest PDF will be injected here -->
                </div>

                <!-- Sidebar PDFs -->
                <div class="col-lg-4">
                    <div id="pdfList" class="row g-4 justify-content-center overflow-auto"
                        style="max-height: 500px; scrollbar-width: thin; scrollbar-color: #399082 #f1f1f1;">
                        <!-- Older PDFs will be injected here -->
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#scrollSubscribe').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#footer-container').offset().top
                }, 600); // 600ms smooth scroll
            });

            $.getJSON('./api/pdf/get_pdfs.php', function(res) {
                if (res.status === 'success' && res.data.pdfs.length > 0) {
                    const pdfs = res.data.pdfs;
                    const latest = pdfs[0]; // latest comes first (ORDER BY created_at DESC)

                    // --- Latest PDF (big block) ---
                    $('#latestPdfBlock').html(`
                <div class="position-relative" style="background: #eee; min-height: 400px; border-radius: 8px; overflow: hidden;">
                    <img  loading="lazy"src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80"
                        alt="Main news" class="w-100 h-100"
                        style="object-fit: cover; opacity: 0.5; position: absolute; top: 0; left: 0;">
                    <div class="position-relative p-4" style="z-index: 2;">
                        <h2 class="fw-bold mb-3" style="font-size: 2.5rem;">${latest.title}</h2>
                        <p style="font-size: 1.3rem; font-weight: 500;">
                            Published on: ${latest.created_at}
                        </p>
                        <a href="${latest.file_path}" target="_blank" class="btn btn-success btn-lg rounded-pill mt-3 px-4 shadow">
                            View PDF
                        </a>
                    </div>
                </div>
            `);

                    // --- Other PDFs (sidebar) ---
                    let sidebarHtml = '';
                    pdfs.slice(1).forEach(pdf => {
                        sidebarHtml += `
                    <div class="col-12">
                        <div class="border rounded-3 p-3 shadow-sm">
                            <h6 class="fw-bold mb-2" style="color: #399082;">${pdf.title}</h6>
                            <small class="text-muted d-block mb-2">Published: ${pdf.created_at}</small>
                            <a href="${pdf.file_path}" target="_blank" class="btn btn-sm btn-outline-success">View PDF</a>
                        </div>
                    </div>
                `;
                    });

                    $('#pdfList').html(sidebarHtml);
                } else {
                    $('#latestPdfBlock').html('<p class="text-center">No newsletters available.</p>');
                }
            }).fail(() => {
                $('#latestPdfBlock').html('<p class="text-center text-danger">Failed to load PDFs.</p>');
            });
        });
    </script>


</body>

</html>