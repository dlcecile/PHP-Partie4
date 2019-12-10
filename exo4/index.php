<?php
  $page = "exercice4";
  include '../header.php';
  $age = 67;
  $tooth = 67;
        function compare(int $p1, int $p2){
        if ($p1 > $p2) {
          return 'Le premier nombre est plus grand';
        }
        elseif ($p1 < $p2){
          return 'Le premier nombre est plus petit';
        }
        else {
          return 'Les deux nombres sont identiques';
        }
      }
?>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
  <ul>
    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
  </ul>
<p><?= compare($age, $tooth); ?></p>
<?php
include '../footer.php';
 ?>
