<!DOCTYPE html>
<html>

    <head>
        <title>Cours PHP & formulaires</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.php">
    </head>

    <body>
        <form action="formulaire.html" method="GET">
            <label for="nom">NOM:</label>
            <input type="text"><br>

            <label for="nom">PRENOM:</label>
            <input type="text"><br>

            <input type="submit" value="ENVOYER">


    </body>

<?php
echo"<table border>"; //afficher un tableau
echo"<thead><tr><td>Argument</td><td>Valeur</td></tr></thead>";
echo"<tbody>";
echo"<tr><td>prénom</td><td>stéphane</td></tr>";
echo"<tr><td>Nom</td><td>Dupont</td></tr>";
echo "</tbody></table border>";
?>

