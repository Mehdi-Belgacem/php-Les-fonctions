<?php
  $firstNumber = 7 ;
  $secondNumber = 3 ;
  $numberThird = 12 ;
  function myFunction($firstNumber, $secondNumber, $numberThird) {
    return $firstNumber + $secondNumber + $numberThird;
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
  <h1>Partie 4 Exercice 8:</h1>
  <p><?= myFunction($firstNumber, $secondNumber, $numberThird); ?></p>
</body>
</html>