<?php
session_start();
if(!isset($_SESSION['ID']))
{
  $_SESSION['cistella'] = array();
  $_SESSION['preu'] = 0;
  $_SESSION['nProd'] = 0;
  $_SESSION['totalProductes']=0;
}

$filesAbsolutePath = '/home/TDIW/tdiw-c9/public_html/media/users/';

?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
<head>
    <link rel="icon" type="image/ico" href="/media/iconWite.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"> </script>
    <?php include_once __DIR__ . '/js/funcionsN.php'; ?>
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
    case 'login':
    {
        include_once __DIR__ . '/res_register.php';
        break;
    }
    case 'logout':
    {
        session_destroy();
        $action = '';
        echo "<script>window.location = '/?p='</script>";
    }
    case 'categoria':
    {
      include_once __DIR__ . '/res_categories.php';
      break;
    }
    case 'carro':
    {
        include_once  __DIR__ . '/res_carro.php';
        break;
    }
    case 'userpage':
    {
        include_once  __DIR__ . '/res_userMod.php';
        break;
    }
    case 'history':
    {
        include_once __DIR__ . '/res_userhistory.php';
        break;
    }
    default:
    {
        include_once __DIR__ . '/main.php';
        break;
    }
}
?>
