<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 4 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025

Ejercicio 10: Leer un fichero en forma de arreglo de líneas
Leer un fichero ("lineas.txt") y almacenar cada línea en un arreglo usando la función file().

Pseudocódigo:
Leer el fichero y obtener un arreglo de líneas.
Recorrer el arreglo y mostrar cada línea.

*/

// Leer el fichero y obtener un arreglo de líneas.
$lineas = file("lineas.txt");

// Recorrer el arreglo y mostrar cada línea.
foreach ($lineas as $linea) {
	echo $linea . "<br>";
}

?>

</body>
</html>
