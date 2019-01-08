<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice3</title>
  <h3>PHP - Partie 4 - Exercice 3</h3>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
  <?php
  function string($var1 = "Une 1ère chaîne de caractères", $var2 = " suivi d'une seconde chaîne de caractères"){
    return $var1 . $var2;
  }
  echo string();
  ?>
</body>
</html>
