<?php
$count=count($_GET);
echo"Le nombre d'arguments GET envoyé est :$count";
?>


<!DOCTYPE html>
<html>

    <head>
        <title>Cours PHP & formulaires</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.php">
    </head>


    <body>
        <form action="essai.formulaire" method="GET">
        <input type="text"><br>
        <input type="submit">
        </form>
    </body>
    
</html>




        