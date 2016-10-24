<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1>EXERCICI 8<h1> 

	<form name="formulari" method="GET" action="index.php">
	<input type="text" name="numero">
	<input type="submit">


	<?php
	//Declaro array per guardar tots el números
	$array_num=array();

	//Per evitar l'error incial
	function initVar(&$var){
		return isset($var) ? $var :null;
	}

	//Enmagatzanem el valor introuït per teclat
	$numero = initVar($_GET['numero']);

	//omplim un a un l'array de valors a l'atzar
	for($i=0; $i<100; $i++){
		$atzar=rand(1,100);
		$array_num[$i] = $atzar;
	}

	//Comprovem si dins de l'array creat anteriorment està el numero introduït per teclat
	if($numero!=null){
		if(in_array($numero, $array_num)){
			echo "No trobat! :(";
		}else{
			echo "Numero trobat!!";
		}
	}

		
?>

</body>
</html>