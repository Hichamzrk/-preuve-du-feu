<?php
// Probleme : Faire la factoriel d'un chiffre n (si n=5, 1*2*3*4*5)
//-1 pour i<n x=x*i

function factorielle($nbr) 
    { 
       if($nbr === 0) // condition d'arret 
          return 1;  
      else 
          return $nbr*factorielle($nbr-1); 
    }  

    echo factorielle(readline('donne un chiffre :'));
?>