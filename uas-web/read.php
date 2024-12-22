<?php
include 'koneksi.php';

// Set hasil per halaman
$results_per_page = 10;

// Menentukan halaman aktif
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($page - 1) * $results_per_page;

// Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM mahasiswa WHERE Nama_Mahasiswa LIKE '%$search%' LIMIT $start_from, $results_per_page";
$result = mysqli_query($conn, $query);

// Hitung jumlah total data mahasiswa
$total_query = "SELECT COUNT(*) AS total FROM mahasiswa WHERE Nama_Mahasiswa LIKE '%$search%'";
$total_result = mysqli_query($conn, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $results_per_page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Custom CSS -->
    <style>
        body {
            margin: 20px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: gray;
        }
        .btn-edit {
            background-color: #007BFF;
            color: white;
        }
        .btn-delete {
            background-color: #FF4B4B;
            color: white;
        }
        .pagination {
            justify-content: center;
        }
        .pagination .page-item.active .page-link {
            background-color: #007BFF;
            border-color: #007BFF;
        }
        .pagination .page-item .page-link {
            color: #007BFF;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Data Mahasiswa</h2>
    
    <div class="d-flex justify-content-between mb-3">
        <!-- Form Pencarian -->
        <form class="d-flex" method="GET">
            <input class="form-control me-2" type="text" name="search" placeholder="Search Mahasiswa..." value="<?= $search ?>">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
        <!-- Tombol Tambah -->
        <a href="create.php" class="btn btn-success">+ Add New</a>
    </div>
    
    <!-- Tabel Data -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = $start_from + 1; // Menyesuaikan nomor urut per halaman
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['NPM']}</td>
                    <td>{$row['Nama_Mahasiswa']}</td>
                    <td>{$row['Tempat_Tanggal_Lahir']}</td>
                    <td>{$row['Prodi']}</td>
                    <td>{$row['Alamat']}</td>
                    <td>{$row['Telp']}</td>
                    <td>
                        <a href='update.php?npm={$row['NPM']}' class='btn btn-sm btn-edit'>Edit</a>
                        <a href='delete.php?npm={$row['NPM']}' class='btn btn-sm btn-delete' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                    </td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php
            $pagination_range = 10; // Jumlah halaman yang ditampilkan di pagination
            $start_page = max(1, $page - floor($pagination_range / 2));
            $end_page = min($total_pages, $start_page + $pagination_range - 1);

            if ($page > 1) {
                echo "<li class='page-item'><a class='page-link' href='?search=$search&page=" . ($page - 1) . "'>&laquo; Previous</a></li>";
            }

            for ($i = $start_page; $i <= $end_page; $i++) {
                echo "<li class='page-item " . ($i == $page ? 'active' : '') . "'><a class='page-link' href='?search=$search&page=$i'>$i</a></li>";
            }

            if ($page < $total_pages) {
                echo "<li class='page-item'><a class='page-link' href='?search=$search&page=" . ($page + 1) . "'>Next &raquo;</a></li>";
            }
            ?>
        </ul>
    </nav>

    <div class="footer">
        <p>Made with ❤️ by Idil Putra @2024</p>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
