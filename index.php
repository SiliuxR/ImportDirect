<?php
session_start();
require 'db_connection.php';
$cars = $pdo->query("SELECT * FROM cars")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Direct JDM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="logo-banner">
            <h1 class="banner-text">Import Direct JDM</h1>
        </div>
    </header>

    <div class="menu-container">
        <h3>Navigation</h3>
        <div class="Menu">
            <a href="enquiries.php" class="menu-button">View Enquiries</a>

            <?php if (isset($_SESSION["user"])): ?>
                <a href="logout.php" class="menu-button">Logout (<?= htmlspecialchars($_SESSION["user"]) ?>)</a>
            <?php else: ?>
                <a href="login.php" class="menu-button">Login</a>
                <a href="signup.php" class="menu-button">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="car-container">
        <?php foreach ($cars as $car): ?>
            <div class="car-item">
                <a href="<?= htmlspecialchars($car['details_page']) ?>">
                    <img src="<?= htmlspecialchars($car['image_url']) ?>" alt="<?= htmlspecialchars($car['name']) ?>">
                </a>
                <h2><?= htmlspecialchars($car['name']) ?></h2>
                <a href="enquiry.php?car=<?= urlencode($car['name']) ?>" class="enquire-button">Enquire Now</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>