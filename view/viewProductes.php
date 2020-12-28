<?php
foreach($producte as $p)
{?>
    <div id="casella" onclick="return mostraInformacio(<?php echo $p['id'] ?>)">
        <p style="grid-area: nom" id="Nom"> <?php echo $p['nom'] ?> </p>
        <img style="grid-area: img" id="imatge" src="<?php echo $p['imatge'] ?>"></img>
        <p style="grid-area: preu" id="Preu" ><?php echo $p['preu'] ?> € </p>
        <div id="descripcio"> <?php echo $p['specs'] ?> </div>
        <!--<input type="image" src="../media/carro.png" style="grid-area: but" id="button"/>-->
        <button style="grid-area: info" id="afegirCarro"> Añadir al carro </button>
    </div>
<?php
}
?>