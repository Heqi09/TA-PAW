<?php
require_once('../base.php');
require_once(BASE_PATH . '/database.php');
?>
<link rel="stylesheet" href="../assets/style.css">

<?php
include BASE_PATH . '/components/header.php';
?>

<div class="main-content">
        <h1>Perpustakaan Kampus UNIPUSTAKA</h1>
        <div class="menu-container">
        <a href="manage.php" class="menu-card">Manajemen Buku</a>
        <a href="daftar_pemustaka.php" class="menu-card">Daftar Pemustaka</a>
        <a href="update_status.php" class="menu-card">Update Status</a>
        </div>
</div>

<?php include BASE_PATH . '/components/footer.php'; ?>
