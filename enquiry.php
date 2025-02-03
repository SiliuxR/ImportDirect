<!DOCTYPE html>
<html>

<head>
    <title>Enquire Now</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $carName = $_GET['car'] ?? "Unknown Car";
    ?>

    <div class="form-container">
        <h2>Enquire About <?= htmlspecialchars(string: $carName) ?></h2>

        <form action="submit_enquiry.php" method="POST">
            <input type="hidden" name="car" value="<?= htmlspecialchars(string: $carName) ?>">

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>

</body>

</html>