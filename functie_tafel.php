<?php

function PrintTafel(int $tafelnr){
	
	for($tel=1;$tel<=10;$tel++){
        echo "<br>$tafelnr x$tel= ".($tafelnr*$tel);
		echo "<br>" . $tafelnr . "x" . $tel. "= ".($tafelnr*$tel);
    }echo "<br>";
}
// Hoofdprogramma

// Initialisatie

// Rest het programma
PrintTafel(12);
echo "Klaar <br>";

for($tel=1;$tel<=10;$tel++){
    PrintTafel($tel);
}
        
        
?>