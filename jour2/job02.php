<?php

// afficher les nombres entre 0 et 1337 sauf 26,37,88,1111 et1233 
for ($i=0; $i<=1337; $i++) {
    if ($i!=26 && $i !=37 && $i !=88 && $i !=1111 && $i !=1233) { // l'opérateur != est utilisé pour vérifier si le nombre est différent
        echo"$i<br/>";                                            // de valeurs interdites.
    }
}



?>