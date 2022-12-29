<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>I Can Read</title>
</head>
<body>

    <audio id="audioplayer" src="assets/audio/bg_audio.mp3" type="audio/mpeg" loop="loop"></audio>
    <script>
        window.onload = function() {
            document.getElementById("audioplayer").play();
        }
    </script>


    <div class="bg-img">
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

                <div class="mt-5 d-flex justify-content-center">
                    <img class="logo" src="assets/page1/logo.png" alt="" width="720">
                </div>

                <div class="mt-5 d-flex justify-content-center">
                    <a href="isiDataDiri.php">
                        <img class="daftar-button" src="assets/page1/daftar_button.png" alt="" width="360">
                    </a>
                </div>

                <div class="d-flex justify-content-center">
                        <img class="bottom-img" src="assets/page1/bottom_img.png" alt="daftar" width="1020">
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>