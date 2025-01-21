<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Practicas PHP </title>
</head>

<body>

<?php

	// Variables Operadores
	//
	$num1 = 10;
	$num2 = 3;
	
	// Operaciones Aritmeticas
	//
	$total = $num1 + $num2;		// Suma
	$div = $num1  / $num2;		// Division
	$resto= $num1 % $num2;		// Resto de division

	// Operadores de Asignacion
	//
	$num3 = 5;
	$num4 = 10;
	$num5 = 0;

	// Asignacion basica
	//
	$num5 = $num3;
	
	// Asignacion abreviada
	//
	$num3+=$num4;

	// Resultados
	//
	echo "Suma: ".$total."<br>";
	echo "Division: ".$div."<br>";
	echo "Resto: ".$resto."<br>";
	echo $num5."<br>";
	echo $num3."<br>";

?>

</body>
</html>
