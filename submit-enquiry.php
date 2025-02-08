<!DOCTYPE html>
<html>

<head>
    <title>Enquiry Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $car = $_POST["car"] ?? "";
        $firstName = $_POST["first_name"] ?? "";
        $lastName = $_POST["last_name"] ?? "";
        $email = $_POST["email"] ?? "";
        $phone = $_POST["phone"] ?? "";
    }
    ?>

    <div class="confirmation-container">
        <h2>Thank you, <?= htmlspecialchars(string: $firstName) ?>!</h2>
        <p>Your enquiry for <strong><?= htmlspecialchars(string: $car) ?></strong> has been submitted successfully.</p>
        <p>We will contact you at <strong><?= htmlspecialchars(string: $email) ?></strong> or
            <strong><?= htmlspecialchars(string: $phone) ?></strong> soon.
        </p>
    </div>

</body>

</html>