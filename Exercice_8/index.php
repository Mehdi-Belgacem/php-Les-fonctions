<?php
  function numbers($firstNumber = 23567, $secondNumber = 22456, $numberThird = 1222) {
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
  <p><?= numbers(); ?></p>
</body>
</html>