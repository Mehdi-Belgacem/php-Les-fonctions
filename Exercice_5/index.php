<?php
  $number = 26;
  $name = 'Belgacem Mehdi' ;
  function myFunction($name, $number) {
    return 'Bonjour, je m\'appelle ' . $name . ' , j\'ai ' . $number . ' ans.';
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
  <h1>Partie 4 Exercice 5:</h1>
  <p><?= myFunction($name, $number) ?></p>
</body>
</html>