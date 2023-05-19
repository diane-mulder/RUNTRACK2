<?php

session_start(); // cette ligne demarre la session


if (!isset($_SESSION['nbvisites'])){ // initialise la variable de session si elle n'existe pas
    $_SESSION['nbvisites'] = 0;
}
$_SESSION['nbvisites']++; // incrémentation de la variable de sassion à chaque visite
echo "nombre de visites:".$_SESSION['nbvisites']; // affiche le contenu de la variable de session

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0; // réinitialise la variable de session si le bouton"reset" a été cliqué
}


?>

<form method="post">
<!-- en cliquant sur ce bouton le nb de visiteurs se réinitialise -->
    <input type="submit" name="reset" value="Réinitialiser"> 
</form>