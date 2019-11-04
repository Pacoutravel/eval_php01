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
    var_dump($lettre);
    echo "paramètre erroné\n";

  }

  return($isvoyelle);
}

function supprimerVoyelles($chaine)
{
  $chaine_retour = "";

if (is_string($chaine)) {

  for ($i=0;strlen($chaine);$i++){
    echo "lettre : " . $chaine[$i];
    if (!isvoyelle($chaine[$i])){
      $chaine_retour = $chaine_retour . $chaine[$i];
    }
    echo "\n";
  }
}else{
  echo "\n";
  var_dump($chaine);
  echo "parametre erroné\n";
  }
  return($chaine_retour);
}
