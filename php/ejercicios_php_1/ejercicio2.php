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

	// Ya existe un valor para pi en php
	// Si quisieramos asignarlo a una variable se podria hacer asi:
	//
	const mipi=3.131592;
	echo mipi."<br>";
	echo pi()."<br>";

	// Calculo del area de un circulo con radio 5
	//
	$radio=5;
	$area=mipi*($radio*$radio);
	echo "El area de un circulo de radio=$radio es: $radio"."<br>";

?>

</body>
</html>
