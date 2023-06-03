<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../web/login.php");
    exit;
}

require '../php/functions.php';

$tampil = query("SELECT b.*, k.*, b.id as id_brg 
FROM barang b 
JOIN kategori k 
ON b.kategori_id = k.id");
$i = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            margin-bottom: 20px;
        }

        .table {
            table-layout: fixed;
        }

        .table td {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Candra tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah-barang.php">Add items</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="daftar-barang.php">Products</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="mb-4">Daftar Barang</h1>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Images</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tampil as $b) :
                        $i++;
                    ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img width="150px" src="../assets/img/<?= $b['gambar']; ?>"></td>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['brand']; ?></td>
                            <td><?= $b['kategori']; ?></td>
                            <td><?= $b['deskripsi']; ?></td>
                            <td>
                                <a href="../php/update.php?id=<?= $b['id_brg']; ?>" class="badge text-dark p-1 bg-warning">Change</a> |
                                <a href="../php/delete.php?id=<?= $b['id_brg']; ?>" class="badge text-light p-1 bg-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>