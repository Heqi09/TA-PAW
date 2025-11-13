<?php
require_once('../base.php');
require_once(BASE_PATH . '/database.php');
?>

<link rel="stylesheet" href="../assets/style.css">

<?php
include BASE_PATH . '/components/header.php';
?>

<!-- Main Content -->
<div class="container">
    <h2>Daftar Pemustaka</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemustaka</th>
                <th>NIM/NIP</th>
                <th>Program Studi</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Budi Susanto</td>
                <td>22541001</td>
                <td>Teknik Informatika</td>
                <td>budi@mail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Citra Handayani</td>
                <td>22541002</td>
                <td>Sistem Informasi</td>
                <td>citra@mail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dewi Purnama</td>
                <td>22541003</td>
                <td>Teknologi Informasi</td>
                <td>dewi@mail.com</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ahmad Santoso</td>
                <td>22541004</td>
                <td>Manajemen Informatika</td>
                <td>ahmad@mail.com</td>
            </tr>
        </tbody>
    </table>


    <div class="back-button-container">
        <a href="admin.php" class="back-button">Kembali</a>
    </div>
</div>

<?php include BASE_PATH . '/components/footer.php'; ?>

</body>
</html>