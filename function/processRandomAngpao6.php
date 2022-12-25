<?php 

session_start();

$angpaoPaket6 = [
    '2-month',
    '1-month',
    '1-week'
];

shuffle($angpaoPaket6);
$angpaoPaket6[0];

$tmpAngpao = $angpaoPaket6[0];

$_SESSION['tmpangpao'] = $tmpAngpao;


if(isset($_SESSION['tmpangpao'])) {
    header("Location: hadiah2.php?click=true");
    die();
}
?>