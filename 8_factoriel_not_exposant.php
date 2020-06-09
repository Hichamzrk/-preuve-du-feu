<?php
// Probléme : Factoriel sans exposant !


function factorielle($nbr) 
    { 
       if($nbr === 0) // condition d'arret 
          return 1;  
      else 
          return $nbr*factorielle($nbr-1); 
    }  

    echo number_format(factorielle(42));
?>