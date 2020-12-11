<?php
  $age = 19;
  $gender = 'Femme' ;
  function myFunction($gender, $age) {
    if ($age >= 18 AND $gender == 'Homme') {
      return 'Vous êtes un homme et vous êtes majeur';
    }elseif ($age <= 18 AND $gender == 'Homme') {
      return 'Vous êtes un homme et vous êtes mineur';
    }elseif ($age >= 18 AND $gender == 'Femme') {
      return 'Vous êtes une femme et vous êtes majeure';
    }elseif ($age <= 18 AND $gender == 'Femme') {
      return 'Vous êtes une femme et vous êtes mineure';
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
  <h1>Partie 4 Exercice 7:</h1>
  <p><?= myFunction($gender, $age);?></p>
</body>
</html>