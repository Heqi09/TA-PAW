<?php
require_once('../base.php');
require_once(BASE_PATH . '/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <?php include BASE_PATH . '/components/header.php'; ?>
    <div class="main-content">
        <h2 align="center">UNIPUSTAKA</h2>
    <fieldset>
    <form methode="post" action="">
    <table align="center">
        <tr>
            <td align="center">Username</td>
        </tr>
        <tr>
            <td><input type="text" name="username" placeholder="Masukkan Username Admin"></td>
        </tr>
        <tr>
            <td align="center">Password</td>
        </tr>
        <tr>
            <td><input type="text" name="password" placeholder="Masukkan Password"></td>
        </tr>
        <tr><td><hr></td></tr> <!-- buat garis pembatas -->
        <tr>
            <td align="center">
                <button type="button"><a href="../admin/admin.php">Sign In</a></button>
            </td>
        </tr>
    </table>
</fieldset>
    </div>
<?php include BASE_PATH . '/components/footer.php'; ?>
</body>
</html>