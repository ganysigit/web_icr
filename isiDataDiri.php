<?php
session_start();
var_dump($_SESSION['tmpnama_anak']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/isiDataDiri.css">
    <title>I Can Read - Isi Data Diri</title>
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
            <div class="flex-column cont-form">
                    <!--------------- Logo  --------------->
                    <div class="d-flex justify-content-center">
                        <img class="logo" src="assets/page1/logo.png" alt="" width="720">
                    </div>
                    <!--------------- Form Isi Data  --------------->
                    <form method="POST" action="pilihPaketBelajar.php">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Nama Anak</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_anak" placeholder="Alessia Han">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Umur Anak</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="umur_anak" placeholder="12">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Asal Sekolah</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="asal_sekolah" placeholder="SD Aditama">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Nama Orang Tua</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_orangtua" placeholder="Mellie Han">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">No. HP Orang Tua</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nohp_orangtua" placeholder="08626365618">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Provinsi</h4></label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-sm example" name="provinsi">
                                    <option selected>Provinsi</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Centre Terdekat</h4></label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-sm example" name="centre_terdekat">
                                    <option selected>Pilih Centre Terdekat</option>
                                    <option value="alam_suteru">Alam Suter</option>
                                    <option value="bintaro">Bintaro</option>
                                </select>
                            </div>
                        </div>
                        <!--------------- Button Submit  --------------->
                        <div class="button-selesai d-flex justify-content-end">
                            <button type="submit" name="submit" style="border: 0; all:unset; cursor: pointer;" >
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