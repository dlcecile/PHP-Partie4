<?php
$page = "exercice2";
include '../header.php';
?>
<?php
  // $string = 'Ceci est une chaine de caractères';
  // echo $string;
  function mystring($p1){
    echo 'Bonjour ' .$p1. '' ;
  }
  mystring('Ceci est une chaine de caractère')
?>
<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
<?php
include '../footer.php';
 ?>
