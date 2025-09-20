<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['id'])) {
    echo "Blog ID is required.";
    exit;
}

$blogId = intval($_GET['id']);
include_once "./../../core/config.php";

$stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
$stmt->bind_param("i", $blogId);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

if (!$blog) {
    echo "Blog not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
        .preview-img {
            max-height: 150px;
            margin-top: 10px;
        }
    </style>
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container my-5">
        <h2>Edit Blog (ID: <?= $blogId ?>)</h2>


        <form id="editBlogForm" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $blog['id'] ?>">

            <div class="mb-3">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($blog['title']) ?>" required>
            </div>

            <div class="mb-3">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" value="<?= htmlspecialchars($blog['slug']) ?>" required>
            </div>

            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" id="summernote" required><?= htmlspecialchars($blog['content']) ?></textarea>
            </div>

            <div class="mb-3">
                <label>Current Image:</label><br>
                <?php if ($blog['image_url']): ?>
                    <img src="./../../<?= $blog['image_url'] ?>" class="preview-img mb-2" />
                <?php else: ?>
                    <p>No image uploaded.</p>
                <?php endif; ?>
                <input type="file" class="form-control" name="image" id="image">
                <img id="preview" class="preview-img d-none" />
            </div>

            <div class="mb-3">
                <label>Category</label>
                <input type="text" class="form-control" name="category" value="<?= htmlspecialchars($blog['category']) ?>">
            </div>

            <div class="mb-3">
                <label>Tags</label>
                <input type="text" class="form-control" name="tags" value="<?= htmlspecialchars($blog['tags']) ?>">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="is_published" <?= $blog['is_published'] ? 'checked' : '' ?>>
                <label class="form-check-label">Publish</label>
            </div>

            <div id="alertBox"></div>


            <button type="submit" class="btn btn-primary">Update Blog</button>
            <a href="./list_blog.php" class="btn btn-secondary ms-2">Back</a>
        </form>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <script>
        // Image preview
        $('#image').on('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => $('#preview').attr('src', e.target.result).removeClass('d-none');
                reader.readAsDataURL(file);
            }
        });

        // Form submit (AJAX)
        $('#editBlogForm').on('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            $.ajax({
                url: './../../api/blog/update_blog.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(res) {
                    if (res.status === 'success') {
                        $('#alertBox').html(
                            `<div class="alert alert-success">${res.data.message}</div>`
                        );
                    } else {
                        $('#alertBox').html(
                            `<div class="alert alert-danger">${res.data.message || 'Update failed'}</div>`
                        );
                    }
                },
                error: function(xhr) {
                    $('#alertBox').html(
                        `<div class="alert alert-danger">Update failed. ${xhr.responseText || ''}</div>`
                    );
                }
            });
        });

        // Init Summernote
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Edit blog content...',
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
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
</body>

</html>