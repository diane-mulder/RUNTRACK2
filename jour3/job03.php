<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = ""; // On initialise une chaîne vide pour stocker les voyelles trouvées

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // On convertit le caractère en minuscule pour simplifier la recherche
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y') {
        $vowels .= $str[$i]; // On ajoute la voyelle trouvée à la chaîne de voyelles
    }
}

echo $vowels;

?>