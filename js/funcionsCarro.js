function AfegirCistell(pid, preu)
{
//afegeixo al carro
    var cant=document.getElementById("prodCant");
    var num=document.getElementById("cantidad").value;

    for(var i=0; i<num; i++){
        $(document).ready(function(){
            $.ajax({url: "../controller/afegirAlCistell.php?pid=" + pid +
                    "&price=" + preu, success:
                    function(result){
                        //  $("#pagina").html(result);
                        $("#nElements").html(result);
                    }});
        });
    }

    $(document).ready(function(){
        $.ajax({url: "../controller/actualizarCantidad.php?pid=" + pid +
                "&op=" + 0, success:
                function(result){
                    //  $("#pagina").html(result);
                    $("#prodCant"+pid).html(result);
                }});
    });

//sumo Preu
    var priceH = document.getElementById("preu");
    priceH.innerHTML = (parseFloat(priceH.innerHTML) + (preu*num)).toFixed(2);
    return false;
}


function vaciarCarro(){
    $(document).ready(function(){
        $.ajax({url: "../controller/eliminarCistell.php?", success:
                function(result){
                    //  $("#pagina").html(result);
                    $("#cuadroCarro").html(result);
                    $("#nElements").html("0");
                    $("#preu").html("0");
                }});
    });

}

function eliminarProducte(pid, preu){
    $(document).ready(function(){
        $.ajax({url: "../controller/eliminarProdCistell.php?pid=" + pid +
                "&price=" + preu, success:
                function(result){
                    //  $("#pagina").html(result);
                    $("#div+pid").html(result);
                }});
    });
}
