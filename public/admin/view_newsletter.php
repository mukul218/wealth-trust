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
    <title>Newsletter Subscribers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">

    <?php include_once "./component/navbar.php"; ?>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-4">Newsletter Subscribers</h3>
                <div id="alertBox"></div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Subscribed At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="subscriberTableBody">
                            <tr>
                                <td colspan="5" class="text-center">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fetchSubscribers() {
            $.getJSON('./../../api/newsletter/get_subscribers.php', function(res) {
                let html = '';
                if (res.status === 'success' && res.data.subscribers.length > 0) {
                    res.data.subscribers.forEach(s => {
                        html += `
                    <tr>
                        <td>${s.id}</td>
                        <td><a href="mailto:${s.email}" class="text-decoration-none">${s.email}</a></td>
                        <td>
                            <span class="badge ${s.is_active == 1 ? 'bg-success' : 'bg-secondary'}">
                                ${s.is_active == 1 ? 'Active' : 'Inactive'}
                            </span>
                        </td>
                        <td>${s.created_at}</td>
                        <td>
                            <button class="btn btn-sm btn-warning me-1" onclick="toggleActive(${s.id}, ${s.is_active})">
                                ${s.is_active == 1 ? 'Deactivate' : 'Activate'}
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteSubscriber(${s.id})">
                                Delete
                            </button>
                        </td>
                    </tr>`;
                    });
                } else {
                    html = '<tr><td colspan="5" class="text-center">No subscribers found.</td></tr>';
                }
                $('#subscriberTableBody').html(html);
            }).fail(() => {
                $('#subscriberTableBody').html('<tr><td colspan="5" class="text-center text-danger">Failed to load subscribers.</td></tr>');
            });
        }

        function deleteSubscriber(id) {
            if (!confirm('Are you sure you want to delete this subscriber?')) return;

            $.post('./../../api/newsletter/delete_subscriber.php', {
                id
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchSubscribers();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json').fail(() => {
                $('#alertBox').html('<div class="alert alert-danger">Delete failed.</div>');
            });
        }

        function toggleActive(id, currentStatus) {
            const newStatus = currentStatus == 1 ? 0 : 1;

            $.post('./../../api/newsletter/toggle_active.php', {
                id,
                status: newStatus
            }, function(res) {
                if (res.status === 'success') {
                    $('#alertBox').html(`<div class="alert alert-success">${res.data.message}</div>`);
                    fetchSubscribers();
                } else {
                    $('#alertBox').html(`<div class="alert alert-danger">${res.data.message}</div>`);
                }
            }, 'json').fail(() => {
                $('#alertBox').html('<div class="alert alert-danger">Update failed.</div>');
            });
        }

        $(document).ready(fetchSubscribers);
    </script>

</body>

</html>n