<?php
require 'db_connection.php';
session_start();

try {
    $stmt = $pdo->query("SELECT * FROM enquiries ORDER BY id DESC");
    $enquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $enquiries = [];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>All Enquiries</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>All Enquiries</h2>

    <?php if (!empty($enquiries)): ?>
        <ul>
            <?php foreach ($enquiries as $enquiry): ?>
                <li>
                    <strong>Name:</strong> <?= htmlspecialchars($enquiry['first_name'] . ' ' . $enquiry['last_name']) ?> |
                    <strong>Email:</strong> <?= htmlspecialchars($enquiry['email']) ?> |
                    <strong>Phone:</strong> <?= htmlspecialchars($enquiry['phone']) ?> |
                    <strong>Car:</strong> <?= htmlspecialchars($enquiry['car']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No enquiries made yet.</p>
    <?php endif; ?>

</body>

</html>