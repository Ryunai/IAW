<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 1 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

	// Declara dos variables y utiliza operadores de comparacion (==, !=, >,<) para mostrar resultados booleanos
	// 
	$num1 = 123;
	$num2 = 456;
	
	echo "Num1 vale $num1"."<br>";
	echo "Num2 vale $num2"."<br>"."<br>";
	// Comparaciones
	//
	echo "Num1 y num2 son distintos?"."<br>";
		if ($num1!=$num2) {
			echo "true"."<br>"."<br>";
		}
		else {
			echo "true"."<br>"."<br>";
		}
	
	echo "Num1 y num2 son iguales?"."<br>";
		if ($num1==$num2) {
			echo "true"."<br>"."<br>";
		}
		else {
			echo "true"."<br>"."<br>";
		}

	echo "Num1 y num2 son identicos?"."<br>";
		if ($num1===$num2) {
			echo "true"."<br>"."<br>";
		}
		else {
			echo "true"."<br>"."<br>";
		}

	echo "Num1 es menor que Num2?"."<br>";
		if ($num1<$num2) {
			echo "true"."<br>"."<br>";
		}
		else {
			echo "true"."<br>"."<br>";
		}

	echo "Num1 es mayor que Num2?"."<br>";
		if ($num1>$num2) {
			echo "true"."<br>"."<br>";
		}
		else {
			echo "true"."<br>"."<br>";
	}

?>

</body>
</html>
