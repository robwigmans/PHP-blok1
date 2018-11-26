<?php

$naam = "Pietje";
$myfile = fopen("log.txt", "a");
fwrite($myfile, $naam);
fwrite($myfile, $naam);
fclose($myfile);
echo "klaar";
?>