<?php 

session_start();

$angpaoPaket6 = [
    '1-week',
    '2-week',
    '1-month'
];

shuffle($angpaoPaket6);
$angpaoPaket6[0];

$tmpAngpao = $angpaoPaket6[0];

$_SESSION['tmpangpao'] = $tmpAngpao;


if(isset($_SESSION['tmpangpao'])) {
    header("Location: ../klaimHadiahAngpao.php?click=true");
    die();
}

?>