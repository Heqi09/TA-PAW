<?php 
require_once(BASE_PATH . '/base.php');
require_once(BASE_PATH . '/database.php');

$pemustaka = ambilpemustaka(1); 
?>

<div class="header">
        <div class="logo-section">
            <div class="logo"><img src="../assets/LOGO1.png"></div>
            <div class="logo-text">
                <h1>UNIPUSTAKA</h1>
                <p>Perpustakaan Kampus</p>
            </div>
        </div>
        <div class="profile-btn">
            <div class="profile-icon">👤</div>
            <span><?= $pemustaka['namaDepan']?></span>
        </div>
    </div>