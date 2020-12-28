<?php

function consultaID($connexio, $correu)
{

    try {

        $query = "SELECT u.id, u.nom FROM Usuari u WHERE correu = '" . $correu . "'";
        $consulta = $connexio->prepare($query);

        $consulta->execute();
        $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error " . $e->getMessage();
    }

    return $resultat;
}

?>