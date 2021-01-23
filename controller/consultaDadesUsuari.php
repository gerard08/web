<?php

include_once __DIR__ . "/../model/connectaBD.php";
include_once __DIR__ . "/../model/getUserData.php";

$connexio=connectaBD();
$data = getUserData($connexio, intval($_SESSION['ID']));


?>