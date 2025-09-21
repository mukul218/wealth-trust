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
    <title>Manage YouTube Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">
    <?php include_once "./component/navbar.php"; ?>

    <div class="container mt-4">
        <h2 class="mb-3">Manage YouTube Videos</h2>
        <div id="alertBox"></div>

        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="videoTableBody"></tbody>
        </table>
    </div>

    <script>
        function fetchVideos() {
            $.post('./../../api/video/get_videos.php', {
                    admin: 1
                }, function(res) {
                    let html = '';

                    if (res.status === 'success' && res.data.videos.length > 0) {
                        res.data.videos.forEach(video => {
                            html += `
                    <tr>
                        <td>${video.id}</td>
                        <td>${video.title}</td>
                        <td><a href="${video.url}" target="_blank">${video.url}</a></td>
                        <td>
                            <span class="badge ${video.is_published == 1 ? 'bg-success' : 'bg-secondary'}">
                                ${video.is_published == 1 ? 'Published' : 'Unpublished'}
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning me-1" onclick="togglePublish(${video.id}, ${video.is_published})">
                                ${video.is_published == 1 ? 'Unpublish' : 'Publish'}
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteVideo(${video.id})">
                                Delete
                            </button>
                        </td>
                    </tr>`;
                        });
                    } else {
                        html = '<tr><td colspan="5" class="text-center">No videos found.</td></tr>';
                    }

                    $('#videoTableBody').html(html);
                }, 'json')
                .fail(() => {
                    $('#videoTableBody').html('<tr><td colspan="5" class="text-center text-danger">Failed to load videos.</td></tr>');
                });
        }

        function togglePublish(id, currentStatus) {
            const newStatus = currentStatus == 1 ? 0 : 1;
            $.post('./../../api/video/toggle_publish.php', {
                id,
                status: newStatus
            }, function(res) {
                $('#alertBox').html(`<div class="alert alert-${res.status === 'success' ? 'success' : 'danger'}">${res.data.message}</div>`);
                fetchVideos();
            }, 'json');
        }

        function deleteVideo(id) {
            if (!confirm("Are you sure you want to delete this video?")) return;
            $.post('./../../api/video/delete_video.php', {
                id
            }, function(res) {
                $('#alertBox').html(`<div class="alert alert-${res.status === 'success' ? 'success' : 'danger'}">${res.data.message}</div>`);
                fetchVideos();
            }, 'json');
        }

        function editVideo(id, title, description, url) {
            const newTitle = prompt("Edit Title:", title);
            if (newTitle === null) return;
            const newDesc = prompt("Edit Description:", description);
            if (newDesc === null) return;
            const newUrl = prompt("Edit URL:", url);
            if (newUrl === null) return;

            $.post('./../../api/video/edit_video.php', {
                id,
                title: newTitle,
                description: newDesc,
                url: newUrl
            }, function(res) {
                $('#alertBox').html(`<div class="alert alert-${res.status === 'success' ? 'success' : 'danger'}">${res.data.message}</div>`);
                fetchVideos();
            }, 'json');
        }

        $(document).ready(fetchVideos);
    </script>
</body>

</html>