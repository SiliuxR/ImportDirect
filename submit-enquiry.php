<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $car = $_POST["car"] ?? "";
    $firstName = $_POST["first_name"] ?? "";
    $lastName = $_POST["last_name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $conn = new mysqli(hostname: "importdirectjdm.ct42gwuoyqj0.eu-west-2.rds.amazonaws.com", username: "admin", password: "Aitasingh41", database: "ImportDirectJDM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO enquiries (car, first_name, last_name, email, phone)
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $car, $firstName, $lastName, $email, $phone);
    $stmt->execute();
    $stmt->close();

    $conn->close();
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Enquiry Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="confirmation-container">
        <h2>Thank you, <?= htmlspecialchars($firstName) ?>!</h2>
        <p>Your enquiry has been submitted successfully.</p>
        <p>We will contact you at <strong><?= htmlspecialchars($email) ?></strong> or
            <strong><?= htmlspecialchars($phone) ?></strong> soon.
        </p>
        <a href="index.php" class="return-home">Return to Home</a>
    </div>
</body>

</html>