<?php 

session_start();

$angpaoPaket12 = [
    '1-week',
    '1-month',
    '2-month'
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