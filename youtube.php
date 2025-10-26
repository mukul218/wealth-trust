<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo tag -->
    <meta name="description" content="Watch educational videos by WealthTrust Capital on mutual funds, financial planning, and responsible investing. Informational content only.">
    <meta name="keywords" content="financial education, mutual fund insights, investment awareness, investor learning">
    <title>WealthTrust Capital YouTube | Financial Education & Insights</title>

    <link rel="canonical" href="https://www.wealthtrustcap.com/youtube" />

    <meta property="og:title" content="WealthTrust Capital YouTube | Financial Insights & Education" />
    <meta property="og:description" content="Watch expert videos on investments, mutual funds, and financial planning by WealthTrust Capital." />
    <meta property="og:url" content="https://www.wealthtrustcap.com/youtube" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="OG_IMAGE_URL" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="WealthTrust Capital YouTube | Financial Insights & Education" />
    <meta name="twitter:description" content="Watch expert videos on investments, mutual funds, and financial planning by WealthTrust Capital." />
    <meta name="twitter:image" content="OG_IMAGE_URL" />

    <?php
    include_once './includes/css-lib.php'
    ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "WealthTrust Capital YouTube Channel",
            "description": "Watch expert financial insights and investment tutorials 
            from WealthTrust Capital.
            ",
            4 "url": "https://www.wealthtrustcap.com/youtube"
        }
    </script>
</head>

<body>

    <!-- include nav -->
    <?php include_once 'includes/header.php'; ?>

    <!-- VIDEOS -->
    <section class="hero-section" style="background-color:#fcf8f5;">
        <div class="container">
            <h2 class="section-title text-center fw-bold mb-4">
                <span class="text-dark">Latest</span> <span class="text-primary">YouTube Videos</span>
            </h2>
            <p class="text-center mb-5">Insights, ideas, and explainers to help you invest smarter.</p>

            <div class="row g-4" id="videoList"></div>

            <!-- Empty/Fallback -->
            <div id="noVideos" class="text-center d-none">No videos available at the moment.</div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadVideos() {
            $.getJSON('./api/video/get_videos.php', function(res) {
                if (res.status === 'success' && res.data.videos.length > 0) {
                    $('#noVideos').addClass('d-none');
                    let html = '';
                    res.data.videos.forEach(video => {
                        html += `
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="${video.url}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">${video.title}</h5>
                                        <p class="card-text">${video.description ?? ''}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    $('#videoList').html(html);
                } else {
                    $('#noVideos').removeClass('d-none');
                }
            }).fail(() => {
                $('#noVideos').removeClass('d-none').text('Failed to load videos.');
            });
        }

        $(document).ready(loadVideos);
    </script>
</body>

</html>