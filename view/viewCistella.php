


<div id="cuadroCarro">

    <?php
     if(!empty($_SESSION['cistella'])){ ?>
        <h1> RESUMEN DE TU COMPRA </h1>


        <?php for($i=0; $i<count($producte); $i++){ ?>
            <div id="div<?php echo $producte[$i][0]['id'] ?>">
                <p> <?php echo $producte[$i][0]['nom']; ?> </p>

                <img width="50px" id="fotoprod" src="<?php echo $producte[$i][0]['imatge'];?>">
                <p id="preuUnitari"> Precio: <?php echo $producte[$i][0]['preu'] ?> EUR </p>
                <p id="prodCant<?php echo $producte[$i][0]['id'] ?>"> Cantidad: <?php echo $_SESSION['nProd'][$producte[$i][0]['id']]; ?> </p>
                <!--<button onclick="eliminarProducte(<?php echo $producte[$i][0]['id']?>, <?php echo $producte[$i][0]['preu']?>)"> X </button> -->

            </div>
            <hr>
        <?php } ?>
         <h2> PRECIO TOTAL: <?php echo $_SESSION['preu'] ?> EUR </h2>
         <button id="btvaciar" onclick="vaciarCarro();  "> VACIAR CESTA </button>
         <button id="btcomprar" onclick="confirmarCompra(<?php echo $_SESSION['ID'] ?>,<?php echo $_SESSION['totalProductes'] ?>,
         <?php echo $_SESSION['preu'] ?>); "> COMPRAR </button>

    <?php } else {  ?>
        <p id="vacio"> Tu cesta está vacía.  </p>
    <?php } ?>

</div>
