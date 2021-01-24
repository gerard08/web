<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ReTech</title>
    <link rel="icon" type="image/ico" href="media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="description" content="compra d'articles electrònics de segona ma"/>
    <meta name="keywords" content="electronica, segona ma" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!--<script type="text/javascript" src="funcions.js"> </script>-->
</head>
<body>
<?php include_once __DIR__ . "/controller/mostrarBarraSup.php"; ?>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <a href="?p=categoria&id=1">
        <div id="content">
            <img src="/media/portatil1.jpg" style="width:1%; margin-left:5%;">
            <div id="carac">
                <h1>
                    Lenovo IdeaPad 3 15ADA05
                </h1>
                <p id="preuf">
                    379€
                </p>
            </div>

        </div>
        </a>
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <a href="?p=categoria&id=1">
        <div id="content">
            <img src="/media/portatil2.jpg" style="width:1%; margin-left:5%;">
            <div id="carac">
                <h1>
                    HP Laptop 15s-fq1115ns
                </h1>
                <p id="preuf">
                    549€
                </p>
            </div>
        </div>
        </a>
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <a href="?p=categoria&id=1">
        <div id="content">
            <img src="/media/portatil7.jpg" style="width:1%; margin-left:5%;">
            <div id="carac">
                <h1>
                    Lenovo Chromebook S345
                </h1>
                <p id="preuf">
                    999€
                </p>
            </div>
        </div>
        </a>
        <div class="text"></div>
    </div>


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!--<00/div>-->
<script> showSlides(1); </script>
</body>
</html>
