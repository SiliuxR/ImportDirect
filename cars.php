<?php
$conn = new mysqli(hostname: "importdirectjdm.ct42gwuoyqj0.eu-west-2.rds.amazonaws.com", username: "admin", password: "Aitasingh41", database: "ImportDirectJDM");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, image_url, details_page FROM cars";
$result = $conn->query(query: $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>All Cars</title>
    <style>
        .car-container {
            border: 1px solid #ccc;
            margin: 20px 0;
            padding: 10px;
        }

        img {
            max-width: 300px;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>All Cars</h1>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="car-container">
                <h2><?= htmlspecialchars(string: $row['name']) ?></h2>
                <img src="<?= htmlspecialchars(string: $row['image_url']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">

                <a href="details.php?id=<?= urlencode(string: $row['id']) ?>">View Details</a>
                </p>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No cars found.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>

</html>