<?php
// Probleme : Trouver les chiffre d'un rectangle dans un autre réctangle930870
//  123			930870
//  321 ----> 	081235
//  123			973217	
// 			    091230
//			    889700		


$c1 = file_get_contents('c1.txt');
$c2 = file_get_contents('c2.txt');


$array_c1 = str_split($c1);
$array_c2 = str_split($c2);

$i = 0;

while (($x + $y + $z) != ($array_c1[0] + $array_c1[1] + $array_c1[2])) {
	$x = $array_c2[$i];
	$y = $array_c2[$i + 1];
	$z = $array_c2[$i+2];
	$i = ($i + 1);
}

$x = ($i / 5);
$y = ($i / 6);

echo round($x);
echo ",";
echo round($y,0 ,PHP_ROUND_HALF_DOWN);
echo "\n";


