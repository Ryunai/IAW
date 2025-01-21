<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php

	$edad = 20;		//variable de tipo entero con valor 20
	$estatura = 1.75;	//viariable de tipo flotante con valor 1.75
	$nombre = "Pablo";	//Variable tipo string con valor pablo
	$frase = "tengo $edad años";
	$profesor = true;	//variable boolean con valor false

	echo $edad;
	echo "<br>";		//Salto de linea en html
	echo $estatura;
	echo "<br>";
	echo "Mi nombre es " . $nombre;
	echo "<br>";
	echo $profesor;
	echo "<br>";
	echo json_encode($profesor);	//funcion que devuelve valor de variable boolean
	echo "<br>";
	echo $frase;
	echo "<br>";

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

?>

</body>
</html>
