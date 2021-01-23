
<h2> RESUMEN DE TU COMPRA </h2>

<?php
for($i=0; $i<count($producte); $i++){ ?>
    <p> <?php echo $producte[$i][0]['nom']; ?> </p>
    <img width="100px" src="<?php echo $producte[$i][0]['imatge'];?>">
    <p> Cantidad: <?php echo $cantidades[$i]; ?> </p>
<?php } ?>


