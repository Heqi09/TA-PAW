<?php

require_once('../function.php');
$username = $password = "";
$error_username = $error_password = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

if(!tidak_boleh_kosong($username)){
        $error_username = "Masukkan Wajib Diisi";
    } elseif(!alfabet($username)) {
        $error_username = "Masukkan Harus Alfabet";
    }

if(!tidak_boleh_kosong($password)){
        $error_password = "Masukkan Wajib Diisi";
    } elseif(!alfanumerik($password)) {
        $error_password = "Password minimal 8 Karakter Mengandung Huruf Dan Angka";
    }

if($error_username == "" && $error_password == "" ){

    $username = $password = "";
    $succes = '<h3>Login Admin Berhasil</h3>';
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>

    <link rel="stylesheet" href="login.css">
</head>
<body>
<h2 class="title">Selamat Datang di UNIPUSTAKA</h2>
<fieldset class="box">
    <form method="post" action="">
    <table class="tabel">
        <tr><td class="label">Username</td></tr>
        <tr><td><input type="text" name="username" placeholder="Masukkan Username" value="<?= $username; ?>"></td></tr>
        <tr><td class="error"><?= $error_username; ?></td></tr>

        <tr><td class="label">Password</td></tr>
        <tr><td><input type="text" name="password" placeholder="Masukkan Password" value="<?= $password; ?>"></td></tr>
        <tr><td class="error"><?= $error_password; ?></td></tr>

        <tr><td><hr></td></tr>

        <tr>
         <td>
          <button type="submit" name="submit">Sign In</button>
         </td>
        </tr>
    </table>
    </form>
</fieldset>
</body>
</html>
