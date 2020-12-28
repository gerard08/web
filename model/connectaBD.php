<?php
    function connectaBD(){
        $servidor = "localhost";
        $usuari = "root";//@localhost";
        $clau = "gerard11";
        $dbname = "tdiwc9";

        try {
            $connexio = new PDO("mysql:host=$servidor;dbname=tdiwc9;charset=UTF8", $usuari, $clau);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $connexio;
    }
?>
