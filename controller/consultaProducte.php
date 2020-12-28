<?php
    $ID=$_GET['id'];

    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/getProductes.php";

    $connexio=connectaBD();
    $producte=getProductes($connexio, $ID);
    include_once __DIR__ . "/../view/viewProductes.php";
?>