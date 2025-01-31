<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 2 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

	// Calcular el promedio de tres números y determinar si el estudiante aprueba (promedio >= 5).
	//
	$nota1=4;	// Definir la primera nota
	$nota2=6;	// Definir la segunda nota
	$nota3=5;	// Definir la tercera nota
	$promedio=0;	// Inicializar la variable que almacenará el promedio

	$promedio=($nota1+$nota2+$nota3)/3;	// Calcular el promedio

	if ($promedio>=5) {	// Si el promedio es mayor o igual a 5
		echo "El estudiante ha aprobado con un promedio de ".$promedio.".";
	}
	else {	// Si el promedio es menor que 5
		echo "El estudiante ha suspendido con un promedio de ".$promedio.".";
	}

?>

</body>
</html>
