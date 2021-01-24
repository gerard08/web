<?php
function afegir($element)
{
  array_push($_SESSION['cistella'], $element);
  $_SESSION['totalProductes']= $_SESSION['totalProductes']+1;

  echo count($_SESSION['cistella']);

}

?>


