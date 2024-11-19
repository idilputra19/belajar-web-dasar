<?php
include 'db_connect.php';

// Pagination and results per page setup
$limitOptions = [10, 20, 50];
$limit = isset($_GET['limit']) && in_array($_GET['limit'], $limitOptions) ? (int)$_GET['limit'] : 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// Search setup
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Fetch data with search and pagination
$sql = "SELECT * FROM matakuliah WHERE nama_mk LIKE '%$search%' LIMIT $start, $limit";
$result = $conn->query($sql);
$total = $conn->query("SELECT COUNT(*) AS count FROM matakuliah WHERE nama_mk LIKE '%$search%'")->fetch_assoc()['count'];
$pages = ceil($total / $limit);

// Calculate range of current results
$currentStart = $start + 1;
$currentEnd = min($start + $limit, $total);

// Define pagination range (only 10 pages at a time)
$paginationRange = 10;
$startPage = max(1, $page - intval($paginationRange / 2));
$endPage = min($pages, $startPage + $paginationRange - 1);

// Adjust start page if at the end of the pagination range
if ($endPage - $startPage < $paginationRange - 1) {
    $startPage = max(1, $endPage - $paginationRange + 1);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah CRUD </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <h1>Belajar CRUD</h1>
        <h1>Data Mata Kuliah</h1>
        
        <div class="action-bar">
            <form method="GET" action="index.php" class="search-form">
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search..." />
                <button type="submit">Search</button>
            </form>
            <a href="create.php" class="button add-button">+ Add New</a>
        </div>

     <table>
    <thead>
        <tr>
            <th>No</th> <!-- Add a column for the row number -->
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>Jumlah Praktikan</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $rowNumber = $currentStart; // Start row number from the current start of pagination
        while ($row = $result->fetch_assoc()): 
        ?>
            <tr>
                <td><?= $rowNumber++ ?></td> <!-- Display and increment the row number -->
                
                <td><?= htmlspecialchars($row['kode_mk']) ?></td>
                <td><?= htmlspecialchars($row['nama_mk']) ?></td>
                <td><?= htmlspecialchars($row['jumlah_praktikan']) ?></td>
                <td class="action-buttons">
                    <a href="update.php?kode_mk=<?= $row['kode_mk'] ?>" class="button edit-button">Edit</a>
                    <a href="delete.php?kode_mk=<?= $row['kode_mk'] ?>" class="button delete-button" onclick="return confirm('apakah kamu tidak mencintai saya lagi?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
        
       


        <!-- Pagination with Range Selector -->
        <div class="pagination-container">
            <div class="results-info">
                Results: <?= $currentStart ?> - <?= $currentEnd ?> of <?= $total ?>
            </div>
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>&limit=<?= $limit ?>&search=<?= htmlspecialchars($search) ?>" class="page-link">&laquo;</a>
                <?php endif; ?>

                <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                    <a href="?page=<?= $i ?>&limit=<?= $limit ?>&search=<?= htmlspecialchars($search) ?>" class="page-link <?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
                <?php endfor; ?>
                
                <?php if ($page < $pages): ?>
                    <a href="?page=<?= $page + 1 ?>&limit=<?= $limit ?>&search=<?= htmlspecialchars($search) ?>" class="page-link">&raquo;</a>
                <?php endif; ?>
            </div>
            <div class="results-per-page">
                <label for="limit">Results per page:</label>
                <select id="limit" onchange="changeLimit(this.value)">
                    <?php foreach ($limitOptions as $option): ?>
                        <option value="<?= $option ?>" <?= $option == $limit ? 'selected' : '' ?>><?= $option ?></option>
                    <?php endforeach; ?>
                </select>
        

            </div>
        </div>
                   <footer class="footer">
                   Made with ❤️ copyright  idil Putra
                 </footer>
    </div>
    
 
    </body>

    <script>
        function changeLimit(limit) {
            const url = new URL(window.location.href);
            url.searchParams.set('limit', limit);
            url.searchParams.set('page', 1); // Reset to the first page
            window.location.href = url;
        }
    </script>

</html>
