<?php
  $page = "exercice6";
  include '../header.php';
    $name = 'Bine';
    $lastname = 'Aline';
    $years = 20;
        function concat($p1, $p2, $p3){
        return 'Bonjour ' .$p1. ' ' .$p2. ' tu as ' .$p3. ' ans.';
      }
?>
<p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.</p>
<p>Elle doit renvoyer une chaine de la forme :"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
<p><?= concat($name, $lastname, $years); ?></p>
<?php
include '../footer.php';
 ?>
