<?php

if(isset($_SESSION['ID']))
{
    include_once __DIR__ . "/../view/barraSupRegistered.php";
}
else
{
    include_once __DIR__ . "/../view/barraSup.php";
}
?>