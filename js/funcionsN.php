<script>
function AfegirCistell(pid, preu)
{
//afegeixo al carro
  $(document).ready(function(){
      $.ajax({url: "../controller/afegirAlCistell.php?pid=" + pid +
      "&price=" + preu, success:
              function(result){
              //  $("#pagina").html(result);
                  $("#nElements").html(result);
              }});
  });

//sumo Preu
var priceH = document.getElementById("preu");
priceH.innerHTML = (parseFloat(priceH.innerHTML) + preu).toFixed(2);
return false;
}

</script>
