<?php

require_once('function.php');
$email = $password = "";
$error_email = $error_password = "";

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


if (!tidak_boleh_kosong($email)) {
	$error_email = "masukkan wajib diisi";
} elseif (!validasiEmail($email)) {
	$error_email = "masukkan wajib format email";
} 

if (!tidak_boleh_kosong($password)) {
	$error_password = "masukkan wajib diisi";
} elseif (!alfaNumerik($password)) {
	$error_password = "Password minimal 8 Karakter Mengandung Huruf Dan Angka";
}

if($error_email == "" && $error_password == "") {
    $succes = '<h3>Data Masuk</h3>';
    $email = $password = "";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Pemustaka</title>
</head>
<body>
    
    <h2 align="center">Selamat Datang di UNIPUSTAKA</h2><hr>
    <p align="center">Silahkan Login Terlebih Dahulu</p>

    <fieldset>
        <form method="POST" action="login.php">
        <table align="center">
            <tr>
                <td align="center">Email</td>
            </tr>
            <tr>
                <td align="center">
                    <input type="text" name="email" value="<?= $email; ?>" placeholder="Masukkan Email">
                </td>
            </tr>
            <tr>
                <td style="color:red; font:size-11px; align:center;">
                    <?= $error_email; ?>
                </td>
            </tr>
            <tr>
                <td align="center">Password</td>
            </tr>
            <tr>
                <td align="center">
                    <input type="text" name="password" value="<?= $password; ?>" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td style="color:red; font:size-11px; align:center;">
                    <?= $error_password; ?>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <button type="submit" name="submit"><a href="../pemustaka/index.php">Login</a></button>
                </td>
            </tr>
            <tr><td><hr></td></tr> <!-- buat garis pembatas -->
            <tr>
                <td align="center">
                    <a>Belum Punya Akun?</a>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a href="regist.php"><button type="button">Buat Akun Baru</button></a>
                </td>
            </tr>
        </table>
    </form>
    </fieldset>
</body>
</html>