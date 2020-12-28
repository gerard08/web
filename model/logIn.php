<?php

function logIn($connexio, $correu, $contrasenya)
{
    try {
        $query = "SELECT u.id, u.nom, u.contrasenya FROM Usuari u  WHERE correu = '" . $correu . "'";//' AND contrasenya = '" . $contrasenya . "'";

        $consulta = $connexio->prepare($query);
        $consulta->execute();
        $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);


        if(password_verify($contrasenya, $resultat[0]['contrasenya']))
        {
            return $resultat;
        }


    }catch(PDOException $e)
    {
        echo "Error " . $e->getMessage();
    }
    $connexio = null;

}


?>