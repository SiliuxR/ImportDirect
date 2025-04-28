<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $car = $_POST["car"] ?? "Unknown Car";
    $firstName = $_POST["first_name"] ?? "";
    $lastName = $_POST["last_name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";


    $conn = new mysqli("importdirectjdm.ct42gwuoyqj0.eu-west-2.rds.amazonaws.com", "admin", "Aitasingh41", "ImportDirectJDM");

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO enquiries (car, first_name, last_name, email, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $car, $firstName, $lastName, $email, $phone);
    $stmt->execute();

    $stmt->close();
    $conn->close();


    header("Location: enquiry-confirmation.php");
    exit();
}

header("Location: index.php");
exit();
?>