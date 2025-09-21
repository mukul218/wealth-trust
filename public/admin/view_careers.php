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
    <title>View Career Requests</title>
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
                <h3 class="mb-4">Career Requests</h3>
                <div id="alertBox"></div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Description</th>
                                <th>Resume</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="careerTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fetchCareers() {
            $.getJSON('./../../api/careers/get_career_requests.php', function(res) {
                let html = '';
                if (res.status === 'success' && res.data.data.length > 0) {
                    res.data.data.forEach(c => {
                        html += `
                        <tr>
                            <td>${c.id}</td>
                            <td>${c.full_name}</td>
                            <td><a href="mailto:${c.email}" class="text-decoration-none">${c.email}</a></td>
                            <td><a href="tel:${c.contact}" class="text-decoration-none">${c.contact}</a></td>
                            <td>${c.description}</td>
                            <td>
                                ${c.resume ? `<a href="${c.resume}" target="_blank" class="btn btn-sm btn-info">View Resume</a>` : '—'}
                            </td>
                            <td>${c.created_at}</td>
                            <td>
                                <button class="btn btn-sm btn-danger" onclick="deleteCareer(${c.id})">
                                    Delete
                                </button>
                            </td>
                        </tr>`;
                    });
                } else {
                    html = '<tr><td colspan="8" class="text-center">No career requests found.</td></tr>';
                }
                $('#careerTableBody').html(html);
            }).fail(() => {
                $('#careerTableBody').html('<tr><td colspan="8" class="text-center text-danger">Failed to load career requests.</td></tr>');
            });
        }

        function deleteCareer(id) {
            if (!confirm('Are you sure you want to delete this application?')) return;

            $.post('./../../api/careers/delete_career.php', {
                id
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchCareers();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json').fail(() => {
                $('#alertBox').html('<div class="alert alert-danger">Delete failed.</div>');
            });
        }

        $(document).ready(fetchCareers);
    </script>

</body>

</html>