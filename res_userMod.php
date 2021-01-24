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
//var_dump($data[0]['direccio']);
?>
<!--onsubmit="return updateUsuari();"-->
<form id="register" method="post" enctype="multipart/form-data" action="/controller/updateUsuari.php">
<div id="back">
    <div id="imatge">
        <img height="300px" src=<?php echo($data[0]['fotoPerfil']);?> id="profilePicture">
        <input type="file" name="profile_image" id="inputP"/>
    </div>
    <div id="caselles">

        <input style="grid-area: nom" type="text" name="nom" placeholder="Nom" id="unom" value="<?php echo($data[0]['nom']);?>" required="required">
        <input style="grid-area: data" type="date" name="edat" placeholder="Data de naixement" id="uedat" value=<?php echo($data[0]['dataNaixement']);?> required="required">
        <input style="grid-area: mail" type="email" name="correu" placeholder="Correu electrònic" id="ucorreu" value=<?php echo($data[0]['correu']);?> required="required">
        <input style="grid-area: pass" type="password" name="contra" placeholder="Contrasenya" id="ucontra" required="required">
        <!--<input style="grid-area: pass" type="password" placeholder="Repeteix la contrasenya" id="contra2">-->
        <input style="grid-area: dir" type="text" maxlength="30" name="dir" placeholder="Direcció" id="udir" value="<?php echo($data[0]['direccio']);?>" required="required">
        <input style="grid-area: pob" type="text" maxlength="30" name="pob" placeholder="Població" id="upob" value="<?php echo($data[0]['Poblacio']);?>" required="required">
        <input style="grid-area: cp" type="number" name="cp" placeholder="Codi Postal" id="ucp" value=<?php echo($data[0]['CodiPostal']);?> required="required">
        <input style="grid-area: num" type="number" name="num" placeholder="Telefon" id="unum" value=<?php echo($data[0]['telefon']);?>>
        <input style="grid-area: dni" type="text" name="dni" placeholder="DNI" id="udni" value=<?php echo($data[0]['DNI']);?>>

        <button style="grid-area: but" type="submit" id="guarda">
            <b>Guardar cambios</b>
        </button>

    </div>
</div>
</form>


