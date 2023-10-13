<?php
$host = 'localhost';
$db = 'blood_bank_system';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
echo "<h1>Connection Created</h1>"
?>
