<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ./login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container mt-4">
        <h2>All Blogs</h2>
        <div id="alertBox"></div>

        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="blogTableBody"></tbody>
        </table>
    </div>

    <script>
        // Fetch all blogs
        function fetchBlogs() {
            $.ajax({
                url: './../../api/blog/get_blogs.php?admin=1',
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    const blogs = res.data || [];
                    let html = '';

                    if (!blogs.length) {
                        html = '<tr><td colspan="7" class="text-center">No blogs found.</td></tr>';
                    } else {
                        blogs.forEach(blog => {
                            html += `
                                <tr>
                                    <td>${blog.id}</td>
                                    <td>${blog.title}</td>
                                    <td>${blog.slug}</td>
                                    <td>
                                        <span class="badge ${blog.is_published == 1 ? 'bg-success' : 'bg-secondary'}">
                                            ${blog.is_published == 1 ? 'Published' : 'Draft'}
                                        </span>
                                    </td>
                                    <td>${blog.author}</td>
                                    <td>${blog.created_at}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary me-1" onclick="editBlog(${blog.id})">Edit</button>
                                        <button class="btn btn-sm btn-danger" onclick="deleteBlog(${blog.id})">Delete</button>
                                    </td>
                                </tr>`;
                        });
                    }

                    $('#blogTableBody').html(html);
                },
                error: function(xhr) {
                    $('#alertBox').html(
                        `<div class="alert alert-danger">Failed to fetch blogs. ${xhr.responseText || ''}</div>`
                    );
                }
            });
        }

        // Delete blog
        function deleteBlog(id) {
            if (!confirm('Are you sure you want to delete this blog?')) return;

            $.ajax({
                url: './../../api/blog/delete_blog.php',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    if (res.status === 'success') {
                        $('#alertBox').html(
                            `<div class="alert alert-success">${res.data.message}</div>`
                        );
                        fetchBlogs();
                    } else {
                        $('#alertBox').html(
                            `<div class="alert alert-danger">${res.data.message || 'Delete failed'}</div>`
                        );
                    }
                },
                error: function(xhr) {
                    $('#alertBox').html(
                        `<div class="alert alert-danger">Delete failed. ${xhr.responseText || ''}</div>`
                    );
                }
            });
        }


        // Redirect to edit page
        function editBlog(id) {
            window.location.href = `./edit_blog.php?id=${id}`;
        }

        $(document).ready(function() {
            fetchBlogs();
        });
    </script>
</body>

</html>