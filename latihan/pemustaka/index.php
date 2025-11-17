<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
require_once('../base.php');
require_once(BASE_PATH . '/database.php');

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unipustaka - Perpustakaan Kampus</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <?php include BASE_PATH . '/components/header.php'; ?>
    <div class="container">
        <div class="sidebar">
            <a href="?page=beranda" class="menu-item <?php echo $page == 'beranda' ? 'active' : ''; ?>">
                <span>🏠</span>
                <span>Beranda</span>
            </a>
            <a href="?page=koleksi" class="menu-item <?php echo $page == 'koleksi' ? 'active' : ''; ?>">
                <span>📖</span>
                <span>Koleksi</span>
            </a>
            <a href="?page=pinjam" class="menu-item <?php echo $page == 'pinjam' ? 'active' : ''; ?>">
                <span>💳</span>
                <span>Pinjam</span>
            </a>
        </div>

        <div class="main-content">
            <?php
            // Routing berdasarkan parameter page
            switch($page) {
                case 'koleksi':
                    include 'koleksi.php';
                    break;
                case 'pinjam':
                    include 'pinjam.php';
                    break;
                default:
                    include 'beranda.php';
            }
            ?>
        </div>
    </div>
    <?php include BASE_PATH . '/components/footer.php'; ?>
</body>
</html>

