<?php

$str = "Dans l'espace, personne ne vous entend crier";
$length = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $length++;
}

echo "La chaîne '$str' contient $length caractères.";

?>