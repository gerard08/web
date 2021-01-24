<html>
<body>
<h1>
    Pedido nº <?php echo $c['id']; ?> hecho el dia <?php echo $c['data_creacio']; ?>
</h1>

<?php
foreach ($productes as $p)
{
    ?>
    <p> <?php echo $p['nomProducte'] ?> </p>
    <img width="100px" src="<?php echo $info[0]['imatge']?> ">
    <p> <?php echo $p['quantitat'] ?> </p>
    <p> <?php echo $p['preuUnitari'] ?> </p>
    <p> <?php echo $p['preuTotal'] ?> </p>


    <?php
}?>
<hr/>

</body>
</html>



