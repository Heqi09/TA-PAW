<?php 
require_once(BASE_PATH . '/base.php');
require_once(BASE_PATH . '/database.php');

$bukuList = getAllBuku();

?>


<div class="page-content">
    <h2 class="section-title">Koleksi Buku</h2>
    
    <form method="GET" class="search-bar">
        <input type="hidden" name="page" value="koleksi">
        <input type="text" name="search" class="search-input" placeholder="Cari judul buku ...">
        <select name="kategori" class="filter-select" >
            <option>Semua Kategori</option>
            <option>Teknologi Informasi</option>
            <option>Ekonomi</option>
            <option>Hukum</option>
            <option>Kesehatan</option>
        </select>
        <button class="cari" name="search">Cari</button>
    </form>

    <div class="books-koleksi">
        <?php foreach ($bukuList as $koleksibuku):?>
        <div class="book-item">
            <div class="book-cover">📕</div>
            <div class="book-title"><?= $koleksibuku['judulBuku']?></div>
            <div class="book-author"><?= $koleksibuku['penulis']?></div>
            <span class="book-status status-available"><?= $koleksibuku['statusBuku']?></span>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
