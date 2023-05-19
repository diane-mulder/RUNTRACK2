<?php

// afficher les nombre entre 0 et 1337 dont 42 en gras
for ($i = 0; $i <= 1337; $i++) { // $i++ incrémente 1 à $i
    if ($i == 42) {
      echo "<b><u>$i</u></b><br />"; // balises HTML <b> pour gras et <u> pour souligné 
                                     //   et <br/> pour retour à la ligne
    } else {
      echo "$i<br />";
    }
  }

// autre essai perso
for ($i=0; $i<=10; $i++) {
    if ($i==5) {
        echo"<b><u>$i</u></b><br/>";

    } else {
        echo"$i<br/>";
    }
}


?>



