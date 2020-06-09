<?php
// Probleme : Trier par ordre decroissant une chaine de chiffre

//1- Demander les chiffres

//2- Mettre les chiffres dans un tableau 

//3- trier le tableau

//4- afficher tableau

$chiffre = readline('Met tes chiffres ici (sépare chaque chiffre par un espace:');
$array = explode(" ", $chiffre);
rsort($array);

for ($i=0; $i < count($array); $i++) 
{ 
	echo " $array[$i]";
}

echo "\n";
