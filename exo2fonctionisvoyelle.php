<?php
function isvoyelle($lettre)
{
  $voyelle= "";

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
   $voyelle= "";
}

 return($voyelle);
}
