<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; 

// Opslaan in log bestand
$naam = $_POST["name"];
$email = $_POST["email"];
$txt = $naam . "," . $email;
$file = fopen("log.txt", "a");
fwrite($file, $txt);
fclose($file);


echo "klaar";
?>

</body>
</html> 