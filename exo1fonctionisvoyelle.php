<?php

function isvoyelle($lettre)
{
  $voyelle= false;

  if (
  ($lettre== 'a') ||
  ($lettre== 'e') ||
  ($lettre== 'i') ||
  ($lettre== 'o') ||
  ($lettre== 'u') ||
  ($lettre== 'A') ||
  ($lettre== 'E') ||
  ($lettre== 'I') ||
  ($lettre== 'O') ||
  ($lettre== 'U')
  ) {
   $voyelle= true;
}

 return($voyelle);
}
