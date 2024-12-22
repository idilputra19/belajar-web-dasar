<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $query = "INSERT INTO mahasiswa (NPM, Nama_Mahasiswa, Tempat_Tanggal_Lahir, Prodi, Alamat, Telp) 
              VALUES ('$npm', '$nama', '$tempat_tanggal_lahir', '$prodi', '$alamat', '$telp')";

    if (mysqli_query($conn, $query)) {
        // Redirect to index.php after success
        header("Location: read.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Data Mahasiswa</h2>

    <form method="POST">
        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" name="npm" id="npm" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label for="tempat_tanggal_lahir">Tempat & Tanggal Lahir:</label>
            <input type="text" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="prodi">Prodi:</label>
            <input type="text" name="prodi" id="prodi" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <div class="form-group">
            <label for="telp">Telp:</label>
            <input type="text" name="telp" id="telp" required>
        </div>

        <button type="submit">Tambah</button>
    </form>

    <div class="footer">
        <p>Made with ❤️ by Idil Putra @2024</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
