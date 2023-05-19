<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09', 'root' , 'Dyane198124//');

$requete = $bdd->prepare('SELECT SUM(superficie) AS superficie_totale FROM etage');
$requete->execute();
$etage = $requete->fetchAll();

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 20%;
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
                <th>Superficie totale</th>
            </tr>
<?php
foreach($etage as $etage){
?>
<tr>
    <td><?php echo $etage['superficie_totale']; ?></td>
</tr>

<?php
}
?>
        </table>
    </body>
</html>
