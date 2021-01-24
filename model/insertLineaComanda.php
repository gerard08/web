<?php
function insertLineaComanda($connexio, $productid, $comandaid, $preuTotal, $preuUnitari, $nElem, $nom)
{
    $res = false;
    try
    {
        $query = "INSERT INTO liniaComanda (producteID, comandaID, preuTotal, preuUnitari, quantitat, nomProducte)";
        $query .= "VALUES('$productid', '$comandaid', '$preuTotal', '$preuUnitari', '$nElem', '$nom')";
        $consulta = $connexio->prepare($query);
        $consulta->execute();

        $res = true;
    }catch(PDOException $e)
    {
        echo "Error " . $e->getMessage();
    }
    $connexio = null;

    return $res;
}
?>
