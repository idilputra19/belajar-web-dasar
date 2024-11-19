<?php
// Database connection
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

// CREATE
function createMatakuliah($kode_mk, $nama_mk, $jumlah_praktikan) {
    global $conn;
    $sql = "INSERT INTO matakuliah (kode_mk, nama_mk, jumlah_praktikan) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $kode_mk, $nama_mk, $jumlah_praktikan);
    if ($stmt->execute()) {
        echo "New matakuliah created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// READ
function readMatakuliah() {
    global $conn;
    $sql = "SELECT kode_mk, nama_mk, jumlah_praktikan FROM matakuliah";
    $result = $conn->query($sql);
    return $result;
}

// UPDATE
function updateMatakuliah($kode_mk, $nama_mk, $jumlah_praktikan) {
    global $conn;
    $sql = "UPDATE matakuliah SET nama_mk = ?, jumlah_praktikan = ? WHERE kode_mk = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $nama_mk, $jumlah_praktikan, $kode_mk);
    if ($stmt->execute()) {
        echo "Matakuliah updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// DELETE
function deleteMatakuliah($kode_mk) {
    global $conn;
    $sql = "DELETE FROM matakuliah WHERE kode_mk = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $kode_mk);
    if ($stmt->execute()) {
        echo "Matakuliah deleted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close connection when the script ends
register_shutdown_function(function() use ($conn) {
    $conn->close();
});
?>
