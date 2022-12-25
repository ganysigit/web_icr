<?php
session_start();
$tmpnama_anak = $_SESSION['tmpnama_anak'];
$tmpumur_anak = $_SESSION['tmpumur_anak'];
$tmpasal_sekolah = $_SESSION['tmpasal_sekolah'];
$tmpnama_orangtua = $_SESSION['tmpnama_orangtua'];
$tmpnohp_orangtua = $_SESSION['tmpnohp_orangtua'];
$tmpprovinsi = $_SESSION['tmpprovinsi'];
$tmpcentre_terdekat = $_SESSION['tmpcentre_terdekat'];
$tmppaket = $_SESSION['tmppaket'];
$tmpangpao = $_SESSION['tmpangpao'];

$dataAll = array_merge($tmpnama_anak, $tmpumur_anak, $tmpasal_sekolah, $tmpnama_orangtua, $tmpnohp_orangtua, $tmpprovinsi, $tmpcentre_terdekat, $tmppaket,);
echo implode(", ", $dataAll) . ", " . $tmpangpao;

// ---------- > Convert Array to String < ---------- //
$centre_terdekat = implode("", $tmpcentre_terdekat);

// ---------- > Whatsapp Start Chat < ---------- //
$waStartChat = "https://wa.me/";

// ---------- > Conditional Number Whatsapp Start Chat < ---------- //
if($centre_terdekat == 'alam_sutera') {
    // ---------- > 01 Alam Sutera Number < ---------- //
    $num = '6287776662707';
    header("Location: https://wa.me/$num");
} 

elseif($centre_terdekat == 'bintaro') {
    // ---------- > 02 Bintaro Number < ---------- //
    $num = '6281775014422';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bsd_city1') {
    // ---------- > 03 BSD CITY 1 Number < ---------- //
    $num = '6281808131486';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bsd_city2') {
    // ---------- > 04 BSD CITY 2 Number < ---------- //
    $num = '6281386190099';
    header("Location: https://wa.me/$num");
}
?>