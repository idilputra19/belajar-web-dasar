<html>

<link rel="stylesheet" href="style.css">
        <style>
            /* Mengatur tampilan keseluruhan body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        /* Styling form container */
        form {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        /* Input field styling */
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        /* Button styling */
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        /* Button hover effect */
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        
        /* Link styling */
        a {
            display: block;
            margin-top: 15px;
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        
        a:hover {
            color: #388e3c;
        }
        
        </style>

<body>
<?php
// Database connection
include 'db_connect.php';

$kode_mk = $_GET['kode_mk'];
$sql = "SELECT * FROM matakuliah WHERE kode_mk = '$kode_mk'";
$record = $conn->query($sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mk = $_POST['nama_mk'];
    $jumlah_praktikan = $_POST['jumlah_praktikan'];

    $sql = "UPDATE matakuliah SET nama_mk='$nama_mk', jumlah_praktikan='$jumlah_praktikan' WHERE kode_mk='$kode_mk'";
    $conn->query($sql);
    header("Location: index.php");
}
?>

    <form method="POST" action="update.php?kode_mk=<?= $kode_mk ?>">
        <input type="text" name="nama_mk" value="<?= $record['nama_mk'] ?>" required>
        <input type="number" name="jumlah_praktikan" value="<?= $record['jumlah_praktikan'] ?>">
        <button type="submit">Update</button>
          <a href="index.php">Back to list</a>
    </form>
      

</body>
</html>
