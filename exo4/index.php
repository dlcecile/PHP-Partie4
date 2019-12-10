<?php
$page = "exercice4";
include '../header.php';
?>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
  <ul>
    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
  </ul>
<?php
      function biggerSmaller(){
        $age = 67;
        $tooth = 67;
      if ($age > $tooth) {
        echo 'Le premier nombre est plus grand';
      }
      elseif ($age < $tooth){
        echo 'Le premier nombre est plus petit';
      }
      else {
        echo 'Les deux nombres sont identiques';
      }

    }
    biggerSmaller();
?>
<?php
include '../footer.php';
 ?>
