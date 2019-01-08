<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice4</title>
  <h3>PHP - Partie 4 - Exercice 4</h3>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <ul>
      <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
      <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
      <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
    </ul>
      <?php
$num1 = rand(1, 20);
$num2 = rand(1, 20);
  function number($num1, $num2){
    if ($num1 > $num2)
    {
      return 'Le premier nombre ' . $num1 . ' est plus grand que le deuxième nombre ' . $num2;
    }
    elseif ($num1 < $num2)
    {
      return 'Le premier nombre ' . $num1 . ' est plus petit que le deuxième nombre ' . $num2;
    }
    else
    {
      return 'Les deux nombres ' .$num1 . ' et ' . $num2 . ' sont identiques';
    }
  }
  echo number($num1, $num2);
  ?>
</body>
</html>
