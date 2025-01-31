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

	// Determinar si un número es positivo, negativo o igual a cero.
	//
	$numero=5;	// Definir el número a analizar

	if ($numero>0) {	// Si el número es mayor que cero
		echo "El número ".$numero." es positivo.";	// Mostrar mensaje
	}
	elseif ($numero<0) {	// Si el número es menor que cero
		echo "El número ".$numero." es negativo.";	// Mostrar mensaje
	}
	else {	// Si el número es igual a cero
		echo "El número ".$numero." es igual a cero.";	// Mostrar mensaje
	}	// Fin de la estructura condicional

?>

</body>
</html>
