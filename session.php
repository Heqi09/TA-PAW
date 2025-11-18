<?php
session_set_cookie_params(0);
session_start();

if(!isset($_SESSION['id'])){
    header("location:login/loginpemustaka.php");
    exit();
}
?>