<?php
require 'db_connection.php';

$carId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT id, name, image_url, details_page FROM cars WHERE id = ? LIMIT 1");
$stmt->execute([$carId]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Details for <?= $row ? htmlspecialchars($row['name']) : 'Car Not Found' ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if ($row): ?>
        <div class="details-container">
            <h1><?= htmlspecialchars($row['name']) ?></h1>
            <img src="<?= htmlspecialchars($row['image_url']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
            <div><?= $row['details_page'] ?></div>
        </div>
    <?php else: ?>
        <p>Car not found.</p>
    <?php endif; ?>
</body>

</html>