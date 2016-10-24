<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1>EXERCICI 10<h1> 

	<?php

	//declaro el directori on es troben les imatges
	$dir="imatges";

	//Creo una taula on insertar les imatges
	echo "<table>";
	if (is_dir($dir)){
		if($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false){

				//Busquem l'extensió de l'arxiu
				$extension = end(explode('.', $file));
             	//Llama a la funcion validar_ext y pasa la extension del archivo.
             	$comprovar = validar_ext($extension);

             	  if($file != "." && $file != ".." && $comprovar=="S"){
                 echo "<tr><td><img width='100px' height='100px' src=".$dir.'/'.$file."></td></tr>";
				}

			}
		}
	}
	echo "</table>";

	//Funcio per comprovar la extensió. 
     function validar_ext($extension){
         if($extension=='jpg'|| $extension=='png' || $extension=='bmp' || $extension=='gif'){
             return "S";
         }else{
             return "N";
         }
     }

?>


</body>
</html>