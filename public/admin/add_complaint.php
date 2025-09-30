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
    <title>Add Complaint (Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container my-5">
        <h2 class="mb-3">Add New Complaint</h2>

        <form id="complaintForm">
            <div class="mb-3">
                <label for="complaint_date" class="form-label">Complaint Date *</label>
                <input type="date" class="form-control" name="complaint_date" required>
            </div>

            <div class="mb-3">
                <label for="source" class="form-label">Source *</label>
                <select class="form-control" name="source" required>
                    <option value="Investors">Investors</option>
                    <option value="SEBI (Scores)">SEBI (Scores)	</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="complainant_name" class="form-label">Complainant Name</label>
                <input type="text" class="form-control" name="complainant_name" placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label for="contact_info" class="form-label">Contact Info</label>
                <input type="text" class="form-control" name="contact_info" placeholder="Email or Phone">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" name="category" placeholder="e.g. Billing, HR, Product Quality">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description *</label>
                <textarea class="form-control" name="description" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="priority" class="form-label">Priority *</label>
                <select class="form-control" name="priority" required>
                    <option value="Low">Low</option>
                    <option value="Medium" selected>Medium</option>
                    <option value="High">High</option>
                    <option value="Critical">Critical</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status *</label>
                <select class="form-control" name="status" required>
                    <option value="Pending" selected>Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Resolved">Resolved</option>
                    <option value="Closed">Closed</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="assigned_to" class="form-label">Assigned To</label>
                <input type="text" class="form-control" name="assigned_to" placeholder="Staff handling the complaint">
            </div>

            <div class="mb-3">
                <label for="resolution_notes" class="form-label">Resolution Notes</label>
                <textarea class="form-control" name="resolution_notes" rows="3" placeholder="Notes on resolution"></textarea>
            </div>

            <!-- Alert Box -->
            <div id="alertBox"></div>

            <button type="submit" class="btn btn-success">Submit Complaint</button>
            <a href="dashboard.php" class="btn btn-secondary ms-2">Back</a>
        </form>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // AJAX form submission
        $('#complaintForm').on('submit', function(e) {
            e.preventDefault();

            const formData = $(this).serialize();

            $.ajax({
                url: './../../api/complaints/add.php',
                type: 'POST',
                data: formData,
                dataType: "json",
                success: function(data) {
                    if (data.status === 'success') {
                        $('#alertBox').html(
                            `<div class="alert alert-success">${data.data.message}</div>`
                        );
                        $('#complaintForm')[0].reset();
                    } else {
                        $('#alertBox').html(
                            `<div class="alert alert-danger">${data.data.message || 'Failed to add complaint'}</div>`
                        );
                    }
                },
                error: function(xhr) {
                    $('#alertBox').html('<div class="alert alert-danger">Something went wrong.</div>');
                    console.error("Error response:", xhr.responseText);
                }
            });

        });
    </script>
</body>

</html>