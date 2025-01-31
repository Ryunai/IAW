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

	//	Mostrar los números pares del 1 al 10 utilizando un bucle for.
	//
	for ($i=1; $i<=10; $i++) {	// Inicializar la variable $i a 1; mientras $i sea menor o igual a 10; incrementar $i en 1
		if ($i%2==0) {	// Si el resto de dividir $i entre 2 es 0
			echo $i."<br>";	// Mostrar $i
		}
	}

?>

</body>
</html>
