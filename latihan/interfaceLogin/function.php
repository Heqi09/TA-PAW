<?php

function tidak_boleh_kosong($data) {
	return !empty($data);
}

function alfanumerik($data) {
    return preg_match("/^[a-zA-Z0-9\s]{9,}$/", $data);
}

function validasiEmail($email) {
    return preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email);
}

function alfabet($data){
	return preg_match("/^[a-zA-Z ]+$/", $data);
}

function numerik($data){
	return preg_match("/^[0-9]+$/",$data);
}

function panjang($data,$jumlah){
	return preg_match("/^.{{$jumlah}}$/",$data);
}


?>