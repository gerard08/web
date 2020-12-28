<?php
    $ID=$_GET['id'];

    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/consultarInfoProducte.php";

    $connexio=connectaBD();
    $infoProducte=getInfo($connexio, $ID);
    include_once __DIR__ . "/../view/viewInfo.php";
?>


