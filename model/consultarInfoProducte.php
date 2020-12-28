<?php
function getInfo($connexio, $ID){
    try {
        $infoProducte=null;
        $query = "SELECT p.nom, p.id, p.specs, p.descripcio, p.imatge, p.preu FROM Producte p WHERE p.id='" . $ID . "'";
        $consultaInfo = $connexio->prepare($query);
        $consultaInfo->execute();
        $infoProducte = $consultaInfo->fetchALL(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($infoProducte);
}
?>