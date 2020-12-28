<?php
$nom = $_GET["nom"];
$edat = $_GET["edat"];
$correu = $_GET["correu"];
$contra = $_GET["contra"];
$contra2 = $_GET["contra2"];


include_once __DIR__ . '/../model/consultacorreu.php';
include_once __DIR__ . '/../model/register.php';
include_once __DIR__ . '/../model/connectaBD.php';

$connexio = connectaBD();

$resultat = consultaCorreu($connexio, $correu, $contra, $contra2);

if(!empty($resultat))
{
    include_once __DIR__ . '/../view/regResults/regNOK.php';
    return -1;
}
else
{
    $contra = password_hash($contra, PASSWORD_DEFAULT);
    $contra2 = password_hash($contra2, PASSWORD_DEFAULT);

    $res = registraUsuari($connexio, $nom, $edat, $contra, $correu);
    if($res)
    {
        include_once __DIR__ . '/../view/regResults/regOK.php';
        include_once __DIR__ . '/../model/getUserID.php';

        $result = consultaID($connexio, $correu);


        session_start();
        $_SESSION['nom'] = $result[0]['nom'];
        //echo session_id();
        $_SESSION['ID'] = $result[0]['id'];

        return false;
    }
}



?>