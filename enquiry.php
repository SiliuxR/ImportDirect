<!DOCTYPE html>
<html>

<head>
    <title>Enquire Now</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $carName = $_GET['car'] ?? "";
    ?>

    <div class="form-container">
        <h2>Enquire About <?= htmlspecialchars(string: $carName) ?></h2>

        <form action="submit-enquiry.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" required>

            <button type="submit">Submit Enquiry</button>
        </form>
    </div>

</body>

</html>