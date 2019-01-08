<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice6</title>
  <h3>PHP - Partie 4 - Exercice 6</h3>
</head>
<body>
  <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :</p>
  <p>"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
  <?php
  function presentation($firstname = "Paul", $name = "Dupont", $age = 50){
    return 'Bonjour ' . $firstname . ' ' . $name . ' , tu as ' . $age . ' ans.';
  }
  echo presentation();
  ?>
</body>
</html>
