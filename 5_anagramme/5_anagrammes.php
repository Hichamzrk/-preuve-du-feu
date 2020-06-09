<?php
// Probléme : Retrouver l'anagramme du mot entré dans la liste de mot enregistré

// 1- transformer le mot en tableau de lettre

// 2- transormer la liste de mot en tableau de mot

// 3- trouver les mots qui ont le meme nombre de lettre que mon mot

// 4- Trouver le mot qui a les meme lettres que mon mot

$mot = readline('Met ton mot ici :');
$listmot = file_get_contents('listmot.txt');
$array_mot = str_split($mot);
$array_listmot = explode(" ", $listmot);
$x = count($array_mot);

for ($i=0; $x !== $y  ; $i++) { 

	$y = strlen($array_listmot[$i]);

}



echo $array_listmot[($i-1)];
