<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 3 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025

Ejercicio 1: Leer un fichero línea a línea
Leer un fichero de texto ("archivo.txt") línea a línea utilizando fopen(), fgets() y feof().

Pseudocódigo:
Abrir el fichero en modo lectura
Mientras no se alcance el final del fichero:
Leer una línea.
Mostrar la línea.
Cerrar el fichero.

*/

// Abrir el fichero en modo lectura
$archivo = fopen("archivo.txt", "r") or die("No se puede abrir el archivo");

// Mientras no se alcance el final del fichero:
while (!feof($archivo)) {
	// Leer una línea.
	$linea = fgets($archivo);
	// Mostrar la línea.
	echo $linea . "<br>";
}

// Cerrar el fichero.
fclose($archivo);


?>

</body>
</html>
