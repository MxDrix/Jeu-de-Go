<?php 
include('model/_autoloader.php');
$ord = $_POST['ord'];
$abs = $_POST['abs'];

$goban = new Goban(13);
$joueur1 = new Joueur(1,"jean");
$joueur2 = new Joueur(2,"pierre");

$place = $goban->placer_pierre($ord, $abs, $joueur1);
if($place === false){
    echo 0;
}else{
    echo 2;
}