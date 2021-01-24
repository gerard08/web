<?php

function registraUsuari($connexio, $nom, $edat, $contra, $correu,  $direccio, $poblacio, $codipost)
{
$res = false;
try
    {
        $query = "INSERT INTO Usuari (nom, dataNaixement, contrasenya, correu, direccio, poblacio, CodiPostal, fotoPerfil)";
        $query .= "VALUES('$nom', '$edat', '$contra', '$correu', '$direccio', '$poblacio', '$codipost', '/media/noPhoto.jpg')";
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
