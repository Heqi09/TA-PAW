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
 ?>