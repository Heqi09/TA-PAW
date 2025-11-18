<?php 
require_once('../base.php');
require_once(BASE_PATH . '/database.php');


?>

<link rel="stylesheet" href="../assets/style.css">
<link rel="stylesheet" href="../assets/form.css">

<div class="editprofil">
    <h1>Edit Profil</h1>
    <form class="edit-form">
        <label for="namaDepan">Nama Depan:</label>
        <input type="text" id="namaDepan" name="namaDepan">

        <label for="namaBelakang">Nama Belakang:</label>
        <input type="text" id="namaBelakang" name="namaBelakang">

        <label for="noIndukPemustaka">No Induk:</label>
        <input type="text" id="noIndukPemustaka" name="noIndukPemustaka">

        <label for="alamatPemustaka">Alamat:</label>
        <input type="text" id="alamatPemustaka" name="alamatPemustaka">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <button type="submit" class="simpanUbah">Simpan Perubahan</button>
    </form>
    <div class="tombolkembali">
        <a href="../index.php"><button>kembali</button></a>
    </div>
    
</div>