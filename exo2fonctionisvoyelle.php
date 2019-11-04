<?php
function isvoyelle($lettre)
{
  $ChaineReturn ='';

  For($i=0; $i<strlen($Chaine); $I++){
    $lettre = $chaine[$i];

    if (!isvoyelle($lettre)){
      $chaineReturn = $chaine_retour . $lettre;

    }
  }

  return($chaineReturn);

}
 function isvoyelle($lettre)
 {
   $voyelle = false;

   if (
     (is_string($lettre) == true ) &&
     (strlen($lettre) ==1)
){
    $lettre= strtoupper($lettre);

  if (
    ($lettre== 'A') ||
    ($lettre== 'E') ||
    ($lettre== 'I') ||
    ($lettre== 'O') ||
    ($lettre== 'U') ||
    ($lettre== 'Y')
  ){
  $voyelle = false;
  }
}


return($voyelle);
}
