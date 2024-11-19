<?php
// Database connection
include 'db_connect.php';

$kode_mk = $_GET['kode_mk'];
$sql = "DELETE FROM matakuliah WHERE kode_mk='$kode_mk'";
$conn->query($sql);

header("Location: index.php");
?>
