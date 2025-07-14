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

    <!-- BLOG SECTION -->
    <section class="py-5" style="background-color: #fcf8f5;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">BLOGS</h2>

            <div class="row g-4" id="blogList">
                <!-- Dynamic blog cards will be appended here -->
            </div>

            <div id="noBlogs" class="text-center text-muted d-none">No blogs available at the moment.</div>
        </div>
    </section>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.getJSON('./functions/get_blogs.php', function(res) {
                const blogs = res.data;
                const container = $('#blogList');
                const fallback = $('#noBlogs');

                if (blogs.length === 0) {
                    fallback.removeClass('d-none');
                    return;
                }

                blogs.forEach(blog => {
                    
                    const imageHTML = blog.image_url ?
                        `<img src="${blog.image_url}" class="card-img-top" alt="${blog.title}">` :
                        `<div class="bg-light d-flex align-items-center justify-content-center" style="height:200px;">No Image</div>`;

                    const card = `
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="ratio ratio-4x3">${imageHTML}</div>
              <div class="card-body">
                <h5 class="card-title fw-bold">${blog.title}</h5>
                <p class="card-text">${blog.content.substring(0, 100)}...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-success fw-semibold">${new Date(blog.created_at).toLocaleDateString()}</small>
                  <a href="blog-detail.php?slug=${blog.slug}" class="btn btn-sm btn-outline-success">View More</a>
                </div>
              </div>
            </div>
          </div>
        `;
                    container.append(card);
                });
            });
        });
    </script>

</body>

</html>