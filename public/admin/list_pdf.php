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
    <title>Manage PDFs</title>
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
                <h3 class="mb-4">Uploaded PDFs</h3>
                <div id="alertBox"></div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="pdfTableBody">
                            <tr>
                                <td colspan="6" class="text-center">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function fetchPDFs() {
            $.getJSON('./../../api/pdf/get_pdfs.php', function(res) {
                let html = '';
                if (res.status === 'success' && res.data.pdfs.length > 0) {
                    res.data.pdfs.forEach(pdf => {
                        html += `
                            <tr>
                                <td>${pdf.id}</td>
                                <td>${pdf.title}</td>
                                <td><a href="./../../${pdf.file_path}" target="_blank">Download</a></td>
                                <td>
                                    <span class="badge ${pdf.is_published == 1 ? 'bg-success' : 'bg-secondary'}">
                                        ${pdf.is_published == 1 ? 'Published' : 'Unpublished'}
                                    </span>
                                </td>
                                <td>${pdf.created_at}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1" onclick="togglePublish(${pdf.id}, ${pdf.is_published})">
                                        ${pdf.is_published == 1 ? 'Unpublish' : 'Publish'}
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="deletePDF(${pdf.id})">Delete</button>
                                </td>
                            </tr>
                        `;
                    });
                } else {
                    html = '<tr><td colspan="6" class="text-center">No PDFs found.</td></tr>';
                }
                $('#pdfTableBody').html(html);
            }).fail(() => {
                $('#pdfTableBody').html('<tr><td colspan="6" class="text-center text-danger">Failed to load PDFs.</td></tr>');
            });
        }

        function togglePublish(id, currentStatus) {
            $.post('./../../api/pdf/toggle_publish.php', {
                id: id,
                status: currentStatus
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchPDFs();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json');
        }

        function deletePDF(id) {
            if (!confirm('Are you sure you want to delete this PDF?')) return;
            $.post('./../../api/pdf/delete_pdf.php', {
                id: id
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchPDFs();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json');
        }

        $(document).ready(fetchPDFs);
    </script>
</body>

</html>