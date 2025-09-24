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
    <title>View Complaints</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container my-5">
        <h2 class="mb-3">Complaints List</h2>

        <!-- Alert Box -->
        <div id="alertBox"></div>

        <!-- Filters -->
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="filterStatus" class="form-label">Filter by Status:</label>
                <select id="filterStatus" class="form-select">
                    <option value="">All</option>
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Resolved">Resolved</option>
                    <option value="Closed">Closed</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="filterPriority" class="form-label">Filter by Priority:</label>
                <select id="filterPriority" class="form-select">
                    <option value="">All</option>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                    <option value="Critical">Critical</option>
                </select>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle" id="complaintsTable">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Source</th>
                        <th>Complainant</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Assigned To</th>
                        <th>Resolved At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be injected here -->
                </tbody>
            </table>
        </div>

        <a href="add_complaint.php" class="btn btn-success mt-3">Add Complaint</a>
        <a href="dashboard.php" class="btn btn-secondary mt-3">Back</a>
    </div>

    <!-- View/Edit Modal -->
    <div class="modal fade" id="complaintModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Complaint Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="complaintForm">
                        <input type="hidden" id="complaintId" name="id">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" id="complaint_date" name="complaint_date" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" name="source" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Complainant</label>
                                <input type="text" class="form-control" id="complainant_name" name="complainant_name" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Info</label>
                                <input type="text" class="form-control" id="contact_info" name="contact_info" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" name="category" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Priority</label>
                                <select class="form-control" id="priority" name="priority" disabled>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Critical">Critical</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" disabled></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select class="form-control" id="status" name="status" disabled>
                                    <option value="Pending">Pending</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Resolved">Resolved</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Assigned To</label>
                                <input type="text" class="form-control" id="assigned_to" name="assigned_to" disabled>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Resolution Notes</label>
                                <textarea class="form-control" id="resolution_notes" name="resolution_notes" rows="2" disabled></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="saveBtn" class="btn btn-success d-none">Save Changes</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const complaintModal = new bootstrap.Modal(document.getElementById('complaintModal'));

        function loadComplaints() {
            $.ajax({
                url: './../../api/complaints/list.php',
                type: 'GET',
                dataType: "json",
                success: function(data) {
                    if (data.status === 'success') {
                        let rows = "";
                        let complaints = data.data.complaints;

                        // Apply filters
                        const statusFilter = $('#filterStatus').val();
                        const priorityFilter = $('#filterPriority').val();

                        if (statusFilter) {
                            complaints = complaints.filter(c => c.status === statusFilter);
                        }
                        if (priorityFilter) {
                            complaints = complaints.filter(c => c.priority === priorityFilter);
                        }

                        if (complaints.length > 0) {
                            complaints.forEach(c => {
                                rows += `
                            <tr>
                                <td>${c.id}</td>
                                <td>${c.complaint_date}</td>
                                <td>${c.source}</td>
                                <td>${c.complainant_name || '-'}</td>
                                <td>${c.category || '-'}</td>
                                <td>${c.description}</td>
                                <td>${c.priority}</td>
                                <td>${c.status}</td>
                                <td>${c.assigned_to || '-'}</td>
                                <td>${c.resolved_at || '-'}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary me-1" onclick="viewComplaint(${c.id})">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning me-1" onclick="editComplaint(${c.id})">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteComplaint(${c.id})">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                            });
                        } else {
                            rows = `<tr><td colspan="11" class="text-center">No complaints found</td></tr>`;
                        }
                        $("#complaintsTable tbody").html(rows);
                    } else {
                        $('#alertBox').html(`<div class="alert alert-danger">${data.data.message || 'Failed to load complaints'}</div>`);
                    }
                },
                error: function() {
                    $('#alertBox').html('<div class="alert alert-danger">Something went wrong.</div>');
                }
            });
        }


        $(document).ready(function() {
            loadComplaints();

            $('#filterStatus, #filterPriority').on('change', function() {
                loadComplaints();
            });
        });

        // View Complaint
        function viewComplaint(id) {
            $.ajax({
                url: './../../api/complaints/view.php',
                type: 'GET',
                data: {
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    if (data.status === 'success') {
                        let c = data.data;
                        $("#modalTitle").text("View Complaint #" + c.id);
                        fillModalForm(c, true);
                        complaintModal.show();
                    }
                }
            });
        }

        // Edit Complaint
        function editComplaint(id) {
            $.ajax({
                url: './../../api/complaints/view.php',
                type: 'GET',
                data: {
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    if (data.status === 'success') {
                        let c = data.data;
                        $("#modalTitle").text("Edit Complaint #" + c.id);
                        fillModalForm(c, false);
                        complaintModal.show();
                    }
                }
            });
        }

        // Fill form in modal
        function fillModalForm(c, readOnly) {
            $("#complaintId").val(c.id);
            $("#complaint_date").val(c.complaint_date);
            $("#source").val(c.source);
            $("#complainant_name").val(c.complainant_name);
            $("#contact_info").val(c.contact_info);
            $("#category").val(c.category);
            $("#description").val(c.description);
            $("#priority").val(c.priority);
            $("#status").val(c.status);
            $("#assigned_to").val(c.assigned_to);
            $("#resolution_notes").val(c.resolution_notes);

            $("#complaintForm input, #complaintForm textarea, #complaintForm select").prop("disabled", readOnly);

            if (readOnly) {
                $("#editBtn").removeClass("d-none");
                $("#saveBtn").addClass("d-none");
            } else {
                $("#editBtn").addClass("d-none");
                $("#saveBtn").removeClass("d-none");
            }
        }

        // Delete Complaint
        function deleteComplaint(id) {
            if (!confirm("Are you sure you want to delete complaint #" + id + "?")) return;

            $.ajax({
                url: './../../api/complaints/delete.php',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    if (data.status === 'success') {
                        $('#alertBox').html(`<div class="alert alert-success">${data.data.message}</div>`);
                        loadComplaints($('#filterStatus').val());
                    } else {
                        $('#alertBox').html(`<div class="alert alert-danger">${data.data.message || 'Failed to delete complaint'}</div>`);
                    }
                },
                error: function(xhr) {
                    $('#alertBox').html('<div class="alert alert-danger">Something went wrong while deleting.</div>');
                }
            });
        }


        $(document).ready(function() {
            loadComplaints();

            $('#filterStatus').on('change', function() {
                loadComplaints(this.value);
            });

            $("#saveBtn").on("click", function() {
                let formData = $("#complaintForm").serialize();
                $.ajax({
                    url: './../../api/complaints/update.php',
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    success: function(data) {
                        if (data.status === 'success') {
                            $('#alertBox').html(`<div class="alert alert-success">${data.data.message}</div>`);
                            complaintModal.hide();
                            loadComplaints($('#filterStatus').val());
                        } else {
                            $('#alertBox').html(`<div class="alert alert-danger">${data.data.message || 'Update failed'}</div>`);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>