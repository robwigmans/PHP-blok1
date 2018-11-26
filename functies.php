<?php 
function Vrm($getal1, $getal2) {
	return $getal1 * $getal2;
}
function Vrm2($getal1,$getal2, &$uit, &$som) {
	
	$uit = Vrm($getal1,$getal2);
	$som = $getal1 + $getal2;
}
?>
