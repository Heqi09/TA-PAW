<?php 
 require_once("base.php");
 require_once(BASE_PATH . '/conn.php');

// var_dump($DBH);

function getAllBuku(){
    global $DBH;
    $stmt = $DBH->prepare("SELECT * FROM buku");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBukuTerbaru($limit = 2){
    global $DBH;
    $stmt = $DBH->prepare("SELECT * FROM buku ORDER BY idBuku DESC LIMIT :limit");
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

function caribuku(){
    global $DBH;
    if (isset($_GET['search'])) {
        $searchInput = '%' . $_GET['search-input'] . '%';
        $stmt = $DBH->prepare("SELECT * FROM buku WHERE judulBuku LIKE :searchInput");
        $stmt->bindParam(':searchInput', $searchInput, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

function ambilpemustaka($idPemustaka){
    global $DBH;
    $stmt = $DBH->prepare("SELECT * FROM pemustaka WHERE idPemustaka = :idPemustaka");
    $stmt->bindParam(':idPemustaka', $idPemustaka, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}
 ?>