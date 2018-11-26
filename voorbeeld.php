<?php
function SomLijst(array $lijst){
	$som = 0;
	$aantal = count($lijst);
	for($t=0; $t < $aantal; $t++){
		$som = $som + $lijst[$t];
	}
	return $som;
}

function Som($getal1, $getal2){
	$som = $getal1 + $getal2;
	return $som;
}
function Vrm($getal1, $getal2){
	$uit = $getal1 * $getal2;
	return $uit;
}
function Gem(array $lijst){
	$aantal = count($lijst);
	//Roep aan function SomLijst
	$som = SomLijst($lijst);
	// totaal delen door aantal
	$gem = $som / $aantal;
	return $gem;
}
// Hoofdprogramma
$cijfers = array(1,2,3);
echo "<br> Uitkomst Gem: " . Gem($cijfers);
echo "<br> Uitkomst SomLijst: " . SomLijst($cijfers);
$getal1 = 10;
$getal2 = 20;
$getal3 = 100;
$som = $getal1 + $getal2;
echo $som;
echo "<br>Uitkomst Som: " . Som($getal1, $getal3);
echo "<br>Uitkomst Vrm: " . Vrm($getal1, $getal3);



?>