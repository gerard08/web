<?php foreach ($infoProducte as $info) { ?>
    <div id="producte">
        <img style="grid-area: img" src="<?php echo $info['imatge'] ?>">
        <div id="descripcion">
            <h3> DESCRIPCIÓN </h3>
            <p> <?php echo $info['descripcio'] ?> </p> </br>
            <h3> CARACTERÍSTICAS </h3>
            <?php echo $info['specs'] ?>
        </div>
        <div id="butpreu">
            <p id="precioInfo"> Precio:<?php echo $info['preu'] ?>€ </p>
            <input type="number" name="numero" value="1" min="0" id="cantidad"/>
            <button id="añadir" onclick="return AfegirCistell(<?php echo $info['id'] ?>, <?php echo $info['preu'] ?>)"> Añadir al carro</button>
        </div>

    </div>
<?php } ?>


<!--<button id="añadir"> Añadir al carro </button>-->
