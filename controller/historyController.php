<?php

include_once __DIR__ . '/../model/connectaBD.php';
include_once __DIR__ . '/../model/obtenirComandes.php';
include_once __DIR__ . '/../model/obtenirLiniaComanda.php';
include_once __DIR__ . '/../model/consultarInfoProducte.php';



$connexio = connectaBD();

$comandes = getComandes($connexio, $_SESSION['ID']);

$i=0;
$info=0;
$imatges=array();
foreach ($comandes as $c)
{
    $productes = getLiniaComanda($connexio, $c['id']);
    //var_dump($productes);
    //echo "si    ";
    for($i=0; $i<count($productes); $i++){
        $info = getInfo($connexio, $productes[0]['producteID']);
        die(json_encode($info[0]));
        array_push($imatges, $info[0]['imatges']);
    }


    die(json_encode($info[0]['imatge']));
    include __DIR__ . '/../view/comandes.php';

}

?>