<?php
// Probleme : afficher un escalier de #
//0- pour x = ?, y = (x-1) et z=(x-y)
//1- afficher pour 4 marche y=(4-1)=3 espace et z=(4-3)=1 # :  "   #"
//1-  y=(3-1)= 2 espace z=(4-2)=2							:  "  ##"
//2-  y=(2-1)= 1 espace z=(4-1)=3							:  " ###"
//3- y=(1-1)=0 espace z=(4-0)= 4							:  "####"

$x = readline("Hello, rentre ton nombre d'escalier petit coquin :");
$w = $x;

while ($y !== 0) { 
	$y = ($x - 1);
	$z = ($w - $y);
	$x = $y;
	$multiply_espace = str_repeat(" ", $y);
 	$multiply_diese = str_repeat ('#', $z);
	echo "$multiply_espace$multiply_diese \n";
}