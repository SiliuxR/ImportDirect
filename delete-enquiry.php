<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $pdo->prepare("DELETE FROM enquiries WHERE id = ?")->execute([$id]);
}

header("Location: enquiries.php");
exit();