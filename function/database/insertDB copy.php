<?php

//Koneksi ke Database
$conn = mysqli_connect("http://127.0.0.1", "u761026598_luckyAngpao", "d0RDuNUC/D]", "u761026598_lucky_angpao");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// --- > Call All Session Saved Before
$dataNamaAnak = $_SESSION['tmpnama_anak'];
$dataUmurAnak = $_SESSION['tmpumur_anak'];
$dataAsalSekolah = $_SESSION['tmpasal_sekolah'];
$dataNamaOrangtua = $_SESSION['tmpnama_orangtua'];
$dataNohpOrangtua = $_SESSION['tmpnohp_orangtua'];
$dataCentreTerdekat = $_SESSION['tmpcentre_terdekat'];

$dataPaket = $_SESSION['tmppaket'];
$dataHadiahAngpao = $_SESSION['tmpangpao'];

// --- > Convert Array to String
$NamaAnak = implode("", $dataNamaAnak);
$UmurAnak = implode("", $dataUmurAnak);
$AsalAnak = implode("", $dataAsalSekolah);
$NamaOrangtua = implode("", $dataNamaOrangtua);
$NohpOrangtua = implode("", $dataNohpOrangtua);
$CentreTerdekat = implode("", $dataCentreTerdekat);

$Paket = implode("", $dataPaket);
$HadiahAngpao = $dataHadiahAngpao;

$sql = "INSERT INTO lucky_angpao (nama_anak, umur_anak, asal_sekolah, nama_orangtua, nohp_orangtua, centre_terdekat, paket_dipilih, hadiah_angpao)
        VALUES ('$NamaAnak', '$UmurAnak', '$AsalAnak', '$NamaOrangtua', '$NohpOrangtua', '$CentreTerdekat', '$Paket', '$HadiahAngpao')";
mysqli_query($conn, $sql);

?>