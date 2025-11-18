<?php 
require_once(BASE_PATH . '/base.php');
require_once(BASE_PATH . '/database.php');

$bukuList = getAllBuku();
$bukucari = caribuku();

$value = "";
$kategori = "";

if (isset($_GET['search'])) {
    $value = $_GET["search-input"];
    $kategori = $_GET["kategori"];
}
?>


<div class="page-content">
    
    <form method="GET" class="search-bar">
        <input type="hidden" name="page" value="koleksi">
        <input type="text" name="search-input" class="search-input" value="<?= $value?>" placeholder="Cari judul buku ...">
        <select name="kategori" class="filter-select" >
            <option value="" <?php if($kategori == ""){echo "selected";}?>>Semua Kategori</option>
            <option value="Karya Umum" <?php if($kategori == "Karya Umum"){echo "selected";} ?>>Karya Umum</option>
            <option value="Ilmu Komputer" <?php if($kategori == "Ilmu Komputer"){echo "selected";} ?>>Ilmu Komputer</option>
            <option value="Agama" <?php if($kategori == "Agama"){echo "selected";}?>>Agama</option>
            <option value="Ilmu Sosial" <?php if($kategori == "Ilmu Sosial"){echo "selected";} ?>>Ilmu Sosial</option>
            <option value="Sejarah" <?php if($kategori == "Sejarah"){echo "selected";} ?>>Sejarah</option>
            <option value="Seni" <?php if($kategori == "Seni"){echo "selected";} ?>>Seni</option>
        </select>
        <button class="cari" name="search">Cari</button>
    </form>

    <div class="books-koleksi">
        <?php
        if(isset($_GET['search'])) {
            foreach ($bukucari as $caribuku):?>
            <?php if($caribuku['kategoriBuku'] == $kategori || $kategori == ""):?>
                <div class="book-card">
                    <div class="book-cover">📕</div>
                    <div class="book-title"><?= $caribuku['judulBuku']?></div>
                    <div class="book-author"><?= $caribuku['penulis']?></div>
                    <span class="book-status"><?= $caribuku['statusBuku']?></span>
                </div>
            <?php endif; ?>
                <?php endforeach;
            } else {
                foreach ($bukuList as $koleksibuku):?>
                    <div class="book-card">
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