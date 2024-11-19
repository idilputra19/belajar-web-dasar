<?php
include 'db_connect.php'; // Include your database connection

for ($i = 1; $i <= 1000; $i++) {
    // Generate a kode_mk that starts with "2024" followed by a unique random number
    $kode_mk = '2024' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT); // 2024XXXX format
    $nama_mk = 'Matakuliah ' . $i;
    $jumlah_praktikan = rand(10, 100); // Random number between 10 and 100

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO matakuliah (kode_mk, nama_mk, jumlah_praktikan) 
            VALUES ('$kode_mk', '$nama_mk', '$jumlah_praktikan')";
    
    if (!$conn->query($sql)) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "1000 records inserted successfully.";

$conn->close();
?>
