<?php
function consultaCategorias($connexio){
    $categorias = null;
    try {
        $query = "SELECT nom, id FROM Categoria";
        $consultaCategorias = $connexio->prepare($query);
        $consultaCategorias->execute();
        $categorias = $consultaCategorias->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($categorias);
}
?>