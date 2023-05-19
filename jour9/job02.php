<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09', 'root' , 'Dyane198124//');

$requete = $bdd->prepare('SELECT * FROM salles');
$requete->execute();
$salles = $requete->fetchAll();

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
                <th>nom</th>
                <th>capacite</th>
            </tr>
<?php
foreach($salles as $salle){
?>
<tr>
    <td><?php echo $salle['nom']; ?></td>
    <td><?php echo $salle['capacite']; ?></td>
</tr>

<?php
}
?>
        </table>
    </body>
</html>
