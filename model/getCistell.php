<?php
function getCistella($connexio, $listaprod){
    try {
        $producte=array();
        $n = 0;

        foreach($listaprod as $prod) {
            $query = "SELECT p.nom, p.imatge, p.descripcio, p.preu, p.specs, p.id FROM Producte p WHERE p.id='" . $prod . "'";
            $consultaPortatiles = $connexio->prepare($query);
            $consultaPortatiles->execute();
            $producte[$n] = $consultaPortatiles->fetchALL(PDO::FETCH_ASSOC);
            $n++;
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($producte);
}
?>