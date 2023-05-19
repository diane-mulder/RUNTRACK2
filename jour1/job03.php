<?php

// Créer des variables de différents types
$boolVar = true; // booléans
$intVar = 24; // nombre entier
$stringVar = "Coucou les amis"; // chaines de caracteres
$floatVar = 3.14; // nombres à virgule flottante

// Générer un tableau HTML pour afficher les informations des variables
echo "<table>"; // ouverture du tableau
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>"; // creation de l'entête du tableau
echo "<tbody>"; // creation du corps du tableau
echo "<tr><td>boolean</td><td>boolVar</td><td>$boolVar</td></tr>"; // creation des lignes et colonnes
echo "<tr><td>integer</td><td>intVar</td><td>$intVar</td></tr>"; //
echo "<tr><td>string</td><td>stringVar</td><td>$stringVar</td></tr>"; //
echo "<tr><td>float</td><td>floatVar</td><td>$floatVar</td></tr>"; //
echo "</tbody></table>"; // fermeture du tableau

// <table> = tableau
// <thead> = entête
// <tr> = ligne de tableau
// <td> = cellule de tableau
// <td> = colonne