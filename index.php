<?php
session_start();
if(!isset($_SESSION['ID']))
{
  $_SESSION['cistella'] = array();
  $_SESSION['preu'] = 0;
}
?>

<html>
<head>
    <link rel="icon" type="image/ico" href="/media/iconWite.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"> </script>
    <?php include_once __DIR__ . '../js/funcionsN.php'; ?>
</head>
</html>
<?php

if(isset($_GET['p']))
{
    $action = $_GET['p'];
}
else
{
    $action = '';
}


switch($action)
{
    /*case 'portatils':
    {
        include_once __DIR__ . '/view/portatiles.php';
        break;
    }*/
    case 'login':
    {
        include_once __DIR__ . '/view/register.php';
        break;
    }
    case 'categoria':
    {
      include_once __DIR__ . '/view/categories.php';
      break;
    }
    default:
    {
        include_once __DIR__ . '/main.php';
        break;
    }
}
?>
