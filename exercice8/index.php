<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice8</title>
  <h3>PHP - Partie 4 - Exercice 8</h3>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
  <p>Tous les paramètres doivent avoir une valeur par défaut.</p>
  <?php
  function addition($var1 = 2, $var2 = 4, $var3 = 10){
    return $var1 + $var2 + $var3;
  };
  echo addition();
  ?>
</body>
</html>
