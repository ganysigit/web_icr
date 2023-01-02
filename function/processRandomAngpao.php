<?php

session_start();

$tmppaket = $_SESSION['tmppaket'];
$paket = implode($tmppaket);



if($paket == 'paket_6') {
    header("Location: processRandomAngpao6.php");
} elseif($paket == 'paket_12') {
    header("Location: processRandomAngpao12.php");
} else {
    alert("Isi Pilihan Paket Terlebih Dahulu");
    header("Location: ../pilihPaketBelajar.php");
}

?>