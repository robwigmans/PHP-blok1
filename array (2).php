<?php

// Initialisatie
$CIJFER=10;

echo "Voorbeeld array <br>";
echo $CIJFER;
echo "<br>";

//$cijfers[0] = 8;
//$cijfers[1] = 9;
$som = 0;
$cijfers = array(8,9, 10, 11, 12);
$namen = array("Kees", "Jan", "Piet", "Klaas", "Pieter" );
$aantal = count($cijfers);
echo "Aantal: $aantal <br>";
echo "Dit is de eerste waarde uit het array: $cijfers[0] <br>";
echo "Dit is de tweede waarde uit het array: $cijfers[1] <br>";

echo "Inhoud array <br>";
for($t=0; $t < $aantal; $t++) {
	echo "Oude waarde som: $som + cijfers[$t]: ";
	echo $cijfers[$t];
	$som = $som + $cijfers[$t];
	echo " = Nieuwe waarde som: $som <br>";
	echo "<br>";
}

$gem = $som/$aantal;
echo "Gemiddelde: " . $som/$aantal . "<br>";
// Niet doen $som = $cijfers[0]+ $cijfers[1]+.........;

for($tt=0; $tt < $aantal; $tt++){
	//echo $namen[$tt] . " " . $cijfers[$tt] . $gem-$cijfers[$tt];
	$verschil = $gem-$cijfers[$tt];
	echo $namen[$tt] . " " . $cijfers[$tt] . " " . $verschil;
	echo "<br>";
}

?>