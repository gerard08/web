<?php

function getComandes($connexio, $id)
{
    try {
        $query = "SELECT * FROM Comanda c  WHERE c.usuari_id = '" . $id . "'";

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