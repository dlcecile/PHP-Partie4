<?php
$page = "exercice7";
include '../header.php';
$gender = 'femme';
$years = 0;
      function concat(string $p1,int $p2){
      if ($p1 == 'homme' && $p2 >= 18) {
        return 'Vous êtes un ' .$p1. ' et vous êtes majeur';
      }
      elseif ($p1 == 'homme') {
        return 'Vous êtes un ' .$p1. ' et vous êtes mineur';
      }
      elseif ($p1 == 'femme' && $p2 >=18) {
        return 'Vous êtes ' .$p1. ' et vous êtes majeur';
      }
      else{
        return 'vous êtes une femme et vous êtes mineur';
      }
    }
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
<p><?= concat($gender, $years); ?></p>
<?php
include '../footer.php';
 ?>
