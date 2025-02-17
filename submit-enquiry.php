<!DOCTYPE html>
<html>

<head>
    <title>Enquiry Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $car = $_POST["car"] ?? "Unknown Car";
        $firstName = $_POST["first_name"] ?? "";
        $lastName = $_POST["last_name"] ?? "";
        $email = $_POST["email"] ?? "";
        $phone = $_POST["phone"] ?? "";
    } else {

        header(header: "Location: index.php");
        exit();
    }
    ?>

    <div class="confirmation-container">
        <h2>Thank you, <?= htmlspecialchars(string: $firstName) ?>!</h2>
        <p>Your enquiry for <strong><?= htmlspecialchars(string: $car) ?></strong> has been submitted successfully.</p>
        <p>We will contact you at <strong><?= htmlspecialchars(string: $email) ?></strong> or
            <strong><?= htmlspecialchars(string: $phone) ?></strong> soon.
        </p>
        <a href="index.php" class="return-home">Return to Home</a>
    </div>

</body>

</html>