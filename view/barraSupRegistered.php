<html>
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
                <p id="know">Hola <?php echo $_SESSION['nom'] ?></p>
                <a> El meu compte </a>
                <a> Les meves compres </a>
                <a onclick="return logOut()"> Tancar sessió </a>
            </div>
        </div>
        <div style="order: 1; flex-grow: 1" id="carro">
            <img src="../media/carro.png">
        </div>
        <div style="order: 1; flex-grow: 1" id="nElements">
            <?php echo(count($_SESSION['cistella'])); ?>
        </div>
    </div>

</header>
</html>