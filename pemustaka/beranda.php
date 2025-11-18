<?php 
require_once(BASE_PATH . '/base.php');
require_once(BASE_PATH . '/database.php');

$bukuTerbaru = getBukuTerbaru(3);
$pemustaka = ambilpemustaka($_SESSION['id']); 
$totalbuku = totalbuku();

?>

<div class="hero">
    <h2>Selamat Datang, <?= $pemustaka['namaDepan']?></h2>
    <p>Di UNIPUSTAKA Perpustakaan Kampus Negeri</p>
    <a href="?page=koleksi" class="btn-primary">Lihat Koleksi Lainnya</a>
</div>

<div class="content-section">
    <div>
        <h3 class="section-title"><b>Koleksi Terbaru</b></h3>
        <div class="book-position">
            <?php foreach ($bukuTerbaru as $buku): ?>
            <div class="book-card">
                <div class="book-cover">📕</div>
                <div class="book-title"><?= $buku['judulBuku']?></div>
                <div class="book-author"><?= $buku['penulis']?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="about">
        <h3 class="section-title"><b>Total Buku</b></h3>
        <h1><?php echo $totalbuku ?></h1>
        <h3>buku</h3>

        
    </div>

</div>