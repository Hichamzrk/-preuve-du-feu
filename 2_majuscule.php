<?php
// Probleme : Mettre en majuscule une lettre sur deux d'une chaine de caractére

// 1 - Rentrer la phrase : je vais bien
// 2 - remplacer une n eme lettre de la chaine
// 3 - Mettre les lettres dans un tableau
// 4 - Pour index = pair , mettre en majuscule

$text = readline('Entre ta phrase ici :');
$array = str_split($text); // Met chaque lettre dans un tableau
$x = count($array); //C'est le nombre d'element dans le tableau

print_r($array[0]); 

// boucle pour tous les elements du tableau si impair mettre en majuscule
while ($i<=$x) 
{
	$i = ($i + 1);
	if ($i%2 == 1) 
	{
		echo strtoupper($array[$i]);
	}
	else 
	{
		print_r($array[$i]);
	}
}

echo "\n";
