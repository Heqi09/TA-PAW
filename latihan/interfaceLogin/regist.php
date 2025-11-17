<?php
require_once('function.php');
$username = $nip = $fakultas = $password = $email = $nomor = $alamat = "";
$error_username = $error_nip = $error_fakultas = $error_password = $error_email = $error_nomor = $error_alamat = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $nip = $_POST['nip'];
    $fakultas = $_POST['fakultas'];
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

if(!tidak_boleh_kosong($fakultas)){
    $error_fakultas = "Masukkan Wajib Diisi";
} elseif(!alfabet($fakultas)) {
    $error_fakultas = "Masukkan Harus Alfabet";
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
    $error_alamat = "Masukkan Wajib Format Email";
}

if($error_username == "" && $error_nip == "" && $error_fakultas == "" && $error_password == ""
 && $error_email == "" && $error_nomor == "" && $error_alamat == ""){
    $username = $nip = $fakultas = $password = $email = $nomor = $alamat = "";
    $succes = '<h3>Registrasi Berhasil</h3>';
}
// if (tidak_boleh_kosong($error_username) && tidak_boleh_kosong($error_nip) && tidak_boleh_kosong($error_fakultas) 
//     && tidak_boleh_kosong($error_password) && tidak_boleh_kosong($error_email) && tidak_boleh_kosong($error_nomor) 
//     && tidak_boleh_kosong($error_alamat)) {
// 	$username = $nip = $fakultas = $password = $email = $nomor = $alamat = '';
// 	$success = '<h3>DATA MASUK</h3>';
// }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h2 align="center">UNIPUSTAKA</h2>
    <fieldset>
    <form method="post" action="">
        <table align="center">
            <tr>
                <td align="center">Username</td>
            </tr>
            <tr>
                <td><input type="text" name="username" value="<?= $username; ?>" placeholder="Masukkan Username"></td>
            </tr>
            <tr>
                <td style="color:red; font:size-11px; align:center;">
                <?= $error_username; ?>
                </td>
            </tr>
            <tr>
                <td align="center">NIP/NIM</td>
            </tr>
            <tr>
                <td><input type="text" name="nip" value="<?= $nip; ?>" placeholder="Masukkan NIP/NIM"></td>
            </tr>
            <tr>
                <td>
                    <td style="color:red; font:size-11px; align:center;">
                    <?= $error_nip; ?>
                </td>
            </tr>
            <tr>
                <td align="center">Fakultas</td>
            </tr>
            <tr>
                <td><input type="text" name="fakultas" value="<?= $fakultas; ?>" placeholder="Masukkan Fakultas"></td>
            </tr>
            <tr>
                <td>
                    <td style="color:red; font:size-11px; align:center;">
                    <?= $error_fakultas; ?>
                </td>
            </tr>
            <tr>
                <td align="center">Password</td>
            </tr>
            <tr>
                <td><input type="text" name="password" value="<?= $password; ?>" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td>
                    <td style="color:red; font:size-11px; align:center;">
                    <?= $error_password; ?>
                </td>
            </tr>
            <tr>
                <td align="center">Email</td>
            </tr>
            <tr>
                <td><input type="text" name="email" value="<?= $email; ?>" placeholder="Masukkan Email"></td>
            </tr>
            <tr>
                <td>
                    <td style="color:red; font:size-11px; align:center;">
                    <?= $error_email; ?>
                </td>
            </tr>
            <tr>
                <td align="center">Nomor Telepon</td>
            </tr>
            <tr>
                <td><input type="text" name="nomor" value="<?= $nomor; ?>" placeholder="Masukkan Nomor Telepon"></td>
            </tr>
            <tr>
                <td>
                    <td style="color:red; font:size-11px; align:center;">
                    <?= $error_nomor; ?>
                </td>
                </td>
            </tr>
            <tr>
                <td align="center">Alamat</td>
            </tr>
            <tr>
                <td><input type="text" name="alamat" value="<?= $alamat; ?>" placeholder="Masukkan Alamat Lengkap"></td>
            </tr>
            <tr>
                <td>
                    <td style="color:red; font:size-11px; align:center;">
                    <?= $error_alamat; ?>
                </td>
                </td>
            </tr>
            <tr><td><hr></td></tr> <!-- buat garis pembatas -->
            <tr>
                <td align="center">
                    <button type="submit" name="submit">Sign Up</button>
                   <!-- <a href=""><button type="button">Sign Up</button></a> -->
                </td>
            </tr>
        </table>
</fieldset>
</body>
</html>