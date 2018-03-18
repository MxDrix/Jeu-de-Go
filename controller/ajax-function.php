<?php

include('../model/_autoloader.php');
session_start();

$ord = $_POST['ord'];
$abs = $_POST['abs'];

$goban = $_SESSION['goban'];
$joueur = $_SESSION[$_POST['joueur']];

$place = $goban->placer_pierre($abs, $ord, $joueur);
if ($place === false) {
    echo 0;
} else {
    echo json_encode($place);
}