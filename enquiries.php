<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Enquiries</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>All Enquiries</h2>

    <?php if (isset($_SESSION['enquiries']) && !empty($_SESSION['enquiries'])): ?>
        <ul>
            <?php foreach ($_SESSION['enquiries'] as $enquiry): ?>
                <li>
                    <strong>Name:</strong> <?= $enquiry['name'] ?> |
                    <strong>Email:</strong> <?= $enquiry['email'] ?> |
                    <strong>Phone:</strong> <?= $enquiry['phone'] ?> |
                    <strong>Car:</strong> <?= $enquiry['car'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No enquiries made yet.</p>
    <?php endif; ?>
</body>

</html>