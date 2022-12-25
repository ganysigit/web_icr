<?php 

session_start();

//Cek session ada atau tidak
if(isset($_SESSION['tmpnama_anak'])) {
    $tmpnama_anak = $_SESSION['tmpnama_anak'];
    $tmpumur_anak = $_SESSION['tmpumur_anak'];
    $tmpasal_sekolah = $_SESSION['tmpasal_sekolah'];
    $tmpnama_orangtua = $_SESSION['tmpnama_orangtua'];
    $tmpnohp_orangtua = $_SESSION['tmpnohp_orangtua'];
    $tmpprovinsi = $_SESSION['tmpprovinsi'];
    $tmpcentre_terdekat = $_SESSION['tmpcentre_terdekat'];

} else {
    $tmpnama_anak = [];
    $tmpumur_anak = [];
    $tmpasal_sekolah = [];
    $tmpnama_orangtua = [];
    $tmpnohp_orangtua = [];
    $tmpprovinsi = [];
    $tmpcentre_terdekat = [];
}

$tmpnama_anak = [];
$tmpumur_anak = [];
$tmpasal_sekolah = [];
$tmpnama_orangtua = [];
$tmpnohp_orangtua = [];
$tmpprovinsi = [];
$tmpcentre_terdekat =[];

//Cek hasil data
if(isset($_POST['nama_anak'])) {
    $tmpnama_anak[] = $_POST['nama_anak'];
    $tmpumur_anak[] = $_POST['umur_anak'];
    $tmpasal_sekolah[] = $_POST['asal_sekolah'];
    $tmpnama_orangtua[] = $_POST['nama_orangtua'];
    $tmpnohp_orangtua[] = $_POST['nohp_orangtua'];
    $tmpprovinsi[] = $_POST['provinsi'];
    $tmpcentre_terdekat[] = $_POST['centre_terdekat'];
}

//Save output to session
$_SESSION['tmpnama_anak'] = $tmpnama_anak;
$_SESSION['tmpumur_anak'] = $tmpumur_anak;
$_SESSION['tmpasal_sekolah'] = $tmpasal_sekolah;
$_SESSION['tmpnama_orangtua'] = $tmpnama_orangtua;
$_SESSION['tmpnohp_orangtua'] = $tmpnohp_orangtua;
$_SESSION['tmpprovinsi'] = $tmpprovinsi;
$_SESSION['tmpcentre_terdekat'] = $tmpcentre_terdekat;
?>