<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1><?php

	echo "EXERCICI 2";

	?></body<h1>
	<?php
		//Declaro la variable num
		$num=rand(1,100);
		echo '<p> El valor generat és:' .$num. '<p>';
		if($num <50){
			echo "El valor és més petit que 50";
		} else if ($num > 50){
			echo "El valor és més gran que 50";
		} else{
			echo "El valor és igual a 50";
		}

?>

</body>
</html>