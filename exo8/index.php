<?php
  $page = "exercice8";
  include '../header.php';
  $day = 27;
  $month = 12;
  $years = 1988;
  $birthday = ($day + $years + $month);
    function somme ($p1){
      echo 'Tu as ' .$p1. ' années numériques';
    }
    somme ($birthday);
?>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.</p>
<p>Tous les paramètres doivent avoir une valeur par défaut.</p>

<?php
include '../footer.php';
 ?>
