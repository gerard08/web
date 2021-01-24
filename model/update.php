<?php
session_start();
function updateUsuari($connexio, $nom, $edat, $contra, $correu,  $direccio, $poblacio, $codipost, $num, $dni, $photo)
{
    //var_dump($photo);
    $id = $_SESSION['ID'];
    $res = false;
    try
    {
        $query = "UPDATE Usuari SET nom= '$nom', dataNaixement= '$edat', contrasenya= '$contra', correu= '$correu', direccio = '$direccio'
                , poblacio= '$poblacio', CodiPostal= '$codipost', telefon= '$num', DNI= '$dni', fotoPerfil= '$photo'";
        $query .= " WHERE id= " . $id;
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