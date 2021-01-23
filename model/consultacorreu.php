<?php

function consultaCorreu($connexio, $correu, $contra, $contra2, $direccio, $poblacio, $codipost)
{
    if ($contra != $contra2)
    {
        return null;
    }
    if(strlen($direccio) > 30 || strlen($poblacio) > 30 || strlen($codipost) > 5)
    {
        return null;
    }
    else {
        try {
            $query = "SELECT * FROM Usuari WHERE correu = '" . $correu . "'";
            $consulta = $connexio->prepare($query);

            $consulta->execute();
            $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }
    return $resultat;
}

?>