<?php
include "function/getSessionDataDiri.php";
$tmpnama_anak = $_SESSION['tmpnama_anak'];
$tmpumur_anak = $_SESSION['tmpumur_anak'];
$tmpasal_sekolah = $_SESSION['tmpasal_sekolah'];
$tmpnama_orangtua = $_SESSION['tmpnama_orangtua'];
$tmpnohp_orangtua = $_SESSION['tmpnohp_orangtua'];
$tmpcentre_terdekat = $_SESSION['tmpcentre_terdekat'];

$dataAll = array_merge($tmpnama_anak, $tmpumur_anak, $tmpasal_sekolah, $tmpnama_orangtua, $tmpnohp_orangtua, $tmpcentre_terdekat);
echo implode(", ", $dataAll);

if($tmpnama_anak == '') {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/pilihPaketBelajar.css">
    <title>I Can Read - Paket Belajar</title>
</head>
<body>

    <div class="bg-img">
        <!--------------- Tulisan di Kiri dan Kanan  --------------->
        <div class="container-sm d-flex justify-content-between top-text pt-5">
            <div class="d-flex align-items-center ">
                <img class="text-tl" src="assets/page1/bg_text_top_left.png" alt="">
            </div>

            <div class="d-flex align-items-center">
                <img class="text-tr" src="assets/page1/bg_test_top_right.png" alt="">
            </div>
        </div>
        
        
        <div class="container d-flex justify-content-center">
            <div class="flex-column">
                <!--------------- Logo --------------->
                <div class="mt-5 d-flex justify-content-center">
                    <img class="logo" src="assets/page1/logo.png" alt="">
                </div>
                <!--------------- Tulisan Pilih Paketmu  --------------->
                <div class="pb-5 d-flex justify-content-center">
                    <img class="logo" src="assets/child_page3/font_pilihpaketbelajar.png" alt="" width="720">
                </div>
                <!--------------- Gambar Paket  --------------->
                <form action="pilihAngpao.php" method="POST">
                    <div class="pb-5 d-flex justify-content-center" style="width: 100%;">
                        <div class="d-flex flex-column mb-3">

                            <input id="paket12" type="radio" class="input-hidden" name="paket" value="paket_12" class="mt-3" style="width: 600px;">
                            <label for="paket12" class="d-flex flex-column mb-3 pilih-paket">
                                <img src="assets/child_page3/paket12.png" alt="paket12">
                            </label>
                            
                        </div>

                        <div class="d-flex flex-column mb-3">
                            
                            <input id="paket6" type="radio" class="input-hidden" name="paket" value="paket_6" class="mt-3" style="width: 600px;">
                            <label for="paket6" class="d-flex flex-column mb-3 pilih-paket">
                                <img src="assets/child_page3/paket6.png" alt="paket6" >
                            </label>
                        
                        </div>
                    </div>
                
                    <!--------------- Button Submit  --------------->
                    <div class="d-flex justify-content-center pb-5">
                        <button class="btn-img" type="submit" name="submit" style="border: 0; background: none;" >
                            <img src="assets/child_page2/button_selesai.png" alt="submit" width="268px">
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>