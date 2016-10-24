<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1><?php

	echo "EXERCICI 5";

	?></body<h1>
	<?php
		//Declaro la variable aleatoria
		$num=rand(1,3);

		echo '<p> El valor generat és:' .$num. '<p>';
		if($num == 1){
			echo "El valor és UN";
		} if ($num == 2){
			echo "El valor és DOS";
		} if( $num ==3){
			echo "El valor és TRES";

		}
	
?>

</body>
</html>