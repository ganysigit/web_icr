<?php

session_start();
require "./database/insertDB.php";

$tmpnama_anak = $_SESSION['tmpnama_anak'];
$tmpumur_anak = $_SESSION['tmpumur_anak'];
$tmpasal_sekolah = $_SESSION['tmpasal_sekolah'];
$tmpnama_orangtua = $_SESSION['tmpnama_orangtua'];
$tmpnohp_orangtua = $_SESSION['tmpnohp_orangtua'];
$tmpcentre_terdekat = $_SESSION['tmpcentre_terdekat'];
$tmppaket = $_SESSION['tmppaket'];
$tmpangpao = $_SESSION['tmpangpao'];

$dataAll = array_merge($tmpnama_anak, $tmpumur_anak, $tmpasal_sekolah, $tmpnama_orangtua, $tmpnohp_orangtua, $tmpcentre_terdekat, $tmppaket,);
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

elseif($centre_terdekat == 'citra2_dan_mogot') {
    // ---------- > 05 CITRA 2 DAN MOGOT Number < ---------- //
    $num = '628119420991';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'citra_raya_cikupa') {
    // ---------- > 06 CITRA RAYA CIKUPA Number < ---------- //
    $num = '6287882309509';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'cinere') {
    // ---------- > 07 CINERE Number < ---------- //
    $num = '6281217777920';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'ciputat') {
    // ---------- > 08 CIPUTAT Number < ---------- //
    $num = '6281977889901';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'depok') {
    // ---------- > 09 DEPOK Number < ---------- //
    $num = '628119799488';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'gading_serpong') {
    // ---------- > 10 GADING SERPONG Number < ---------- //
    $num = '6282114352109';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'gajah_mada') {
    // ---------- > 11 GAJAH MADA Number < ---------- //
    $num = '6281218008090';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'grand_galaxy') {
    // ---------- > 12 GRAND GALAXY Number < ---------- //
    $num = '6281717172881';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'green_lake') {
    // ---------- > 13 GREEN LAKE Number < ---------- //
    $num = '6281212994112';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'green_ville') {
    // ---------- > 14 GREEN VILLE Number < ---------- //
    $num = '6281807080915';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'harapan_indah') {
    // ---------- > 15 HARAPAN INDAH Number < ---------- //
    $num = '6281382197123';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'kalimalang') {
    // ---------- > 16 KALIMALANG Number < ---------- //
    $num = '6282125992425';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'karawaci') {
    // ---------- > 17 KARAWACI Number < ---------- //
    $num = '6285715140327';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'kelapa_gading') {
    // ---------- > 18 KELAPA GADING Number < ---------- //
    $num = '6289505400760';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'kemang') {
    // ---------- > 19 KEMANG Number < ---------- //
    $num = '6287789227623';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'menteng') {
    // ---------- > 20 MENTENG Number < ---------- //
    $num = '6282122382323';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'modernland') {
    // ---------- > 21 MODERNLAND Number < ---------- //
    $num = '628567865888';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'pantai_indah_kapuk') {
    // ---------- > 22 PANTAI INDAH KAPUK Number < ---------- //
    $num = '6281292975192';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'permata_hijau') {
    // ---------- > 23 PERMATA HIJAU Number < ---------- //
    $num = '6281388003331';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'pondok_indah') {
    // ---------- > 24  PONDOK INDAH Number < ---------- //
    $num = '6282125992425';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'puri_indah') {
    // ---------- > 25 PURI INDAH Number < ---------- //
    $num = '6281398506392';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'rawamangun') {
    // ---------- > 26 RAWAMANGUN Number < ---------- //
    $num = '6281927778872';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'summarecon_bekasi') {
    // ---------- > 27 SUMMARECON BEKASI Number < ---------- //
    $num = '6287880469515';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'sunter') {
    // ---------- > 28 SUNTER Number < ---------- //
    $num = '6287877739609';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'taman_aries') {
    // ---------- > 29 TAMAN ARIES Number < ---------- //
    $num = '6287700786888';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'taman_palem') {
    // ---------- > 30 TAMAN PALEM Number < ---------- //
    $num = '6282120222151';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bali_renon') {
    // ---------- > 31 BALI RENON Number < ---------- //
    $num = '628113980303';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bandung_kbp') {
    // ---------- > 32 BANDUNG KBP Number < ---------- //
    $num = '6287823482017';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bandung_mekarwangi') {
    // ---------- > 33 BANDUNG MEKARWANGI Number < ---------- //
    $num = '6281222851902';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bandung_sukawangi') {
    // ---------- > 34 BANDUNG SUKAWANGI Number < ---------- //
    $num = '6281221786679';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'batam') {
    // ---------- > 35 BATAM Number < ---------- //
    $num = '628117709922';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'bogor') {
    // ---------- > 36 BOGOR Number < ---------- //
    $num = '6281230006263';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'karawang') {
    // ---------- > 37 KARAWANG Number < ---------- //
    $num = '6281389031235';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'cibubur_kota_wisata') {
    // ---------- > 38 CIBUBUR KOTA WISATA Number < ---------- //
    $num = '6287711260688';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'cikarang') {
    // ---------- > 39 CIKARANG Number < ---------- //
    $num = '628119100180';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'lampung') {
    // ---------- > 40 LAMPUNG Number < ---------- //
    $num = '628117901100';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'makassar') {
    // ---------- > 41 MAKASSAR Number < ---------- //
    $num = '6285255251539';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'malang') {
    // ---------- > 42 MALANG Number < ---------- //
    $num = '6287766687889';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'pekanbaru') {
    // ---------- > 43 PEKANBARU Number < ---------- //
    $num = '6282285859977';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'pontianak') {
    // ---------- > 44 PONTIANAK Number < ---------- //
    $num = '6285849803500';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'semarang') {
    // ---------- > 45 SEMARANG Number < ---------- //
    $num = '628112933031';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'solo') {
    // ---------- > 46 SOLO Number < ---------- //
    $num = '628988889696';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'surabaya_citraland') {
    // ---------- > 47 SURABAYA CITRALAND Number < ---------- //
    $num = '6287751286658';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'surabaya_pakuwon') {
    // ---------- > 48 SURABAYA PAKUWON Number < ---------- //
    $num = '6281703316698';
    header("Location: https://wa.me/$num");
}

elseif($centre_terdekat == 'other') {
    // ---------- > 49 OTHER Number < ---------- //
    $num = '6281377301200';
    header("Location: https://wa.me/$num");
}

else {
    echo 'Error Centre Terdekat Not Found';
}

// ---------- > Destroy Whole Session < ---------- //
session_destroy();

?>