<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php 
$kleurcode = 10;

// Functie printkleur
function PrintKleur(int $kleurcode){

	if($kleurcode <= 10) {
		echo "Je kleur is geel!";
	} else if($kleurcode < 20) {
		echo "Je kleur is groen!";
	} else if($kleurcode < 40) {
		echo "Je kleur is zwart!";
	}else {
		echo "Geen geldige kleurcode";
	}
	echo "<br>";
}

function Telop(int $getal, int $som) {
	$uit = $som + $getal;
	return $uit;
}

function Nl(){
	echo "<br>";
}
function Telop2(int $getal, int &$som) {
	$uit = $som + $getal;
	$som = 1000;
	return $uit;
}
function Telop3(int $getal, int &$som) {
	$som = $som + $getal;
}		
// Start hoofdprogramma
$v1=10;
$v2=20;
$v3=100;
echo Telop2($v1,$v2);Nl();
echo $v2;Nl();
Telop3($v1,$v3);
echo "Uitkomst Telop3 $v3";
Nl();

PrintKleur(5);
PrintKleur(15);

echo Telop(10, 85);
Nl();
$uitkomst = Telop(1000, 85);
Nl();
echo $uitkomst;

?>
</body>
</html>
