<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array(); // Initialise la variable de session si elle n'existe pas
}

if (isset($_POST['nom'])) {
array_push($_SESSION['prenoms'], $_POST['nom']); // Ajoute le prénom à la variable de session si le formulaire est soumis
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array(); // Réinitialise la variable de session si le bouton "reset" a été cliqué
}

echo "Liste des prénoms : ";
foreach ($_SESSION['prenoms'] as $prenom) {
    echo $prenom."<br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-j6-job04</title>
</head>

<body>
<!-- créer un formulaire pour rentrer le prénom -->
    <form method="post">
        <input type="text" name="nom">
        <input type="submit">
    </form>

    <form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>









