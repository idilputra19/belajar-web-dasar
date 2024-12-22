<!-- File koneksi: koneksi.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas_idil";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>