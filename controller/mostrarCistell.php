<?php

include_once __DIR__ . "/../model/connectaBD.php";
include_once __DIR__ . "/../model/getCistell.php";

$connexio=connectaBD();
$produnic=array_values(array_unique($_SESSION['cistella']));
$cantidades=array_count_values($_SESSION['cistella']);
$producte=getCistella($connexio, $produnic);

include_once __DIR__ . "/../view/viewCistella.php";
?>