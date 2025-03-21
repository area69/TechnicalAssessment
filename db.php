<?php
$host = "localhost";
$user = "root"; // Change if needed
$pass = ""; // Change if using a password
$db = "myportfolio";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
