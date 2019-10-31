<?php

function isvoyelle($lettre)
{
  $isvoyelle = false;

if (is_string($lettre) && (strlen($lettre)==1)) {
  //echo "c'est une voyelle";
  $lettre= strtoupper($lettre);

  if (
      ($lettre== 'A') ||
      ($lettre== 'E') ||
      ($lettre== 'I') ||
      ($lettre== 'O') ||
      ($lettre== 'U') ||
      ($lettre== 'Y')
    ) {
      $isvoyelle=true;
    }


} else {

  echo "parametre erroné\n";
}




return($isvoyelle);
}
