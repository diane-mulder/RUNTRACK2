<?php

for ($i=0; $i<=100; $i++){ // afficher les nombres de 0 à 100 
    
    if ($i==42){
        echo"La Plateforme <br/>"; // si le nombre est 42 afficher "la plateforme"
   
        }elseif($i>=25 && $i<=50){
        echo"<u>$i</u><br/>";// si le nombre est entre 25 et 50 = souligner

        }elseif ($i<=20){
            echo"<i>$i</i><br/>";// si le nombre est entre 0 et 20 = italique
    
         } else{
        echo"$i<br/>";
    }
}


?>