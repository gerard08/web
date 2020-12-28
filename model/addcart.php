<?php
function afegir($element)
{
  array_push($_SESSION['cistella'], $element);
  echo (count($_SESSION['cistella']));
}

?>
