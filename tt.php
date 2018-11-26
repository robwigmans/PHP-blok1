<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php 

function Nl(){
	echo "<br>";
}

function PrintKleur(int $kleurcode) {

	if ($kleurcode == 10){
		echo "Groen";
	}
	else if ($kleurcode == 20){
		echo "Geel";
	}
	else {
		echo "Kleur niet bekend";
	}
	Nl();

}

Function Telop(int $getal, float $som){
	$uit = $getal + $som;
	return $uit;
}

Function Telop2(int $getal, int &$som){
	$som = $getal + $som;
}
// Start hoofdprogramma

$v1=10;
$v2=100;
Telop2($v1, $v2);
echo $v2;
Nl();


echo Telop(10,20.5);
Nl();
$v1 = Telop(10, 30);
echo $v1;
Nl();

PrintKleur(10);
PrintKleur(12);
echo "Start";
Nl();
Nl();
echo "Wigmans";


?>
</body>
</html>
