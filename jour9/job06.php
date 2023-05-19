<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09', 'root' , 'Dyane198124//');

$requete = $bdd->prepare('SELECT COUNT(*) AS nb_etudiants FROM etudiants');
$requete->execute();
$etudiants = $requete->fetchAll();

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
                <th>Nombre d'étudiants</th>
            </tr>
<?php
foreach($etudiants as $etudiants){
?>
<tr>
    <td><?php echo $etudiants['nb_etudiants']; ?></td>
</tr>

<?php
}
?>
        </table>
    </body>
</html>
