<?php
require_once('../base.php');
require_once(BASE_PATH . '/database.php');
?>
<link rel="stylesheet" href="../assets/style.css">
<link rel="stylesheet" href="../assets/table.css">

<?php
include BASE_PATH . '/components/header.php';
?>

<div class="tabelBukuContainer">
    <div class="judulTabel">
        <h1>Daftar Buku UNIPUSTAKA</h1>
        <a href="tambahBuku.php"><button>+ Tambah Buku</button></a>
    </div>
    <table class="tabelbuku">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>  
            <th>Penerbit</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="editBuku.php"><button class="tombolEdit">Edit</button></a>
                <button class="tombolHapus">Hapus</button>
            </td>
            </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="editBuku.php"><button class="tombolEdit">Edit</button></a>
                <button class="tombolHapus">Hapus</button>
            </td>
        </tr>
    </table>
</div>

<?php include BASE_PATH . '/components/footer.php'; ?>
