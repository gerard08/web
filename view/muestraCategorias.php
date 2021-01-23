<html>
<link rel="stylesheet" type="text/css" href="../css/catStyle.css"/>
<div id="categories">
    <?php foreach($categorias as $categoria){
        $string = htmlentities($categoria['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        ?>

        <a id="categoria", href="?p=categoria&id=<?php echo $categoria['id'] ?>"> <p> <?php echo $string ?> </p>  </a>
        <?php } ?>
</div>
</html>
