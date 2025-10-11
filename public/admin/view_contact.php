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
    <title>View Contact Requests</title>
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
                <h3 class="mb-4">Contact Requests</h3>
                <div id="alertBox"></div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="contactTableBody">

                        <tbody id="contactTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fetchContacts() {
            $.getJSON('./../../api/contact/get_contacts.php', function(res) {

                console.log(res);

                let html = '';
                if (res.status === 'success' && res.data.contacts.length > 0) {
                    res.data.contacts.forEach(c => {
                        html += `
                <tr>
                    <td>${c.id}</td>
                    <td>${c.full_name}</td>
                    <td><a href="mailto:${c.email}" class="text-decoration-none">${c.email}</a></td>
                    <td><a href="tel:${c.contact}" class="text-decoration-none">${c.contact}</a></td>
                    <td>${c.message}</td>
                    <td>${c.created_at}</td>
                    <td>
                        <span class="badge ${c.is_read == 1 ? 'bg-success' : 'bg-secondary'}">
                            ${c.is_read == 1 ? 'Read' : 'Unread'}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning me-1" onclick="toggleRead(${c.id}, ${c.is_read})">
                            ${c.is_read == 1 ? 'Mark Unread' : 'Mark Read'}
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="deleteContact(${c.id})">
                            Delete
                        </button>
                    </td>
                </tr>`;
                    });
                } else {
                    html = '<tr><td colspan="8" class="text-center">No contact requests found.</td></tr>';
                }
                $('#contactTableBody').html(html);
            }).fail(() => {
                $('#contactTableBody').html('<tr><td colspan="8" class="text-center text-danger">Failed to load contacts.</td></tr>');
            });
        }

        function deleteContact(id) {
            if (!confirm('Are you sure you want to delete this request?')) return;

            $.post('./../../api/contact/delete_contact.php', {
                id
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchContacts();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json').fail(() => {
                $('#alertBox').html('<div class="alert alert-danger">Delete failed.</div>');
            });
        }

        function toggleRead(id, currentStatus) {
            const newStatus = currentStatus == 1 ? 0 : 1;

            $.post('./../../api/contact/toggle_read.php', {
                id,
                status: newStatus
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchContacts();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json').fail(() => {
                $('#alertBox').html('<div class="alert alert-danger">Update failed.</div>');
            });
        }

        $(document).ready(fetchContacts);
    </script>

</body>

</html>