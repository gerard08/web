<?php

function retira($id, $preu)
{
    if (($key = array_search($id, $_SESSION['cistella'])) !== false) {
        unset($_SESSION['cistella'][$key]);
        //aqui canvia preu
    }
}



?>