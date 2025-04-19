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
            <label>First Name:</label>
            <input type="text" name="first_name" required>

            <label>Last Name:</label>
            <input type="text" name="last_name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="tel" name="phone" required>

            <input type="submit" value="Submit Enquiry" class="submit-button">
        </form>
    </div>

</body>

</html>