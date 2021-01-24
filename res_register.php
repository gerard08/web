<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="icon" type="image/ico" href="../media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/css/registerStyle.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/functions.js"> </script>
</head>


<body>

<div id="taulell">


    <form id="register" method="post" action="/controller/registreUsuari.php">
        <!--<form action="register.php" method="post">-->
        <h1>Registrar-se</h1>
        <input type="text" name="nom" placeholder="Nom" id="nom" required="required">
        <input type="date" name="edat" placeholder="Data de naixement" id="edat" required="required">
        <input type="email" name="correu" placeholder="Correu electrònic" id="correu" required="required">
        <input type="password" name="contra" placeholder="Contrasenya" id="contra" required="required">
        <input type="password" name="contra2" placeholder="Repeteix la contrasenya" id="contra2" required="required">
        <input type="text" maxlength="30" name="dir" placeholder="Direcció" id="dir" required="required">
        <input type="text" maxlength="30" name="pob" placeholder="Població" id="pob" required="required">
        <input type="number" length="5" name="cp" placeholder="Codi Postal" id="cp" required="required">
        <button type="submit" id="registrar">
            <b>REGISTRA'T</b>
        </button>
        <!--</form>-->
    </form>

    <div id="separador">

    </div>
        <form id = "login" method="post" action="/controller/logInUsuari.php">
                <h1>Iniciar sessió</h1>
                <input name="correu" type="email" placeholder="Correu electrònic" id="correuLOG">
                <input name="contra" type="password" placeholder="Contrasenya" id="contraLOG">
                <button type="submit" id="loginB">
                    <b>LOG IN </b>
                </button>
        </form>
    </div>


</body>
</html>


