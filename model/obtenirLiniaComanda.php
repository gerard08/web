<?php

function getLiniaComanda($connexio, $comandaID)
{
    try {
        $query = "SELECT * FROM liniaComanda c  WHERE c.comandaID = '" . $comandaID . "'";

        $consulta = $connexio->prepare($query);
        $consulta->execute();
        $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e)
    {
        echo "Error " . $e->getMessage();
    }

    return $resultat;
}

?>