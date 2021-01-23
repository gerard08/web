<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifica Usuario</title>
    <link rel="icon" type="image/ico" href="../media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/userStyle.css"/>
</head>

<?php
include_once __DIR__ . "/controller/mostrarBarraSup.php";
include_once __DIR__ . "/controller/consultaDadesUsuari.php";
//var_dump($data[0]['nom']);
?>
<div>
    <img src=<?php echo($data[0]['fotoPerfil']);?> id="profilePicture">
</div>



