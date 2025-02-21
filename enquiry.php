<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Make an Enquiry</title>
</head>

<body>
    <h1>Enquiry Form</h1>
    <form action="submit-enquiry.php" method="POST">

        <label>First Name:
            <input type="text" name="first_name" required>
        </label>
        <br><br>

        <label>Last Name:
            <input type="text" name="last_name" required>
        </label>
        <br><br>

        <label>Email:
            <input type="email" name="email" required>
        </label>
        <br><br>

        <label>Phone:
            <input type="tel" name="phone" required>
        </label>
        <br><br>

        <input type="submit" value="Submit Enquiry">
    </form>
</body>

</html>