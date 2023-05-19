<?php

$str="On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic=['Consonnes' => '0', 'Voyelles' => '0']

for($i=0; $i<strlen($str); $i++){
    $char = strtolower($str[$i]);
    if (in_array($char, array('a', 'e', 'i', 'o', 'u', 'y'))) {
        $dic["voyelles"]++;
    } elseif (ctype_alpha($char)) {
        $dic["consonnes"]++;
    }
}

echo "<table><thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead><tbody><tr>";
echo "<td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td>";
echo "</tr></tbody></table>";  



?>