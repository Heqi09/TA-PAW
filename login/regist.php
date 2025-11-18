<?php
require_once('../function.php');
$username = $nip = $password = $email = $nomor = $alamat = "";
$error_username = $error_nip = $error_password = $error_email = $error_nomor = $error_alamat = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $nip = $_POST['nip'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];

    if(!tidak_boleh_kosong($username)){
        $error_username = "Masukkan Wajib Diisi";
    } elseif(!alfabet($username)) {
        $error_username = "Masukkan Harus Alfabet";
    }

    if(!tidak_boleh_kosong($nip)){
        $error_nip = "Masukkan Wajib Diisi";
    } elseif(!numerik($nip)) {
        $error_nip = "Masukkan Harus Numerik";
    }

    if(!tidak_boleh_kosong($password)){
        $error_password = "Masukkan Wajib Diisi";
    } elseif(!alfanumerik($password)) {
        $error_password = "Password minimal 8 Karakter Mengandung Huruf Dan Angka";
    }

    if(!tidak_boleh_kosong($email)){
        $error_email = "Masukkan Wajib Diisi";
    } elseif(!validasiEmail($email)) {
        $error_email = "Masukkan Wajib Format Email";
    }

    if(!tidak_boleh_kosong($nomor)){
        $error_nomor = "Masukkan Wajib Diisi";
    } elseif(!numerik($nomor)) {
        $error_nomor = "Masukkan Wajib Numerik";
    }

    if(!tidak_boleh_kosong($alamat)){
        $error_alamat = "Masukkan Wajib Diisi";
    } elseif(!alfanumerik($alamat)) {
        $error_alamat = "Masukkan Harus Huruf atau Angka";
    }

    if($error_username == "" && $error_nip == ""  && 
       $error_password == "" && $error_email == "" && $error_nomor == "" && 
       $error_alamat == ""){
        
        $username = $nip = $password = $email = $nomor = $alamat = "";
        $succes = '<h3>Registrasi Berhasil</h3>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>

    <!-- Panggil CSS eksternal -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
<h2 class="title">UNIPUSTAKA</h2>
 <fieldset class="box">
    <form method="post" action="">
    <table>
        <tr><td class="label">Username</td></tr>
        <tr><td><input type="text" name="username" placeholder="Masukkan Username" value="<?= $username; ?>"></td></tr>
        <tr><td class="error"><?= $error_username; ?></td></tr>

        <tr><td class="label">NIP/NIM</td></tr>
        <tr><td><input type="text" name="nip" placeholder="Masukkan NIP/NIM" value="<?= $nip; ?>"></td></tr>
        <tr><td class="error"><?= $error_nip; ?></td></tr>

        <tr><td class="label">Password</td></tr>
        <tr><td><input type="text" name="password" placeholder="Masukkan Password" value="<?= $password; ?>"></td></tr>
        <tr><td class="error"><?= $error_password; ?></td></tr>

        <tr><td class="label">Email</td></tr>
        <tr><td><input type="text" name="email" placeholder="Masukkan Email" value="<?= $email; ?>"></td></tr>
        <tr><td class="error"><?= $error_email; ?></td></tr>

        <tr><td class="label">Nomor Telepon</td></tr>
        <tr><td><input type="text" name="nomor" placeholder="Masukkan Nomor" value="<?= $nomor; ?>"></td></tr>
        <tr><td class="error"><?= $error_nomor; ?></td></tr>

        <tr><td class="label">Alamat</td></tr>
        <tr><td><input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" value="<?= $alamat; ?>"></td></tr>
        <tr><td class="error"><?= $error_alamat; ?></td></tr>

        <tr><td><hr></td></tr>

        <tr>
            <td class="center-button">
             <button type="submit" name="submit">Sign Up</button>
            </td>
        </tr>
    </table>
    </form>
 </fieldset>
</body>
</html>
