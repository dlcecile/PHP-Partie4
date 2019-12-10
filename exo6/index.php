<?php
$page = "exercice6";
include '../header.php';
?>
<p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.</p>
<p>Elle doit renvoyer une chaine de la forme :"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
<?php
  $name = 'Bine';
  $lastname = 'Aline';
  $age = 20;
      function addition($p1, $p2, $p3){
      echo 'Bonjour ' .$p1. ' ' .$p2. ' tu as ' .$p3. ' ans.';
    }
    addition($name, $lastname, $age);
?>
<?php
include '../footer.php';
 ?>
