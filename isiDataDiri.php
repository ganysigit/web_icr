<?php
session_start();
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
                    <form method="POST" action="pilihPaketBelajar.php" name="thisForm" onsubmit="return validateForm()">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Nama Anak</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_anak" placeholder="Alessia Han" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Umur Anak</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="umur_anak" placeholder="12" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Asal Sekolah</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="asal_sekolah" placeholder="SD Aditama" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Nama Orang Tua</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_orangtua" placeholder="Mellie Han" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">No. HP Orang Tua</h4></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nohp_orangtua" placeholder="08626365618" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><h4 class="form-name">Centre Terdekat</h4></label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-sm example" name="centre_terdekat" required>
                                    <option value="">Pilih Centre Terdekat</option>
                                    <option value="alam_sutera">TANGERANG - ALAM SUTERA</option>
                                    <option value="gading_serpong">TANGERANG - GADING SERPONG</option>
                                    <option value="bsd_city1">TANGERANG - BSD CITY 1</option>
                                    <option value="bsd_city2">TANGERANG - BSD CITY 2</option>
                                    <option value="green_lake">TANGERANG - GREEN LAKE</option>
                                    <option value="karawaci">TANGERANG - KARAWACI</option>
                                    <option value="modernland">TANGERANG - MODERNLAND</option>
                                    <option value="bintaro">TANGERANG SELATAN - BINTARO</option>
                                    <option value="ciputat">TANGERANG SELATAN - CIPUTAT</option>
                                    <option value="citra2_dan_mogot">JAKARTA - CITRA 2 DAN MOGOT</option>
                                    <option value="citra_raya_cikupa">JAKARTA - CITRA RAYA CIKUPA</option>
                                    <option value="gajah_mada">JAKARTA - GAJAH MADA</option>
                                    <option value="green_ville">JAKARTA - GREENVILLE</option>
                                    <option value="kalimalang">JAKARTA - KALIMALANG</option>
                                    <option value="kelapa_gading">JAKARTA - KELAPA GADING</option>
                                    <option value="kemang">JAKARTA - KEMANG</option>
                                    <option value="menteng">JAKARTA - MENTENG</option>
                                    <option value="pantai_indah_kapuk">JAKARTA - PANTAI INDAH KAPUK</option>
                                    <option value="permata_hijau">JAKARTA - PERMATA HIJAU</option>
                                    <option value="pondok_indah">JAKARTA - PONDOK INDAH</option>
                                    <option value="puri_indah">JAKARTA - PURI INDAH</option>
                                    <option value="rawamangun">JAKARTA - RAWAMANGUN</option>
                                    <option value="summarecon_bekasi">BEKASI - SUMMARECON BEKASI</option>
                                    <option value="sunter">JAKARTA - SUNTER</option>
                                    <option value="taman_aries">JAKARTA - TAMAN ARIES</option>
                                    <option value="taman_palem">JAKARTA - TAMAN PALEM</option>
                                    <option value="cinere">DEPOK - CINERE</option>
                                    <option value="depok">DEPOK - DEPOK</option>
                                    <option value="grand_galaxy">BEKASI - GRAND GALAXY</option>
                                    <option value="harapan_indah">BEKASI - HARAPAN INDAH</option>
                                    <option value="bali_renon">BALI - BALI - RENON</option>
                                    <option value="bandung_kbp">BANDUNG - BANDUNG - KBP</option>
                                    <option value="bandung_mekarwangi">BANDUNG  - MEKARWANGI</option>
                                    <option value="bandung_sukawangi">BANDUNG - SUKAWANGI</option>
                                    <option value="batam">BATAM - BATAM</option>
                                    <option value="bogor">BOGOR - BOGOR</option>
                                    <option value="karawang">KARAWANG - KARAWANG</option>
                                    <option value="cibubur_kota_wisata">CIBUBUR - KOTA WISATA</option>
                                    <option value="cikarang">CIKARANG - CIKARANG</option>
                                    <option value="lampung">LAMPUNG - LAMPUNG</option>
                                    <option value="makassar">MAKASSAR - MAKASSAR</option>
                                    <option value="malang">MALANG - MALANG</option>
                                    <option value="pekanbaru">PEKANBARU - PEKANBARU</option>
                                    <option value="pontianak">PONTIANAK - PONTIANAK</option>
                                    <option value="semarang">SEMARANG - SEMARANG</option>
                                    <option value="solo">SOLO - SOLO</option>
                                    <option value="surabaya_citraland">SURABAYA - CITRALAND</option>
                                    <option value="surabaya_pakuwon">SURABAYA - PAKUWON CITY</option>
                                    <option value="other">Lainnya</option>
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