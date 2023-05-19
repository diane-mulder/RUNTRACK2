<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09', 'root' , 'Dyane198124//');

$requete = $bdd->prepare('SELECT * FROM etudiants WHERE prenom LIKE"T%"');
$requete->execute();
$etudiants = $requete->fetchAll();

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
            }
            
            th, td {
                border: 1px solid black;
                padding: 8px;
            }
        </style>
    </head>
            
    <body>
        <table>
            <tr>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
            </tr>
<?php
foreach($etudiants as $etudiant){
?>
<tr>
    <td><?php echo $etudiant['prenom']; ?></td>
    <td><?php echo $etudiant['nom']; ?></td>
    <td><?php echo $etudiant['naissance']; ?></td>
    <td><?php echo $etudiant['sexe']; ?></td>
    <td><?php echo $etudiant['email']; ?></td>
</tr>

<?php
}
?>
        </table>
    </body>
</html>
