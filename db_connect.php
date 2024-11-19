<?php
$servername = "localhost";
$username = "u197345507_idil";
$password = "12345@ASDf";
$dbname = "u197345507_idil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
