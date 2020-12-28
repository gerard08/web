<?php

function registraUsuari($connexio, $nom, $edat, $contra, $correu)
{
$res = false;
try
    {
        $query = "INSERT INTO Usuari (nom, dataNaixement, contrasenya, correu, direccio, DNI)";
        $query .= "VALUES('$nom', '$edat', '$contra', '$correu', 'NULL', 'NULL')";
        $consulta = $connexio->prepare($query);
        $consulta->execute();
        #echo "usuari afegit";
        $res = true;
    }catch(PDOException $e)
    {
        echo "Error " . $e->getMessage();
    }
    $connexio = null;

return $res;
}

?>
