<?php
require 'db_connection.php';

$query = "SELECT id, name, image_url, details_page FROM cars";
$stmt = $pdo->query($query);
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Cars</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>All Cars</h1>

    <?php if (!empty($cars)): ?>
        <?php foreach ($cars as $car): ?>
            <div class="car-container">
                <h2><?= htmlspecialchars($car['name']) ?></h2>
                <img src="<?= htmlspecialchars($car['image_url']) ?>" alt="<?= htmlspecialchars($car['name']) ?>">
                <a href="details.php?id=<?= urlencode($car['id']) ?>">View Details</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No cars found.</p>
    <?php endif; ?>
</body>

</html>