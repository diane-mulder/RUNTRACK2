<?php

// Définir le tableau
$numbers = array(200, 204, 173, 98, 171, 404, 459);

// Parcourir le tableau et afficher si chaque nombre est pair ou impair
foreach ($numbers as $number) { // boucle qui permet de parcourir tous les éléments du tableau
  if ($number % 2 == 0) {
    var_dump($number . " est paire");
  } else {
    var_dump($number . " est impaire");
  }
}


?>