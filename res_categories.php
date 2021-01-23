<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorias</title>
    <link rel="icon" type="image/ico" href="media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="description" content="compra d'articles electrònics de segona ma"/>
    <meta name="keywords" content="electronica, segona ma" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <script type="text/javascript" src="/js/functions.js"> </script>
</head>
<body>

<?php
include_once __DIR__ . "/controller/mostrarBarraSup.php";

if(isset($_GET['id']))
{
?>
    <div id="pagina">
    </div>
    <script>
    mostraProducte(<?php echo($_GET['id']);?>);
    </script>
<?php
}
else
{
  include_once __DIR__ . "/controller/listaCategorias.php";
}
?>



</body>
</html>
