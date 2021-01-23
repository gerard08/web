<?php

function getUserData($connexio, $id)
{
    try {
        $query = "SELECT * FROM Usuari WHERE id = '" . $id . "'";
        $consulta = $connexio->prepare($query);

        $consulta->execute();
        $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error " . $e->getMessage();
    }
    return $resultat;
}

?>