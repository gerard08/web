<?php
function getProductes($connexio, $ID){
    try {

        $query = "SELECT p.nom, p.imatge, p.descripcio, p.preu FROM Producte p, Categoria c WHERE c.id='" . $ID . "' and p.categoriaID=c.id";
        $consultaPortatiles = $connexio->prepare($query);
        $consultaPortatiles->execute();
        $producte = $consultaPortatiles->fetchALL(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($producte);
}
?>