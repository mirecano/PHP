<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1><?php

	echo "EXERCICI 7";

	?></body<h1> 
	<?php
		//defino constante
		define('TAM', 10);
		echo "<table border=1>";


		

		for($i=1; $i<=TAM; $i++){

			if ($i%2 == 0){
				echo "<tr bgcolor = #BFBFBF><td> 10 x ".$i. "=" .(TAM*$i). "</td></tr>";
				
			}else {
				echo "<tr><td> 10 x ".$i. "=" .(TAM*$i). "</td></tr>";
			}
		
		}
		echo "</table>";

	
?>

</body>
</html>