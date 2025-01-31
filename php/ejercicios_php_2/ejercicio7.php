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

	// Escribir un programa que actúe como calculadora simple utilizando switch.
	//
	$operacion="resta";	// Definir la operación a realizar
	$numero1=5;	// Definir el primer número
	$numero2=3;	// Definir el segundo número
	$resultado=0;	// Inicializar la variable que almacenará el resultado

	// Estructura switch para seleccionar la operación a realizar
	//
	switch ($operacion) {
		case "suma":	// Si la operación es suma
			$resultado=$numero1+$numero2;
			echo "La suma de ".$numero1." y ".$numero2." es ".$resultado.".";
			break;	// Fin de la operación

		case "resta":	// Si la operación es resta
			$resultado=$numero1-$numero2;
			echo "La resta de ".$numero1." y ".$numero2." es ".$resultado.".";
			break;	// Fin de la operación

		case "multiplicacion":	// Si la operación es multiplicación
			$resultado=$numero1*$numero2;
			echo "La multiplicación de ".$numero1." y ".$numero2." es ".$resultado.".";
			break;	// Fin de la operación

		case "division":	// Si la operación es división
			$resultado=$numero1/$numero2;
			echo "La división de ".$numero1." y ".$numero2." es ".$resultado.".";
			break;	// Fin de la operación

		default:	// Si la operación no es ninguna de las anteriores
			echo "Operación no válida.";	// Mostrar mensaje de error
	}	// Fin de la estructura switch

?>

</body>
</html>
