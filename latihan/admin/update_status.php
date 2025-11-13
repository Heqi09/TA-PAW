<?php
require_once('../base.php');
require_once(BASE_PATH . '/database.php');
?>

<link rel="stylesheet" href="../assets/style.css">

<?php
include BASE_PATH . '/components/header.php';
?>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <h2>Tabel Peminjaman</h2>

        <div class="table-container">
            <table class="status-table full-screen">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tia Sukma</td>
                        <td>Belajar PHP Dasar</td>
                        <td>Permohonan</td>
                        <td>
                            <select class="status-select">
                                <option>Permohonan</option>
                                <option>Dipinjam</option>
                                <option>Telah Selesai Dipinjam</option>
                            </select>
                            <button class="add-button">Tambahkan</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alin Putri</td>
                        <td>Dasar Jaringan Komputer</td>
                        <td>Dipinjam</td>
                        <td>
                            <select class="status-select">
                                <option>Permohonan</option>
                                <option selected>Dipinjam</option>
                                <option>Telah Selesai Dipinjam</option>
                            </select>
                            <button class="add-button">Tambahkan</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Zaki Ahmad</td>
                        <td>Desain Web Modern</td>
                        <td>Telah Selesai Dipinjam</td>
                        <td>
                            <select class="status-select">
                                <option>Permohonan</option>
                                <option>Dipinjam</option>
                                <option selected>Telah Selesai Dipinjam</option>
                            </select>
                            <button class="add-button">Tambahkan</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="back-button-container">
                <a href="admin.php" class="back-button">Kembali</a>
            </div>
        </div>
    </main>
    <?php include BASE_PATH . '/components/footer.php'; ?>

</body>
</html>
