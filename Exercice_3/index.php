<?php
  $message = 'Bonjour';
  $name = 'Mehdi';
  function myFunction($message, $name){
    return $message . ' ' . $name ;
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
  <h1>Partie 4 Exercice 3</h1>
  <p><?= myFunction($message, $name); ?></p>
</body>
</html>