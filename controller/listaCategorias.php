<?php
    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/consultaCategorias.php";
    $connexio=connectaBD();
    $categorias=consultaCategorias($connexio);
    include_once __DIR__ . "/../view/muestraCategorias.php";
?>