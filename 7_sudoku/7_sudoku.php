<?php
// Probléme : résoudre un sudoku !

//Comment résoudre le sudoku?

// Comment transformer sudoku en colonne de colonne 
//[[1][4][8][3][6][8][2][4][5]] [[1][4][8][3][6][8][2][4][5]] [[1][4][8][3][6][8][2][4][5]]

// 1- pour chaque rencontre de '_' de chaque ligne !
// 2- modifier '_' en chiffre de 1 à 9 !
// 3- pour chaque chiffre, vérifier si chiffre existe deja dans ligne si non

// 	4- pour chaque chiffre, vérifier si chiffre existe deja dans la colonne si non
// -->	Pour chaque $array[$x][$key] mettre les valeurs dans un tableau array[] et verifier si $i existe

// 		5- pour chaque chiffre, vérifier si chiffre existe déja dans le carré si non
// 6- aller au '_' suivant

$sudoku = file_get_contents('chiffre_sudoku.txt');
$colonne = [];

$array = explode("\n", $sudoku);
$z = 0;


for ($i=0; $i <=10 ; $i++) { 
	
	$array[$i] = str_split($array[$i]);
}


for ($y=0; $y <= 10 ; $y++) { 

	foreach ($array[$y] as $key => $value) {
		
		if ($value == '_') {

			for ($i=0; in_array($i, $array[$y]) ; $i++) { 
			
			}
			for ($x=0; $x <=10 ; $x++) { 
				
				array_push($colonne, $array[$x][$key]);
			}
			for ($i=$i; in_array($i, $colonne) ; $i++) { 
				
			}

		$colonne = [];
		$array[$y][$key] = $i;
		}
	}
}
foreach ($array as $key => $value) {
echo implode($array[$key]);
echo "\n";
}