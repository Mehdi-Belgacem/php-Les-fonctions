<?php
  function identity($gender, $age) {
    if ($age >= 18 && $gender == 'Homme') {
      $message = 'Vous êtes un homme et vous êtes majeur';
    }elseif ($age <= 18 && $gender == 'Homme') {
      $message = 'Vous êtes un homme et vous êtes mineur';
    }elseif ($age >= 18 && $gender == 'Femme') {
      $message = 'Vous êtes une femme et vous êtes majeure';
    }else {
      $message = 'Vous êtes une femme et vous êtes mineure';
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
  <h1>Partie 4 Exercice 7:</h1>
  <p><?= identity('Femme', 23);?></p>
</body>
</html>