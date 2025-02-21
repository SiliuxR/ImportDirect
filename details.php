<?php

$conn = new mysqli(hostname: "importdirectjdm.ct42gwuoyqj0.eu-west-2.rds.amazonaws.com", username: "admin", password: "Aitasingh41", database: "ImportDirectJDM");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$carId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$sql = "SELECT id, name, image_url, details_page FROM cars WHERE id = $carId LIMIT 1";
$result = $conn->query($sql);
$row = ($result && $result->num_rows > 0) ? $result->fetch_assoc() : null;
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Details for <?= $row ? htmlspecialchars($row['name']) : 'Car Not Found' ?></title>
    <style>
        .details-container {
            max-width: 600px;
            margin: 0 auto;
        }

        img {
            max-width: 100%;
            display: block;
            margin-bottom: 10px;
        }
    </style>
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