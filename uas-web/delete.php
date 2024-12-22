<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $query = "DELETE FROM mahasiswa WHERE NPM='$npm'";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus.";
        header('Location: read.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
