<?php
  $page = "exercice5";
  include '../header.php';
    $age = 20;
    $text = 'Joyeux anniversaire';
        function concat(int $p1, string $p2){
        return 'Tu as ' .$p1. ' ans ' .$p2. ' Youpi!!!!';
    }
?>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
<p><?= concat($age, $text); ?></p>
<?php
include '../footer.php';
 ?>
