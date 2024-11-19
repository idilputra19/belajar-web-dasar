<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah CRUD</title>
    <link rel="stylesheet" href="style.css">
                <style>
                * {
                box-sizing: border-box;
            }
            
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
            }
            
            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                max-width: 400px;
                width: 100%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            
            h1 {
                text-align: center;
                color: #333;
                margin-bottom: 1rem;
            }
            
            .form-group {
                margin-bottom: 1rem;
            }
            
            label {
                display: block;
                margin-bottom: 0.5rem;
                font-weight: bold;
                color: #555;
            }
            
            input[type="text"],
            input[type="number"] {
                width: 100%;
                padding: 0.8rem;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 1rem;
            }
            
            button.submit-button {
                width: 100%;
                padding: 0.8rem;
                border: none;
                background-color: #4CAF50;
                color: white;
                font-size: 1rem;
                cursor: pointer;
                border-radius: 4px;
                transition: background-color 0.3s;
            }
            
            button.submit-button:hover {
                background-color: #45a049;
            }
            
            a.back-button {
                display: block;
                text-align: center;
                margin-top: 1rem;
                color: #007BFF;
                text-decoration: none;
                font-size: 0.9rem;
            }
            
            a.back-button:hover {
                text-decoration: underline;
            }
            </style>
</head>
<body>
    <div class="container">
        <h1>Add New Mata Kuliah</h1>
        
        <?php
        include 'db_connect.php';

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kode_mk = $_POST['kode_mk'];
            $nama_mk = $_POST['nama_mk'];
            $jumlah_praktikan = $_POST['jumlah_praktikan'];

            // Prepare and bind to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO matakuliah (kode_mk, nama_mk, jumlah_praktikan) VALUES (?, ?, ?)");
            $stmt->bind_param("isi", $kode_mk, $nama_mk, $jumlah_praktikan);

            if ($stmt->execute()) {
                // Redirect to index page after successful insert
                header("Location: index.php");
                exit();
            } else {
                echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>

        <form method="POST" action="create.php">
            <div class="form-group">
                <label for="kode_mk">Kode MK</label>
                <input type="number" id="kode_mk" name="kode_mk" placeholder="Kode MK" required>
            </div>
            <div class="form-group">
                <label for="nama_mk">Nama MK</label>
                <input type="text" id="nama_mk" name="nama_mk" placeholder="Nama MK" required>
            </div>
            <div class="form-group">
                <label for="jumlah_praktikan">Jumlah Praktikan</label>
                <input type="number" id="jumlah_praktikan" name="jumlah_praktikan" placeholder="Jumlah Praktikan">
            </div>
            <button type="submit" class="submit-button">Add</button>
        </form>

        <a href="index.php" class="back-button">Back to list</a>
    </div>
</body>
</html>
