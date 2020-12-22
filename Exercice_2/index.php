<?php
  $name = 'Bonjour, Jean comment vas tu ?';
    function printMessage($name){ // function printMessage(string $message)
      return $name;
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
  <h1>Partie 4 Exercice 2:</h1>
    <p><?= printMessage($name); ?></p>
</body>
</html>