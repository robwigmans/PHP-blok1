<!DOCTYPE html>
<html>
<head>

</head>
<body>


<?php
$myfile = fopen("log.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

?>
</body>
</html>
