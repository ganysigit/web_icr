<?php
include "function/getSessionPaket.php";
$tmpnama_anak = $_SESSION['tmpnama_anak'];
$tmpumur_anak = $_SESSION['tmpumur_anak'];
$tmpasal_sekolah = $_SESSION['tmpasal_sekolah'];
$tmpnama_orangtua = $_SESSION['tmpnama_orangtua'];
$tmpnohp_orangtua = $_SESSION['tmpnohp_orangtua'];
$tmpprovinsi = $_SESSION['tmpprovinsi'];
$tmpcentre_terdekat = $_SESSION['tmpcentre_terdekat'];
$tmppaket = $_SESSION['tmppaket'];

$dataAll = array_merge($tmpnama_anak, $tmpumur_anak, $tmpasal_sekolah, $tmpnama_orangtua, $tmpnohp_orangtua, $tmpprovinsi, $tmpcentre_terdekat, $tmppaket);
echo implode(", ", $dataAll);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/pilihPaketBelajar.css">
    <title>I Can Read</title>
</head>
<body>
    <div class="bg-img">
        <!--------------- Tulisan di Kiri dan Kanan  --------------->
        <div class="container-sm d-flex justify-content-between top-text pt-5">
            <div class="d-flex align-items-center ">
                <img src="assets/page1/bg_text_top_left.png" alt="" width="400px">
            </div>

            <div class="d-flex align-items-center">
                <img src="assets/page1/bg_test_top_right.png" alt="" width="400px">
            </div>
        </div>
        
        
        <div class="container d-flex justify-content-center">
            <div class="flex-column">
                <!--------------- Logo --------------->
                <div class="mt-5 d-flex justify-content-center">
                    <img class="logo" src="assets/page1/logo.png" alt="" width="360">
                </div>
                <!--------------- Font Pilih Satu Angpao --------------->
                <div class="d-flex justify-content-center">
                    <img class="logo" src="assets/child_page4/font_pilihsatuangpao.png" alt="" width="720">
                </div>
                <!--------------- Gambar 3 Angpao  --------------->
                <div class="d-flex flex-row">
                    <a href="function/processRandomAngpao12.php">
                        <img src="assets/child_page4/angpao.png" alt="" width="400">
                    </a>

                    <a href="function/processRandomAngpao12.php">
                        <img src="assets/child_page4/angpao.png" alt="" width="400">
                    </a>

                    <a href="function/processRandomAngpao12.php">
                        <img src="assets/child_page4/angpao.png" alt="" width="400">
                    </a>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>