<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-j4-job04</title>
</head>

<body>
    <form action="job04.php" method="POST">
        <label for="nom">NOM:</label>
        <input type="text" name="nom" id="nom"> 
        <label for="prénom">PRENOM:</label>
        <input type="text" name="prenom" id="prenom"> 
        <input type="submit" value="ENVOYER">
    </form>

<?php
if(isset($_POST)) { // Vérifie que le formulaire a été envoyé
    echo "<table border>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    foreach($_POST as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>"; // Affiche chaque argument et sa valeur dans une ligne du tableau
    }
    echo "</table border>";
} else{
    echo"Aucun argument GET n'a été envoyé";
}
?>

</body>
</html>