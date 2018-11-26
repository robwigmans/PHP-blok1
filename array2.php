<?php

$Dim2 = array(array("aaa", "bbb","cccc"), 
			  array(100, 200,400));
$maxrow = 2;
$maxcol = 3;

//$maxrow = count($Dim2);
//$maxcol = count($Dim2[0]);

for($i=0;$i<$maxrow;$i++){
	for($j=0;$j < $maxcol;$j++){
		echo $Dim2[$i][$j] . " ";
	}
	echo "<br>";
}

?>