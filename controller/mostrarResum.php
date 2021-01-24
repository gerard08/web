<?php

include_once __DIR__ . "/../model/connectaBD.php";
include_once __DIR__ . "/../model/consultarInfoProducte.php";
include_once __DIR__ . "/../model/insertLineaComanda.php";
include_once __DIR__ . "/../model/getComanda.php";

session_start();
$connexio=connectaBD();
$produnic2=array_values(array_unique($_SESSION['cistella']));
$cantidades=array_count_values($_SESSION['cistella']);
$_SESSION['nProd']=$cantidades;
echo "AQUI LLEGA 1";

foreach($produnic2 as $pid){
    echo "AQUI LLEGA $pid";
    $producte=getInfo($connexio, $pid);
    echo "HACE GETPROD";
    $comandaid=getComanda($connexio, $_SESSION['ID']);
    echo "HACE GETCOM";

    $resultat=insertLineaComanda($connexio, $pid, $comandaid[0]["max(c.id)"], $_SESSION['preu'], $producte[0]['preu'],
        $cantidades[$pid], $producte[0]['nom']);
    echo "INSERTLINEACOM";
}



?>