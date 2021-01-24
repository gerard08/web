<?php
function registraComanda($connexio, $id, $nElem, $preu)
{
    $res = false;
    try
    {
        $fecha= date("Y-m-d H:i:s");
        $query = "INSERT INTO Comanda (usuari_id, import_total, nElements, data_creacio)";
        $query .= "VALUES('$id', '$preu', '$nElem', '$fecha')";
        $consulta = $connexio->prepare($query);
        $consulta->execute();

        $_SESSION['cistella']=array();
        $_SESSION['nProd']=0;
        $_SESSION['preu']=0;
        $_SESSION['totalProductes']=0;

        $res = true;
    }catch(PDOException $e)
    {
        echo "Error " . $e->getMessage();
    }
    $connexio = null;

    return $res;
}
?>