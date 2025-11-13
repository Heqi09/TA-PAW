<?php 
require_once(BASE_PATH . '/base.php');
require_once(BASE_PATH . '/database.php');

$bukuList = getAllBuku();
$bukucari = caribuku();

$value = "";
if (isset($_GET['search'])) {
    $value = $_GET["search-input"];
}
?>


<div class="page-content">
    <h2 class="section-title">Koleksi Buku</h2>
    
    <form method="GET" class="search-bar">
        <input type="hidden" name="page" value="koleksi">
        <input type="text" name="search-input" class="search-input" value="<?= $value?>" placeholder="Cari judul buku ...">
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
        <?php
        if(isset($_GET['search'])) {
            foreach ($bukucari as $caribuku):?>
                <div class="book-item">
                    <div class="book-cover">📕</div>
                    <div class="book-title"><?= $caribuku['judulBuku']?></div>
                    <div class="book-author"><?= $caribuku['penulis']?></div>
                    <span class="book-status status-available"><?= $caribuku['statusBuku']?></span>
                </div>
                <?php endforeach;
            } else {
                foreach ($bukuList as $koleksibuku):?>
                    <div class="book-item">
                        <div class="book-cover">📕</div>
                        <div class="book-title"><?= $koleksibuku['judulBuku']?></div>
                        <div class="book-author"><?= $koleksibuku['penulis']?></div>
                        <span class="book-status status-available"><?= $koleksibuku['statusBuku']?></span>
                    </div>
                    <?php endforeach;
            }

        ?>
    </div>
</div>
