<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09', 'root' , 'Dyane198124//');

$requete = $bdd->prepare('SELECT prenom, nom, naissance FROM etudiants WHERE sexe = "Femme"');
$requete->execute();
$etudiantes= $requete->fetchAll();
var_dump ($etudiantes);

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 50%;
            }
            th, td {
                border: 1px solid black;
                padding: 4px;
            }
        </style>
    </head>
            
    <body>
        <table>
            <tr>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
            </tr>
            <?php foreach($etudiantes as $etudiante) { ?>
            <tr>
                <td><?php echo $etudiante['prenom']; ?></td>
                <td><?php echo $etudiante['nom']; ?></td>
                <td><?php echo $etudiante['naissance']; ?></td>
            </tr>

            <?php } ?>
        </table>
    </body>
</html>
