<?php
  $page = "exercice3";
  include '../header.php';
    $hair = 'cheveux';
    $color = 'rouges' ;
    $height = 'longs';
        function concat(string $p1, string $p2){
        return 'Tu as les ' .$p1. ' ' .$p2. '<br>';
      }
?>
<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>
<p><?= concat($hair, $color); ?></p>
<?php
include '../footer.php';
 ?>
