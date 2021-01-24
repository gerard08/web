
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
    var dir = document.getElementById("dir").value;
    var pob = document.getElementById("pob").value;
    var cp = document.getElementById("cp").value;



    $(document).ready(function(){
        $.ajax({url: "../controller/registreUsuari.php?nom=" + nom +
                "&edat=" + edat +
                "&correu=" + correu +
                "&contra=" + contra +
                "&contra2=" + contra2 +
                "&dir=" + dir +
                "&pob=" + pob +
                "&cp=" + cp, success:
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
    $(document).ready(function(){
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
    });

}

function updateUsuari(){

    var nom = document.getElementById("unom").value;
    var edat = document.getElementById("uedat").value;
    var correu = document.getElementById("ucorreu").value;
    var contra = document.getElementById("ucontra").value;
    var dir = document.getElementById("udir").value;
    var pob = document.getElementById("upob").value;
    var cp = document.getElementById("ucp").value;
    var num = document.getElementById("unum").value;
    var dni = document.getElementById("udni").value;




    $(document).ready(function(){
        $.ajax({url: "../controller/updateUsuari.php?nom=" + nom +
                "&edat=" + edat +
                "&correu=" + correu +
                "&contra=" + contra +
                "&dir=" + dir +
                "&pob=" + pob +
                "&cp=" + cp +
                "&num=" + num +
                "&dni=" + dni, success:
                function(result){
                   // $("body").html(result);
                }});
    });
    return true;
}

function confirmarCompra(uid, nElem, preu){
    $(document).ready(function(){
        //$("#muestraportatiles").change(function(){
        $.ajax({url: "../controller/confirmaCompra.php?id=" + uid +
                "&nElements=" + nElem +
                "&precio=" + preu, success:
                function(result){
                    //$("#cuadroCarro").html(result);
                }});
        // });
    });
    $(document).ready(function(){
        $.ajax({url: "../controller/mostrarResum.php?", success:
                function(result){
                    //  $("#pagina").html(result);
                    $("#cuadroCarro").html(result);
                }});
    });
    $(document).ready(function(){
        $.ajax({url: "../controller/eliminarCistell.php?", success:
                function(result){
                    //  $("#pagina").html(result);
                    //$("#cuadroCarro").html(result);
                    $("#nElements").html("0");
                    $("#preu").html("0");
                }});
    });


}