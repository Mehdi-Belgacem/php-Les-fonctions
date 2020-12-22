<?php
function sentence($number, $string) {
  return sprintf($string, $number); // sprintf pour utiliser le %d pour placer les chiffres dans une chaine de caractère. 
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
  <p><?= sentence(25, 'Il y a %d phrase(s)') ?></p> <!-- Inclure un chiffre direcemenet dans notre chaine de caractère avec "%d" -->
  <p><?= sentence(124, 'Il y a %d phrase(s)') ?></p>
</body>
</html>