<?php 
require_once('../base.php');
require_once(BASE_PATH . '/database.php');

$id = $_GET['idBuku'];
$bukudetail = detailbuku($id); 

?>

<link rel="stylesheet" href="../assets/style.css">

<div class="detail">
    <div class="cover">
        <div class="book-cover-large">📕</div>
    </div>

    <?php foreach ($bukudetail as $detail):?>
    <div class="detailbuku">
        <h1><?= $detail['judulBuku']?></h1>
        <p><strong>Penulis:</strong> <?= $detail['penulis']?></p>
        <p><strong>Penerbit:</strong> <?= $detail['penerbit']?></p>
        <p><strong>Tahun Terbit:</strong> <?= $detail['tahunTerbit']?></p>
        <p><strong>Deskripsi:</strong> <?= $detail['deskripsi']?></p>
        <a href="../index.php?page=pinjam"><button class="pinjam-button">Pinjam Buku</button></a>
    </div>
    <?php endforeach; ?>

</div>