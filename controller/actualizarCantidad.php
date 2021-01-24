<?php
session_start();
$element=$_GET['pid'];

if(!isset($_SESSION['nProd'][$element])){
    $_SESSION['nProd']=array_count_values($_SESSION['cistella']);
}

if($_GET['op']==0){
    $_SESSION['nProd'][$element]+=1;
}
else{
    $_SESSION['nProd'][$element]-=1;
}

echo $_SESSION['nProd'][$element];
?>
