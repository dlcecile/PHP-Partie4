<?php
$page = "exercice7";
include '../header.php';
?>
<p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
  <ul>
    <li>Homme</li>
    <li>Femme</li>
  </ul>
<p>La fonction doit renvoyer en fonction des paramètres :</p>
  <ul>
    <li>Vous êtes un homme et vous êtes majeur</li>
    <li>Vous êtes un homme et vous êtes mineur</li>
    <li>Vous êtes une femme et vous êtes majeur</li>
    <li>Vous êtes une femme et vous êtes mineur</li>
<p>Gérer tous les cas.</p>
<?php
$gender = 'femme';
$age = 0;
      function genderAge($p1,$p2){
      if ($p1 == 'homme' && $p2 >= 18) {
        echo 'Vous êtes un ' .$p1. ' et vous êtes majeur';
      }
      elseif ($p1 == 'homme') {
        echo 'Vous êtes un ' .$p1. ' et vous êtes mineur';
      }
      elseif ($p1 == 'femme' && $p2 >=18) {
        echo 'Vous êtes ' .$p1. ' et vous êtes majeur';
      }
      else{
        echo 'vous êtes une femme et vous êtes mineur';
      }
    }
    genderAge($gender, $age);
?>
<?php
include '../footer.php';
 ?>
