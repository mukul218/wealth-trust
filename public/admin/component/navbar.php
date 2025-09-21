<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-uppercase" href="dashboard.php">
            <i class="bi bi-speedometer2 me-2"></i>Admin Panel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link px-3" href="dashboard.php">
                        <i class="bi bi-house-door-fill me-1"></i>Dashboard
                    </a>
                </li>

                <!-- Blogs -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="blogsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-journal-text me-1"></i>Blogs
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="blogsDropdown">
                        <li><a class="dropdown-item" href="add_blog.php"><i class="bi bi-plus-square me-1"></i>Add Blog</a></li>
                        <li><a class="dropdown-item" href="list_blog.php"><i class="bi bi-list-ul me-1"></i>List Blogs</a></li>
                    </ul>
                </li>

                <!-- Admins -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="adminsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-people-fill me-1"></i>Admins
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="adminsDropdown">
                        <li><a class="dropdown-item" href="add_admin.php"><i class="bi bi-person-plus-fill me-1"></i>Add Admin</a></li>
                        <li><a class="dropdown-item" href="list_admin.php"><i class="bi bi-list-check me-1"></i>List Admins</a></li>
                    </ul>
                </li>

                <!-- YouTube -->
                <li class="nav-item">
                    <a class="nav-link px-3" href="list_video.php">
                        <i class="bi bi-youtube me-1"></i>YouTube Videos
                    </a>
                </li>

                <!-- Contacts -->
                <li class="nav-item">
                    <a class="nav-link px-3" href="view_contact.php">
                        <i class="bi bi-envelope-fill me-1"></i>Contacts
                    </a>
                </li>

                <!-- Subscribers -->
                <li class="nav-item">
                    <a class="nav-link px-3" href="view_newsletter.php">
                        <i class="bi bi-newspaper me-1"></i>Subscribers
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a class="nav-link px-3 text-danger" href="logout.php">
                        <i class="bi bi-box-arrow-right me-1"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>