<?php
include_once __DIR__ . "/../model/connectaBD.php";
include_once __DIR__ . "/../model/guardaComanda.php";
$connexio=connectaBD();
$resultat=registraComanda($connexio, $_GET['id'], $_GET['nElements'], $_GET['precio']);

if($resultat){
    include_once __DIR__ . "/../view/viewConfirmacio.php";
}



?>
