<?php
$page = "exercice3";
include '../header.php';
?>
<?php
  $hair = 'cheveux';
  $color = 'rouges' ;
  $height = 'longs';
      function addition($p1, $p2){
      echo 'Tu as les ' .$p1. ' ' .$p2. '<br>';
    }
    addition($hair, $color);
    addition($hair, $height);
?>
<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>
<?php
include '../footer.php';
 ?>
