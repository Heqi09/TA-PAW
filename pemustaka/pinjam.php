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
    <div class="pinjam-box">
    <div class="pinjam-books">
        <?php 
        if(isset($_GET['search'])) {
            foreach ($bukucari as $pinjamcari):?>
            <a href="./pemustaka/detailBuku.php">
                <div class="pinjam-card">
                    <div class="book-cover">📕</div>
                    <div class="book-title"><?= $pinjamcari['judulBuku']?></div>
                    <div class="book-author"><?= $pinjamcari['penulis']?></div>
                </div>
            </a>
                <?php endforeach;
            } else {
                foreach ($bukuList as $pinjambuku):?>
            <a href="./pemustaka/detailBuku.php?idBuku=<?= $pinjambuku['idBuku']?>">
                <div class="pinjam-card">
                    <div class="book-cover">📕</div>
                    <div class="book-title"><?= $pinjambuku['judulBuku']?></div>
                    <div class="book-author"><?= $pinjambuku['penulis']?></div>
                </div>
            </a>
            <?php endforeach;
       
            }
        ?>
    </div>
    <div class="history">
        <h3>RIWAYAT</h3>
            <?php foreach($bukuList as $buku):?>
                <div class="history-box"><?= $buku['judulBuku']?></div>
            <?php endforeach;?>
    </div>
    </div>
</div>