<?php 

session_start();

$angpaoPaket12 = [
    '2-week_12',
    '1-month_12',
    '2-month_12'
];

shuffle($angpaoPaket12);
$angpaoPaket12[0];

$tmpAngpao = $angpaoPaket12[0];

$_SESSION['tmpangpao'] = $tmpAngpao;


if(isset($_SESSION['tmpangpao'])) {
    header("Location: ../klaimHadiahAngpao.php?click=true");
    die();
}

?>