<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice5</title>
  <h3>PHP - Partie 4 - Exercice 5</h3>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
  <?php
  function string($var1 = 2, $var2 = "chaînes de caractères"){
    return $var1 . ' ' . $var2;
  }
  echo string();
  ?>
</body>
</html>
