<?php
$host = "importdirectjdm.ct42gwuoyqj0.eu-west-2.rds.amazonaws.com";
$dbname = "ImportDirectJDM";
$username = "admin";
$password = "Aitasingh41";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", username: $username, password: $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>