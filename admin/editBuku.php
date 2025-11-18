<?php
require_once('../base.php');
require_once(BASE_PATH . '/database.php');
?>

<link rel="stylesheet" href="../assets/form.css">
<link rel="stylesheet" href="../assets/style.css">


<?php
include BASE_PATH . '/components/header.php';
?>

<div class="editbuku">
    <h1>Edit Buku</h1>
    <form action="#" method="post" class="formedit">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul">

        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="penulis">

        <label for="tahun">Tahun Terbit:</label>
        <input type="text" id="tahun" name="tahun">

        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit">

        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi">

        <button type="submit" class="tombolSimpan">Save</button>
    </form>
</div>

<?php include BASE_PATH . '/components/footer.php'; ?>
