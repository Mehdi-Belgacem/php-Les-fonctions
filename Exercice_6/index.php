<?php
  $lastName = 'Dupont';
  $firstName = 'Jean' ;
  $age = 45 ;
  function myFunction($lastName, $firstName, $age) {
    return 'Bonjour ' . $lastName . ' ' . $firstName . ' , tu as ' . $age . ' ans.';
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
  <h1>Partie 4 Exercice 6:</h1>
  <p><?= myFunction($lastName, $firstName, $age) ?></p>
</body>
</html>