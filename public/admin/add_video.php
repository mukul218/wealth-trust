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
    <title>Add YouTube Video</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">

    <?php include_once "./component/navbar.php"; ?>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-4">Add YouTube Video</h3>
                <div id="alertBox"></div>

                <form id="addVideoForm">
                    <div class="mb-3">
                        <label for="title" class="form-label">Video Title *</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">YouTube URL *</label>
                        <input type="url" class="form-control" name="url" placeholder="https://www.youtube.com/watch?v=..." required>
                        <div class="form-text">Paste the full YouTube link, we'll store the embed code automatically.</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Add Video</button>
                    <a href="dashboard.php" class="btn btn-secondary ms-2">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#addVideoForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: './../../api/video/add_video.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res) {
                    if (res.status === 'success') {
                        $('#alertBox').html(
                            `<div class="alert alert-success">${res.data.message}</div>`
                        );
                        $('#addVideoForm')[0].reset();
                    } else {
                        $('#alertBox').html(
                            `<div class="alert alert-danger">${res.data.message}</div>`
                        );
                    }
                },
                error: function(xhr) {
                    let msg = "Server error";
                    try {
                        const res = JSON.parse(xhr.responseText);
                        msg = res.data?.message || msg;
                    } catch (e) {}
                    $('#alertBox').html(`<div class="alert alert-danger">${msg}</div>`);
                }
            });
        });
    </script>

</body>

</html>