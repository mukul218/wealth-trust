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
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Admin Navbar -->
    <?php include_once "./component/navbar.php"; ?>

    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h3 class="mb-3">Welcome, <span class="text-primary"><?= $_SESSION['admin'] ?></span></h3>
                <p class="lead">This is your admin dashboard. From here you can manage blogs, monitor updates, and more.</p>

                <hr>

                <div class="row g-4 mt-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-plus-circle-fill text-primary fs-1 mb-3"></i>
                                <h5 class="card-title">Add New Blog</h5>
                                <a href="add_blog.php" class="btn btn-outline-primary btn-sm mt-2">Add Blog</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-list-ul text-success fs-1 mb-3"></i>
                                <h5 class="card-title">View Blogs</h5>
                                <a href="list_blog.php" class="btn btn-outline-success btn-sm mt-2">List Blogs</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-box-arrow-right text-danger fs-1 mb-3"></i>
                                <h5 class="card-title">Logout</h5>
                                <a href="logout.php" class="btn btn-outline-danger btn-sm mt-2">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>