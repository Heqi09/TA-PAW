<?php 
require_once(BASE_PATH . '/base.php');
require_once(BASE_PATH . '/database.php');

$bukuTerbaru = getBukuTerbaru(2);

?>

<div class="hero">
    <h2>Selamat Datang, Budi!</h2>
    <p>Jelajahi koleksi digital dan fisik terlengkap untuk dedunggan studi und risetmu.</p>
    <a href="?page=koleksi" class="btn-primary">Lihat Detail Koleksi</a>
</div>

<div class="content-section">
    <div>
        <h3 class="section-title">Koleksi Terbaru</h3>
        <div class="book-grid">
            <?php foreach ($bukuTerbaru as $buku): ?>
            <div class="book-card">
                <div class="book-cover">📕</div>
                <div class="book-title"><?= $buku['judulBuku']?></div>
                <div class="book-author"><?= $buku['penulis']?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="announcements">
        <h3 class="section-title">Pengumuman</h3>
        <ul>
            <li>Perpustakaan buka setiap hari Senin - Jumat</li>
            <li>Maksimal peminjaman 3 buku per mahasiswa</li>
            <li>Denda keterlambatan Rp 1.000/hari</li>
            <li>Tersedia layanan konsultasi riset</li>
        </ul>
    </div>
</div>