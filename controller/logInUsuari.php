<?php
$correu = $_GET["correu"];
$contra = $_GET["contra"];

//$contra = password_hash($contra, PASSWORD_DEFAULT);

include_once __DIR__ . '/../model/connectaBD.php';
include_once __DIR__ . '/../model/logIn.php';


$connexio = connectaBD();
$resposta = logIn($connexio, $correu, $contra);


if($resposta != NULL)
{
    include_once __DIR__ . '/../view/logResults/logOK.php';
    include_once __DIR__ . '/../model/getUserID.php';
    $result = consultaID($connexio, $correu);
    session_start();
    //echo session_id();
    $_SESSION['ID'] = $result[0]['id'];
    $_SESSION['nom'] = $result[0]['nom'];
}
else
{
    include_once __DIR__ . '/../view/logResults/logNOK.php';
}

?>