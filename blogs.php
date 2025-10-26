<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo tag -->
    <meta name="description" content="Explore financial planning and investment awareness articles. WealthTrust Capital shares research-backed educational content for informed investors.">
    <meta name="keywords" content="financial blogs, investment awareness, mutual fund education, personal finance tips">
    <title>WealthTrust Capital Blog | Financial Awareness & Investment Insights</title>

    <link rel="canonical" href="https://www.wealthtrustcap.com/blogs" />

    <meta property="og:title" content="WealthTrust Capital Blog | Investment Insights & Financial Tips" />
    <meta property="og:description" content="Explore blogs on mutual funds, market updates, and wealth management strategies to make smarter financial decisions." />
    <meta property="og:url" content="https://www.wealthtrustcap.com/blogs" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="OG_IMAGE_URL" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="WealthTrust Capital Blog | Investment Insights & Financial Tips" />
    <meta name="twitter:description" content="Explore blogs on mutual funds, market updates, and wealth management strategies." />
    <meta name="twitter:image" content="OG_IMAGE_URL" />

    <?php
    include_once './includes/css-lib.php'
    ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Blog",
            "name": "WealthTrust Capital Blog",
            "url": "https://www.wealthtrustcap.com/blogs",
            "description": "Expert insights on investments, market trends, and 
            financial planning strategies.
            ",
            "publisher": {
                "@type": "Organization",
                "name": "WealthTrust Capital",
                "url": "https://www.wealthtrustcap.com"
            }
        }
    </script>
</head>

<body>

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>

    <!-- BLOGS -->
    <section class="hero-section" style="background-color:#fcf8f5;">
        <div class="container">
            <h2 class="section-title text-center fw-bold mb-4">
                <span class=" text-dark">Latest</span> <span class="text-primary">Blogs</span>
            </h2>
            <p class="text-center mb-5">Insights, ideas, and explainers to help you invest smarter.</p>

            <div class="row g-4" id="blogList"></div>

            <!-- Empty/Fallback -->
            <div id="noBlogs" class="text-center d-none">No blogs available at the moment.</div>
        </div>
    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $.getJSON('./api/blog/get_blogs.php', function(res) {
                const blogs = (res && res.data) ? res.data : [];
                const $list = $('#blogList');
                const $fallback = $('#noBlogs');

                if (!blogs.length) {
                    $fallback.removeClass('d-none');
                    return;
                }

                const truncate = (html, n = 140) => {
                    const tmp = document.createElement('div');
                    tmp.innerHTML = html || '';
                    const text = (tmp.textContent || tmp.innerText || '').trim();
                    return text.length > n ? text.slice(0, n).trim() + '…' : text;
                };

                const fmtDate = (d) => {
                    try {
                        return new Date(d).toLocaleDateString('en-IN', {
                            day: '2-digit',
                            month: 'short',
                            year: 'numeric'
                        });
                    } catch (e) {
                        return '';
                    }
                };

                blogs.forEach(b => {
                    const title = (b.title || 'Untitled').toString();
                    const slug = encodeURIComponent(b.slug || '');
                    const excerpt = truncate(b.content || '', 140);
                    const when = fmtDate(b.created_at);

                    const thumb = b.image_url ?
                        `<div class="blog-thumb"><img  loading="lazy"src="${b.image_url}" alt="${title}"></div>` :
                        `<div class="blog-thumb"><div class="thumb-fallback">BLOG</div></div>`;

                    const card = `
          <div class="col-md-6 col-lg-4 d-flex">
            <article class="blog-card w-100">
              ${thumb}
              <div class="blog-body">
                <h5 class="blog-title">${title}</h5>
                <p class="blog-excerpt">${excerpt}</p>

                <div class="blog-meta">
                  <span class="blog-date">${when}</span>
                  <a href="blog-detail.php?slug=${slug}" class="btn btn-outline-primary blog-read">Read More</a>
                </div>
              </div>
            </article>
          </div>
        `;

                    $list.append(card);
                });
            });
        });
    </script>

</body>

</html>