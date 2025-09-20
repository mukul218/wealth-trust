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
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?php include_once "./component/navbar.php"; ?>

    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h3 class="mb-3">Welcome, <span class="text-primary"><?= $_SESSION['admin'] ?></span></h3>
                <p class="lead">This is your admin dashboard. Manage blogs, admins, videos, contact requests, and newsletters.</p>
                <hr>

                <div class="row g-4 mt-4">

                    <!-- Blogs -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-journal-text text-primary fs-1 mb-3"></i>
                                <h5 class="card-title">Blogs</h5>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="add_blog.php" class="btn btn-outline-primary btn-sm">Add Blog</a>
                                    <a href="list_blog.php" class="btn btn-outline-secondary btn-sm">View Blogs</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Admins -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-people-fill text-warning fs-1 mb-3"></i>
                                <h5 class="card-title">Admins</h5>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="add_admin.php" class="btn btn-outline-warning btn-sm">Add Admin</a>
                                    <a href="list_admin.php" class="btn btn-outline-secondary btn-sm">View Admins</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YouTube Videos -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-youtube text-danger fs-1 mb-3"></i>
                                <h5 class="card-title">YouTube Videos</h5>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="add_video.php" class="btn btn-outline-danger btn-sm">Add Video</a>
                                    <a href="list_videos.php" class="btn btn-outline-secondary btn-sm">Manage Videos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Requests -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-envelope-fill text-info fs-1 mb-3"></i>
                                <h5 class="card-title">Contact Requests</h5>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="view_contact.php" class="btn btn-outline-info btn-sm">View Requests</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-newspaper text-secondary fs-1 mb-3"></i>
                                <h5 class="card-title">Newsletter</h5>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="view_newsletter.php" class="btn btn-outline-secondary btn-sm">View Subscribers</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Logout -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-box-arrow-right text-danger fs-1 mb-3"></i>
                                <h5 class="card-title">Logout</h5>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- /row -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>