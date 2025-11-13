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
    <form method="GET" class="search-bar">
        <input type="hidden" name="page" value="pinjam">
        <input type="text" name="search-input" class="search-input" value="<?=$value?>" placeholder="Cari judul buku ...">
        <button class="cari" name="search">Cari</button>
    </form>
    
    <div class="pinjam-list">
        <?php 
        if(isset($_GET['search'])) {
            foreach ($bukucari as $pinjamcari):?>
                <div class="pinjam-card">
                    <div class="pinjam-cover">📕</div>
                    <div class="pinjam-info">
                        <div class="pinjam-title"><?= $pinjamcari['judulBuku']?></div>
                        <div class="book-author"><?= $pinjamcari['penulis']?></div>
                    </div>  
                </div>
                <?php endforeach;
            } else {
                foreach ($bukuList as $pinjambuku):?>
                    <div class="pinjam-card">
                        <div class="pinjam-cover">📕</div>
                        <div class="pinjam-info">
                            <div class="pinjam-title"><?= $pinjambuku['judulBuku']?></div>
                            <div class="book-author"><?= $pinjambuku['penulis']?></div>
                        </div>  
                    </div>
                    <?php endforeach;
            }
        ?>
    </div>
</div>