<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $query = "SELECT * FROM mahasiswa WHERE NPM='$npm'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $query = "UPDATE mahasiswa SET 
              Nama_Mahasiswa='$nama', Tempat_Tanggal_Lahir='$tempat_tanggal_lahir', 
              Prodi='$prodi', Alamat='$alamat', Telp='$telp' WHERE NPM='$npm'";

    if (mysqli_query($conn, $query)) {
        header('Location: read.php');
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
    <title>Update Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Update Data Mahasiswa</h2>
    <form method="POST">
        <input type="hidden" name="npm" value="<?php echo $data['NPM']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['Nama_Mahasiswa']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tempat_tanggal_lahir" class="form-label">Tempat & Tanggal Lahir</label>
            <input type="text" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="<?php echo $data['Tempat_Tanggal_Lahir']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $data['Prodi']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['Alamat']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="telp" class="form-label">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $data['Telp']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>
        <a href="read.php" class="btn btn-secondary w-100 mt-3">Cancel</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
