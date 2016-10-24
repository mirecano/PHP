<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1><?php

	echo "EXERCICI 1";

	?></body<h1>
	<?php
		//Definim variable "d" (día en que ens trobem)
		$d= Date("D");
		
		//Comparem si el dia es més petit o igual que 10 mitjançant if
		if ($d <= 10){

			echo '<h3>El lloc es troba disponible</h3>';
		}else {
			echo '<h3>Lloc fora de servei </h3>';
		}
?>

</body>
</html>