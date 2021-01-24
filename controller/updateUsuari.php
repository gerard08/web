<?php
if(!isset($SESSION['ID']))
{
    session_start();
}
$nom = $_POST["nom"];
$edat = $_POST["edat"];
$correu = $_POST["correu"];
$contra = $_POST["contra"];
$direccio = $_POST["dir"];
$poblacio = $_POST["pob"];
$codipost = $_POST["cp"];
$num = $_POST["num"];
$dni = $_POST["dni"];

$id = $_SESSION['ID'];
//var_dump($id);
$filesAbsolutePath = '/home/TDIW/tdiw-c9/public_html/media/users/';
$filesPublicPath = '/media/users/';

$photo = '/media/noPhoto.jpg';

if(isset($_FILES['profile_image']) && !empty($_FILES['profile_image']))
{
    $finalPath = $filesAbsolutePath . $id . '.jpg';
    //var_dump($finalPath);
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $finalPath);
    $photo = $filesPublicPath . $id . '.jpg';
}

include_once __DIR__ . '/../model/connectaBD.php';
include_once __DIR__ . '/../model/update.php';

$contra = password_hash($contra, PASSWORD_DEFAULT);

$connexio = connectaBD();
updateUsuari($connexio, $nom, $edat, $contra, $correu,  $direccio, $poblacio, $codipost, $num, $dni, $photo);

echo "<script>window.location = '/?p=userpage'</script>";
?>