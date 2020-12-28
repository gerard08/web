<?php

function consultaCorreu($connexio, $correu, $contra, $contra2)
{
    if ($contra != $contra2) {
        $err = "Les contrasenyes son diferents!";
    } else {
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