<?php

$cookiefin = time()+60*60*24;
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, $cookiefin);
    header('Location: '.$_SERVER['PHP_SELF']); // Redirige vers la même page pour éviter une resoumission du formulaire
    exit();
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprime le cookie pour déconnecter l'utilisateur
    header('Location: '.$_SERVER['PHP_SELF']); // Redirige vers la même page pour éviter une resoumission du formulaire
    exit();
}

if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo 'Bonjour '.$prenom.' !';
    echo '<form method="post"><input type="submit" name="deco" value="Déconnexion"></form>'; // Affiche un bouton pour se déconnecter
} else {
    echo '<form method="post"><label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom"><input type="submit" name="connexion" value="Connexion"></form>'; 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack.2-j6-job04</title>
</head>

<body>
<!-- créer un formulaire pour rentrer le prénom -->
    <form method="post">
        <input type="text" name="prenom">
        <input type="submit" name="connexion">
    </form>

    <form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>