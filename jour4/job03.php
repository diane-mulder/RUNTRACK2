<?php
$count=count($_POST); // count récupère le nombre d'arguments POST envoyé
echo"Le nombre d'arguments GET envoyé est :$count"; // affiche le nombre d'arguments
?>


<!DOCTYPE html>
<html>

    <head>
        <title>Cours PHP & formulaires</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.php">
    </head>


    <body>
        <form action="essai.formulaire" method="POST">
        <input type="text"><br>
        <input type="submit">
        </form>
    </body>
    
</html>