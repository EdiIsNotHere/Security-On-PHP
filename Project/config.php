<?php
$host = 'localhost:3308';  
$db = 'user_registration'; // you should add your database name
$user = 'root';// you should add your username 
$pass = ''; // you should add your password
$charset = 'utf8mb4';//optional but utf8 is better

$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // information to db
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    exit("❌ Connection failed: " . $e->getMessage());
}
?>
