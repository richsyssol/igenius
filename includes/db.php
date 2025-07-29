<!-- config.php -->
<?php
$servername = "localhost";
$username = "igenius_web";
$password = "Nayx474?3";
$dbname = "igenius_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
