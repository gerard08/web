<script type="text/javascript">
    $(document).ready(function()
    {
        $("#logedUser").on( "click", function() {
            $('.dropdown-content').toggle('fast');
        });

        // $("#logedUser").on( "mouseout", function() {
        //     $('.dropdown-content').toggle('fast');
        // });
    });
</script>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/barraSup.css"/>
</head> 
<header id="barraSup">
    <div id="menu">
      <div style="order: 1; flex-grow: 1" id="cat" >
          <!--<label class="checkbox" for="check">-->
          <a href = "?p=categoria">
            <img src="../media/menu.png" width="40px" height="40px" alt="logo web">
          </a>
          <!--</label>-->
      </div>
        <div style="order: 1; flex-grow: 1" id="logo">
            <a href="?p=" >
                <img src="../media/logoW.png" alt="logo web">
            </a>
        </div>
        <div style="order: 1; flex-grow: 3" id="bar">
            <input type="text" placeholder="busca..."/>
            <img src="../media/lupa.png" alt="busca">
        </div>
        <div style="order: 1; flex-grow: 1" id="logedUser">
            <img src="../media/userLOGED.png" class="boto">
            <div class="dropdown-content">
                <p id="know">Hola <?php
                    $name=explode(" ",$_SESSION['nom']);
                    echo $name[0];
                    ?>!</p>
                <a href="?p=userpage"> El meu compte </a>
                <a> Les meves compres </a>
                <a href="?p=logout"> Tancar sessió </a>
            </div>
        </div>
        <div style="order: 1; flex-grow: 1" id="carro">
            <a href="?p=carro">
                <img src="../media/carro.png">
            </a>
            <p id="nElements"><?php echo(count($_SESSION['cistella'])); ?></p>
        </div>
        <div style="order: 1; flex-grow: 1" id="TotalPrice">
          <p style="order: 1; flex-grow: 1" id="preu"><?php echo($_SESSION['preu']);?></p>
          <p style="order: 1; flex-grow: 1">€</p>
        </div>
    </div>

</header>
</html>
