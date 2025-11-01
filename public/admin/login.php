<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-box {
            margin-top: 10%;
        }

        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container login-box">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h3 class="text-center mb-4">Admin Login</h3>
                    <div id="alertBox"></div>
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required />
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">Show</button>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Toggle password visibility
        $('#togglePassword').on('click', function() {
            const passInput = $('#password');
            const type = passInput.attr('type') === 'password' ? 'text' : 'password';
            passInput.attr('type', type);
            $(this).text(type === 'password' ? 'Show' : 'Hide');
        });

        // Submit form via AJAX
        // Submit form via AJAX
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: './../../api/auth/admin_login.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res) {
                    console.log("RAW RESPONSE:", res);

                    // If res is a string, parse it
                    if (typeof res === 'string') {
                        try {
                            res = JSON.parse(res);
                        } catch (e) {
                            $('#alertBox').html('<div class="alert alert-danger">Invalid JSON response.</div>');
                            return;
                        }
                    }

                    const msg = res.data && res.data.message ? res.data.message : 'Unexpected response';

                    if (res.status === 'success') {
                        $('#alertBox').html(`<div class="alert alert-success">${msg}</div>`);
                        setTimeout(() => {
                            window.location.href = 'dashboard.php';
                        }, 1500);
                    } else {
                        $('#alertBox').html(`<div class="alert alert-danger">${msg}</div>`);
                    }
                },

                error: function(xhr) {
                    $('#alertBox').html(
                        `<div class="alert alert-danger">Server Error: ${xhr.responseText || ''}</div>`
                    );
                }
            });
        });
    </script>
</body>

</html>