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

	// Mostrar las edades mayores a 18 de un array utilizando un bucle foreach.
	//
	$edades=array(15, 18, 20, 25, 30, 35, 40, 45, 50);	// Definir un array con las edades
	foreach ($edades as $edad) {	// Para cada elemento del array
		if ($edad>18) {	// Si la edad es mayor que 18
			echo $edad."<br>";	// Mostrar la edad
		}
	}

?>

</body>
</html>
