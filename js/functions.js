function mostraInformacio(id){
    $(document).ready(function(){
        $.ajax({url: "../controller/informacioProducte.php?id=" + id, success:
                function(result){
                    $("#pagina").html(result);
                }});
        // });
    });
    //document.getElementById("check").checked = false;
    //document.getElementById("check").style.display = "none";

    return false;
}

function registraUsuari(){

    var nom = document.getElementById("nom").value;
    var edat = document.getElementById("edat").value;
    var correu = document.getElementById("correu").value;
    var contra = document.getElementById("contra").value;
    var contra2 = document.getElementById("contra2").value;



    $(document).ready(function(){
        $.ajax({url: "../controller/registreUsuari.php?nom=" + nom +
                "&edat=" + edat +
                "&correu=" + correu +
                "&contra=" + contra +
                "&contra2=" + contra2, success:
                function(result){
                    $("#taulell").html(result);
                }});
    });
    return false;
}

function mostraProducte(producte){
    $(document).ready(function(){
        //$("#muestraportatiles").change(function(){
        $.ajax({url: "../controller/consultaProducte.php?id=" + producte, success:
                function(result){
                    $("#pagina").html(result);
                }});
        // });
    });
    //document.getElementById("check").checked = false;
    //document.getElementById("check").style.display = "none";

    return false;
}

function iniciaSessio(){
    var correu = document.getElementById("correuLOG").value;
    var contra = document.getElementById("contraLOG").value;


    $(document).ready(function(){
        $.ajax({url: "../controller/logInUsuari.php?correu=" + correu +
                "&contra=" + contra, success:
                function(result){
                    $("#taulell").html(result);
                }});
    });
    return false;
}

function logOut(){

    $(document).ready(function(){
        $.ajax({url: "../controller/tancarsessio.php", success:
                function(result){
                    //$("#pagina").html(result);
                }});
    });
    location.reload();
    return true;
}



var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function AfegirCistell(pid)
{

  $(document).ready(function(){
      $.ajax({url: "../controller/afegirAlCistell.php?pid=" + pid, success:
              function(result){
                  $("#pagina").html(result);
              }});
  });
  return false;
}
