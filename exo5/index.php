<?php
$page = "exercice5";
include '../header.php';
?>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
<?php
  $age = 20;
  $text = 'Joyeux anniversaire';
      function addition($p1, $p2){
      echo 'Tu as ' .$p1. ' ans ' .$p2. ' Youpi!!!!';
    }
    addition($age,$text);
?>
<?php
include '../footer.php';
 ?>
