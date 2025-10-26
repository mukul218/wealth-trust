<?php
if (!isset($_GET['slug'])) {
    echo "No blog selected.";
    exit;
}

$slug = $_GET['slug'];
include_once "./core/config.php";

$stmt = $conn->prepare("SELECT * FROM blogs WHERE slug = ? AND is_published = 1");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

if (!$blog) {
    echo "Blog not found or unpublished.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($blog['title']) ?></title>
    <?php
    include_once './includes/css-lib.php'
    ?>
</head>

<body class="bg-light">

    <!-- include nav -->
    <?php
    include_once 'includes/header.php';
    ?>
    <div class="container mt-5 hero-section">
        <h2><?= htmlspecialchars($blog['title']) ?></h2>
        <p class="text-muted">By <?= htmlspecialchars($blog['author']) ?> on <?= date("d M Y", strtotime($blog['created_at'])) ?></p>

        <?php if ($blog['image_url']): ?>
            <img loading="lazy" src="<?= $blog['image_url'] ?>" class="img-fluid mb-4" alt="<?= $blog['title'] ?>">
        <?php endif; ?>

        <div><?= $blog['content'] ?></div>

        <p class="mt-4">
            <strong>Category:</strong> <?= htmlspecialchars($blog['category']) ?><br>
            <strong>Tags:</strong> <?= htmlspecialchars($blog['tags']) ?>
        </p>

        <a href="blogs.php" class="btn btn-secondary mt-3">← Back to Blog List</a>
    </div>

    <!-- Footer Section (from previous response) -->
    <?php
    include_once 'includes/footer.php';
    ?>
</body>

</html>