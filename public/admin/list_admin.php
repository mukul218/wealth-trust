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
    <meta charset="UTF-8" />
    <title>Manage Admins</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Admin Management</h2>
        <div id="alertBox"></div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="adminTableBody">
                <tr>
                    <td colspan="4" class="text-center">Loading...</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fetch admins
        function fetchAdmins() {
            $.getJSON('./../../api/admin/get_admins.php', function(res) {
                let html = '';
                if (res.status === 'success' && res.data.admins.length > 0) {
                    res.data.admins.forEach(admin => {
                        html += `
                            <tr>
                                <td>${admin.id}</td>
                                <td>${admin.username}</td>
                                <td>${admin.created_at ?? ''}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger" onclick="deleteAdmin(${admin.id})">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        `;
                    });
                } else {
                    html = '<tr><td colspan="4" class="text-center">No admins found.</td></tr>';
                }
                $('#adminTableBody').html(html);
            }).fail(() => {
                $('#adminTableBody').html('<tr><td colspan="4" class="text-center text-danger">Failed to load admins.</td></tr>');
            });
        }

        // Delete admin
        function deleteAdmin(id) {
            if (!confirm('Are you sure you want to delete this admin?')) return;

            $.post('./../../api/admin/delete_admin.php', {
                id: id
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchAdmins();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json').fail(xhr => {
                $('#alertBox').html(`<div class="alert alert-danger">Delete failed. ${xhr.responseText || ''}</div>`);
            });
        }

        $(document).ready(fetchAdmins);
    </script>

</body>

</html>