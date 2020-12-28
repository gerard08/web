<?php
    $element=$_GET['pid'];
    session_start();
    include_once __DIR__ . "/../model/addcart.php";
    return afegir($element);

?>
