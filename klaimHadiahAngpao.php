<?php
session_start();

if(!isset($_SESSION['tmpangpao'])) {
    header("Location: index.php");
} else {
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
    <title>I Can Read - Klaim Hadiah Angpao</title>
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
            </div>
        </div>
        <!--------------- Gambar Hadiah Angpao --------------->
        <?php
            if (isset($_GET['click'])) {
                angpaoLotre();
            }

            

            function angpaoLotre() {
                global $tmpangpao;
                if($tmpangpao == "2-month") {
                    ?>
                    <div class="mt-5 d-flex justify-content-center">
                        <img src="assets/imgPrize/prizePaket12_2bln.png" alt="" width="1000">
                    </div>
                    <?php
                } elseif ($tmpangpao == "1-month") {
                    ?>
                    <div class="mt-5 d-flex justify-content-center">
                        <img src="assets/imgPrize/prizePaket12_1bln.png" alt="" width="1000">
                    </div>
                    <?php
                } elseif ($tmpangpao == "1-week") {
                    ?>
                    <div class="mt-5 d-flex justify-content-center">
                        <img src="assets/imgPrize/prizePaket12_1week.png" alt="" width="1000">
                    </div>
                    <?php
                }
            }

        ?>
        <!--------------- Gambar Hadiah Angpao --------------->
        <div class="pb-5 d-flex justify-content-center">
            <a href="function/processDone.php">
                <img class="daftar-button" src="assets/child_page2/button_selesai.png" alt="" width="360">
            </a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>