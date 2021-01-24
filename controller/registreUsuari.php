<?php
$nom = $_POST["nom"];
$edat = $_POST["edat"];
$correu = $_POST["correu"];
$contra = $_POST["contra"];
$contra2 = $_POST["contra2"];
$direccio = $_POST["dir"];
$poblacio = $_POST["pob"];
$codipost = $_POST["cp"];


include_once __DIR__ . '/../model/consultacorreu.php';
include_once __DIR__ . '/../model/register.php';
include_once __DIR__ . '/../model/connectaBD.php';

$connexio = connectaBD();
$resultat = consultaCorreu($connexio, $correu, $contra, $contra2, $direccio, $poblacio, $codipost);

if(!empty($resultat))
{
    include_once __DIR__ . '/../view/regResults/regNOK.php';
    return -1;
}
else
{
    $contra = password_hash($contra, PASSWORD_DEFAULT);
    $contra2 = password_hash($contra2, PASSWORD_DEFAULT);

    $res = registraUsuari($connexio, $nom, $edat, $contra, $correu, $direccio, $poblacio, $codipost);
    if($res)
    {
        include_once __DIR__ . '/../model/getUserID.php';

        $result = consultaID($connexio, $correu);


        session_start();
        $_SESSION['nom'] = $result[0]['nom'];
        //echo session_id();
        $_SESSION['ID'] = $result[0]['id'];

        echo "<script>window.location = '/?p='</script>";
        return;
    }
    echo "<script>window.location = '/?p=login'</script>";
    return;
}



?>