<?php
  $page = "exercice2";
  include '../header.php';
    // $string = 'Ceci est une chaine de caractères';
    // echo $string
  $value = 'Ceci est une chaine de caractère';
    function mystring(string $p1){
      return 'Bonjour ' .$p1. '' ;
    }
?>
<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
<p><?= mystring($value); ?></p>
<?php
include '../footer.php';
 ?>
