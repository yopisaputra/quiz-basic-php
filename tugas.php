<?php

function habisDibagiTiga($n)
{
  $r = $n/3;
  $l = 3.14 * $r * $r;
  $formatL = number_format($l, 2);
  echo "$formatL <br>";
}

function habisDibagiLima($n)
{
  $r = $n/5;
  $k = 3.14 * 2* $r;
  $formatK = number_format($k, 2);
  echo "$formatK <br>";
}

function habisDibagiTigaLima($n)
{
  $p = $n/3;
  $l = $n/5;
  $luas = $p*$l;
  $formatLuas = number_format($luas, 2);
  echo "$formatLuas <br>";
}

for ($x = 1; $x <= 100; $x++) {

  if (($x % 3 == 0) && ($x % 5 == 0)) {
    echo habisDibagiTigaLima($x);
    continue;

  } else if ($x % 5 == 0) {
    echo habisDibagiLima($x);
    continue;

  } elseif ($x % 3 == 0) {
    echo habisDibagiTiga($x);
    continue;

  } else {
    echo number_format($x, 2);
    echo "<br>";
  }
  
}




?>