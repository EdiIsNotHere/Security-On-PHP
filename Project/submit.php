<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $bio = trim($_POST['bio']);

    if (empty($fullname) || empty($email) || empty($username) || empty($password)) {
        exit("❌ Please fill in all required fields.");
    }

    // Check if email or username already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
    $stmt->execute([$email, $username]);
    if ($stmt->fetch()) {
        exit("❌ Email or username already in use.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert user
    $stmt = $pdo->prepare("INSERT INTO users (fullname, email, username, password, bio) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$fullname, $email, $username, $hashedPassword, $bio]);

    echo "✅ Registration successful!";
} else {
    exit("❌ Invalid request.");
}
?>
