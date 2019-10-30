<?php

function isvoyelle($lettre)
{
  $voyelle= "";

  if (
  ($lettre== 'a') ||
  ($lettre== 'b') ||
  ($lettre== 'c') ||
  ($lettre== 'd') ||
  ($lettre== 'e') ||
  ($lettre== 'A') ||
  ($lettre== 'B') ||
  ($lettre== 'C') ||
  ($lettre== 'D') ||
  ($lettre== 'E')
  ) {
   $voyelle= "";
}

 return($voyelle);
}
