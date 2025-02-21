<?php
require 'db_connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        $stmt = $pdo->prepare(query: "SELECT * FROM users WHERE username = ?");
        $stmt->execute(params: [$username]);
        $user = $stmt->fetch(mode: PDO::FETCH_ASSOC);

        if ($user && password_verify(password: $password, hash: $user["password_hash"])) {
            $_SESSION["user"] = $user["username"];
            header(header: "Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Login</h2>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?= htmlspecialchars(string: $error) ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

</body>

</html>