<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php 

function SomLijst(array $lijst){
	$som = 0;
	$aantal = count($lijst);
	for($t=0; $t < $aantal; $t++){
		$som = $som + $lijst[$t];
	}
	return $som;
}
function Gem(array $lijst){

	return Som($lijst)/count($lijst);
	
}
function Som2(array $lijst, int &$uitkomst){
		
	$uitkomst = SomLijst($lijst);
	echo "<br>test" . $uitkomst;
}	
// Hoofdprogramma

$cijfers = array(1,2,3,4);
$uit = 3;
echo SomLijst($cijfers);
echo "<br>Gemiddelde: " . Gem($cijfers);
Som2($cijfers, $uit);
echo "De uitkomst is:" . $uit;

?>
</body>
</html>
