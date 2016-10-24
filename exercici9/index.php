<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1>EXERCICI 9<h1> 

	<?php

	//declaro el directori on es troben les imatges
	$dir="imatges";

	//Creo una taula on insertar les imatges
	echo "<table>";
	if (is_dir($dir)){
		if($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false){
				if ($file != "." && $file != ".."){
					echo "<tr><td><img width='107px' src=" .$dir.'/'.$file."></td></tr>";
				}
			}
		}
	}
	echo "</table>"
?>

</body>
</html>