<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enquiry = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'car' => $_POST['car']
    ];

    $_SESSION['enquiries'][] = $enquiry;
    header(header: "Location: enquiries.php");
    exit();
}

$car = isset($_GET['car']) ? $_GET['car'] : "Unknown Car";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Submit Enquiry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Enquiry for <?= $car ?></h2>
    <form action="submit-enquiry.php" method="post">
        <input type="hidden" name="car" value="<?= htmlspecialchars(string: $car) ?>">
        <input type="text" name="first_name" placeholder="Your First Name" required><br>
        <input type="text" name="last_name" placeholder="Your Last Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <input type="text" name="phone" placeholder="Your Phone" required><br>
        <button type="submit">Submit Enquiry</button>
    </form>
</body>

</html>