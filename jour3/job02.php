<?php

// créer une variable de type string
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
for ($i=0; $i<strlen($str); $i+=2){ // créer une boucle pour parcourir la string en incrémentant de 2
    echo $str[$i];
}

?>