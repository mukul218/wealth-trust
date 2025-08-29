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
                <span class=" text-dark">Latest</span> <span class="text-primary">YouTube Video</span>
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
    <!-- <script>
        $(function() {
            $.getJSON('./functions/get_blogs.php', function(res) {
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
                        `<div class="blog-thumb"><img src="${b.image_url}" alt="${title}"></div>` :
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
    </script> -->

</body>

</html>