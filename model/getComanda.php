<?php

function getComanda($connexio, $ID)
{
    try {
        $query = "SELECT max(c.id) FROM Comanda c, Usuari u WHERE u.id='" . $ID . "' and c.usuari_id=u.id";
        $consultaPortatiles = $connexio->prepare($query);
        $consultaPortatiles->execute();
        $comandaid = $consultaPortatiles->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($comandaid);
}
?>