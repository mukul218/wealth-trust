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
    <title>Add Admin</title>
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
                <h3 class="mb-4">Add New Admin</h3>
                <div id="alertBox"></div>

                <form id="addAdminForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username *</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password *</label>
                        <input type="password" class="form-control" name="confirm_password" required>
                    </div>

                    <button type="submit" class="btn btn-success">Add Admin</button>
                    <a href="dashboard.php" class="btn btn-secondary ms-2">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#addAdminForm').on('submit', function(e) {
            e.preventDefault();

            const formData = $(this).serialize();

            $.ajax({
                url: './../../api/admin/add_admin.php', // backend endpoint
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(res) {
                    if (res.status === 'success') {
                        $('#alertBox').html(
                            `<div class="alert alert-success">${res.data.message}</div>`
                        );
                        $('#addAdminForm')[0].reset();
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