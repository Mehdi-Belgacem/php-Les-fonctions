<?php
  function compareNumber($firstNumber = 22, $secondNumber = 54) {
    if ( $firstNumber == $secondNumber ) {
      $message = 'Les deux nombres sont identiques si les deux nombres sont égaux';
    }elseif ( $firstNumber < $secondNumber ) {
      $message = 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
    }else {
      $message = 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
    }return $message;
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
  <p><?= compareNumber() ?></p>
</body>
</html>