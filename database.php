<?php 
 require_once("base.php");
 require_once(BASE_PATH . '/conn.php');


function getAllpemustaka(){
    global $DBH;
    $stmt = $DBH->prepare("SELECT * FROM pemustaka");
    $stmt->execute();
    return $stmt->fetchAll();
}

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


function totalbuku(){
    global $DBH;
    $stmt = $DBH->prepare("SELECT COUNT(*) as total From buku;");
    $stmt->execute();
    $result = $stmt->fetch();
    return $result["total"];
}
function isPemustakaNIM($NIM){
    global $DBH;
    $stmt = $DBH->prepare("SELECT * From pemustaka where noIndukPemustaka = :NIM;");
    $stmt->bindParam(':NIM', $NIM);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

function detailbuku($idBuku){
    global $DBH;
    $stmt = $DBH->prepare("SELECT * FROM buku WHERE idBuku = :idBuku");
    $stmt->bindParam(':idBuku', $idBuku);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

 ?>
