<?php
$carName = isset($_GET['car']) ? $_GET['car'] : 'Unknown Car';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Make an Enquiry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="enquiry-body">
    <div class="enquiry-container">
        <h1>Enquiry Form</h1>

        <form action="submit-enquiry.php" method="POST">
            <input type="hidden" name="car" value="<?= htmlspecialchars($carName) ?>">

            <label>First Name:
                <input type="text" name="first_name" required>
            </label>

            <label>Last Name:
                <input type="text" name="last_name" required>
            </label>

            <label>Email:
                <input type="email" name="email" required>
            </label>

            <label>Phone:
                <input type="tel" name="phone" required>
            </label>

            <input type="submit" value="Submit Enquiry" class="submit-button">
        </form>
    </div>
</body>

</html>