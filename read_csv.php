<?php



$myfile = fopen("log.txt", "r") or die("Kan bestand niet openen!");
echo fread($myfile,filesize("log.txt"));
fclose($myfile);







// Voorbeeld 1
$row = 1;
if (($handle = fopen("log.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: </p>";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . ", ";
        }
		echo "<br />\n";
    }
    fclose($handle);
}


// Voorbeeld 2
$csv = array_map('str_getcsv', file('log.txt'));
for ($r=0;$r<count($csv);$r++)
{
	for($k=0;$k<count($csv[0]); $k++)
	{
		echo $csv[$r][$k] . " ";
	}
	echo "<br>";
}

echo "NLL<br>";

// Voorbeeld 3
$handle = fopen('log.txt', 'r');
//loop through the csv file and insert into array
$dataline = fgetcsv($handle,10000,",");
$fieldnum = count($dataline);

$recordloop = 0;

while ($dataline) 
{ 

    for ($fieldloop=0; $fieldloop <$fieldnum; $fieldloop++)
    {
        //this is the bit that is wrong
        //$dataarray[]=array($dataline[$fieldloop]);
		echo $dataline[$fieldloop] . " ";
    }
	echo "<br>";

    $dataline = fgetcsv($handle,1000,",");
    $recordloop++;
}


?> 

