<html>
<link rel="stylesheet" type="text/css" href="../css/catStyle.css"/>
<div id="categories">
    <?php foreach($categorias as $categoria){ ?>
        <a id="categoria", href="?p=categoria&id=<?php echo $categoria['id'] ?>"> <p> <?php echo $categoria['nom'] ?> </p>  </a>
        <?php } ?>
</div>
</html>
