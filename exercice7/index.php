<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice7</title>
  <h3>PHP - Partie 4 - Exercice 7</h3>
</head>
<body>
  <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :<p>
    <ul>
      <li>Homme</li>
      <li>Femme</li>
    </ul>
    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ul>
      <li>Vous êtes un homme et vous êtes majeur</li>
      <li>Vous êtes un homme et vous êtes mineur</li>
      <li>Vous êtes une femme et vous êtes majeur</li>
      <li>Vous êtes une femme et vous êtes mineur</li>
    </ul>
    <p>Gérer tous les cas.</p>
  <?php
  $age = rand(1, 70);
  $genderList = array('homme', 'femme');
  $gender = $genderList [rand(0, 1)];
  function who($age, $gender){
    if ($age >=18 && $gender == 'femme'){
      return 'Vous êtes une femme et vous êtes majeur';
    }
    elseif ($age <18 && $gender == 'femme'){
      return 'Vous êtes une femme et vous êtes mineur';
    }
    elseif ($age >=18 && $gender == 'homme'){
      return 'Vous êtes un homme et vous êtes majeur';
    }
    else{
      return 'Vous êtes un homme et vous êtes mineur';
    }
  }
    echo who($age, $gender);
    ?>
</body>
</html>
