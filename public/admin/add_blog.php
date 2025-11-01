<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Blog (Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
        .preview-img {
            max-height: 200px;
            margin-top: 10px;
        }
    </style>
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container my-5">
        <h2 class="mb-3">Add New Blog</h2>

        <form id="blogForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug *</label>
                <input type="text" class="form-control" name="slug" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content *</label>
                <textarea class="form-control" name="content" id="summernote" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                <img loading="lazy" id="preview" class="preview-img d-none" />
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" name="category">
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags (comma-separated)</label>
                <input type="text" class="form-control" name="tags">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="is_published" name="is_published" checked>
                <label class="form-check-label" for="is_published">Publish Immediately</label>
            </div>
            <!-- Alert Box -->
            <div id="alertBox"></div>
            <button type="submit" class="btn btn-success">Submit Blog</button>
            <a href="dashboard.php" class="btn btn-secondary ms-2">Back</a>
        </form>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <script>
        // Show image preview
        $('#image').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result).removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });

        // AJAX form submission
        $('#blogForm').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: './../../api/blog/submit_blog.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    if (data.status === 'success') {
                        $('#alertBox').html(
                            `<div class="alert alert-success">${data.data.message}</div>`
                        );
                        $('#blogForm')[0].reset();
                        $('#summernote').summernote('reset');
                        $('#preview').addClass('d-none');
                    } else {
                        $('#alertBox').html(
                            `<div class="alert alert-danger">${data.data.message || 'Failed to add blog'}</div>`
                        );
                    }
                },
                error: function(xhr) {
                    $('#alertBox').html('<div class="alert alert-danger">Something went wrong.</div>');
                    console.error("Error response:", xhr.responseText);
                }
            });

        });

        // Init Summernote
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write blog content here...',
                height: 300,
                tabsize: 2,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['table', ['table']],
                    ['view', ['codeview', 'help']]
                ],
                fontNames: ['Arial', 'Roboto', 'Times New Roman', 'Open Sans', 'Courier New'],
                fontSizes: ['8', '10', '12', '14', '16', '18', '24', '36', '48'],
                dialogsInBody: true
            });
        });
    </script>
</body>

</html>