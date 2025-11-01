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
    <title>Upload PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h3>Upload PDF</h3>
            <form id="pdfForm" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Select PDF</label>
                    <input type="file" name="pdf" class="form-control" accept="application/pdf" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
                <div id="alertBox" class="mt-3"></div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#pdfForm").on("submit", function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                url: "./../../api/pdf/upload_pdf.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    $("#alertBox").html(`<div class="alert alert-success">${res.data.message}</div>`);
                    $("#pdfForm")[0].reset();
                },
                error: function(xhr) {
                    $("#alertBox").html(`<div class="alert alert-danger">Upload failed: ${xhr.responseText}</div>`);
                }
            });
        });
    </script>
</body>

</html>