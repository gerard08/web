<?php
    $element=$_GET['pid'];
    $preu=$_GET['price'];
    session_start();
    $_SESSION['preu'] += $preu;


    include_once __DIR__ . "/../model/addcart.php";
    return afegir($element);

?>
