<?php 

session_start();

//Cek session ada atau tidak
if(isset($_SESSION['tmppaket'])) {
    $tmppaket = $_SESSION['tmppaket'];
} else {
    $tmppaket = [];
}

$tmppaket = [];

//Cek hasil data
if(isset($_POST['paket'])) {
    $tmppaket[] = $_POST['paket'];
} 

//Save output to session
$_SESSION['tmppaket'] = $tmppaket;


?>