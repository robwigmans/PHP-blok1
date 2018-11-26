<?PHP
function Som(array $lijst) :int {
	$som = 0;
	$aantal = count($lijst);
	for($t=0; $t < $aantal; $t++){
		$som = $som + $lijst[$t];
	}
	return $som;
}

function Som2(array $lijst, int &$uitkomst, float &$uit){
		
	$uitkomst = Som($lijst);
	$uit = $uitkomst / 0.12;
	
}	
?>