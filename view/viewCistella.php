


<div id="cuadroCarro">

    <?php
     if(!empty($_SESSION['cistella'])){ ?>
        <h2> RESUMEN DE TU COMPRA </h2>
        <button onclick="vaciarCarro();  "> Vaciar carro </button>
        <button onclick="confirmarCompra(<?php echo $_SESSION['ID'] ?>,<?php echo $_SESSION['totalProductes'] ?>,
                                        <?php echo $_SESSION['preu'] ?>); "> COMPRAR </button>

        <?php for($i=0; $i<count($producte); $i++){ ?>
            <div id="div<?php echo $producte[$i][0]['id'] ?>">
                <p> <?php echo $producte[$i][0]['nom']; ?> </p>
                <img width="50px" id="fotoprod" src="<?php echo $producte[$i][0]['imatge'];?>">

                <p id="prodCant<?php echo $producte[$i][0]['id'] ?>"> <?php echo $_SESSION['nProd'][$producte[$i][0]['id']]; ?> </p>
                <!--<button onclick="eliminarProducte(<?php echo $producte[$i][0]['id']?>, <?php echo $producte[$i][0]['preu']?>)"> X </button> -->
            </div>

        <?php } ?>


    <?php } else {  ?>
        <p> CARRO VACÍO </p>
    <?php } ?>

</div>
