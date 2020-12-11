<?php
  $firstNumber = 22;
  $secondNumber = 54;
  function myFunction($firstNumber, $secondNumber) {
    if ( $firstNumber > $secondNumber ) {
      return 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
    }elseif ( $firstNumber < $secondNumber ) {
      return 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
    }elseif ( $firstNumber == $secondNumber ) {
      return 'Les deux nombres sont identiques si les deux nombres sont égaux';
    }
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 4 Exercice 4:</h1>
  <p><?= myFunction($firstNumber, $secondNumber ) ?></p>
</body>
</html>