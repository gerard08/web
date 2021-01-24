<?php
    function consultaPortatiles($connexio, $ID)
    {
        $portatiles = null;
        try {
            $query = "SELECT p.nom FROM Producte p, Categoria c WHERE c.nom='" . $ID . "' and p.categoriaID=c.id";
            $consultaPortatiles = $connexio->prepare($query);
            $consultaPortatiles->execute();
            $portatiles = $consultaPortatiles->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return ($portatiles);
    } ?>