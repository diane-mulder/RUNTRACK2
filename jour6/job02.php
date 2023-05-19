<?php

$cookiefin = time()+60*60*24;

setcookie("nbvisites", $cookiefin);
if (!isset($_cookiefin['nbvisites'])){ // initialise la variable de session si elle n'existe pas
    $_cookiefin['nbvisites'] = 0;
}
$_cookiefin['nbvisites']++; // incrémentation de la variable de sassion à chaque visite
echo "nombre de visites:".$_cookiefin['nbvisites']; // affiche le contenu de la variable de session

if (isset($_POST['reset'])) {
    $_cookiefin['nbvisites'] = 0; // réinitialise la variable de session si le bouton"reset" a été cliqué
}


?>

<form method="post">
<!-- en cliquant sur ce bouton le nb de visiteurs se réinitialise -->
    <input type="submit" name="reset" value="Réinitialiser"> 
</form>