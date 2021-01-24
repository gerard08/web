<?php
    $aux=array();
    $prod=0;
    $id=$_GET['pid'];
    $eliminados=0;
    die(json_encode($_SESSION));
    foreach($prod as $_SESSION['cistella']){
        if($id!=$prod){
            push_back($aux, $prod);
        }
        else{
            $eliminados++;
        }
    }
    $_SESSION['totalProductes']-=$eliminados;

    $_SESSION['cistella']=aux;

?>