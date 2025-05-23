<?php
require 'db_connection.php';
session_start();

$stmt = $pdo->query("SELECT * FROM enquiries ORDER BY date_submitted DESC");
$enquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Enquiries</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="enquiry-body">
    <div class="enquiry-container">
        <h2>All Enquiries</h2>

        <?php if (!empty($enquiries)): ?>
            <?php foreach ($enquiries as $enquiry): ?>
                <div class="enquiry-item">
                    <strong>Name:</strong> <?= htmlspecialchars($enquiry['first_name'] . ' ' . $enquiry['last_name']) ?> |
                    <strong>Email:</strong> <?= htmlspecialchars($enquiry['email']) ?> |
                    <strong>Phone:</strong> <?= htmlspecialchars($enquiry['phone']) ?> |
                    <strong>Car:</strong> <?= htmlspecialchars($enquiry['car']) ?>

                    <form action="delete-enquiry.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $enquiry['id'] ?>">
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No enquiries found.</p>
            <a href="index.php" class="return-home">Return to Home</a>
        <?php endif; ?>
    </div>
</body>

</html>