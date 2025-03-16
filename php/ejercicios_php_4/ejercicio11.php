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

Ejercicio 11: Releer un fichero utilizando rewind

Leer parcialmente un fichero ("releer.txt"), luego utilizar rewind() para volver al inicio y leer el contenido completo.

Pseudocódigo:
Abrir el fichero en modo lectura.
Leer parte del fichero.
Utilizar rewind para volver al inicio.
Leer el fichero completo.
Mostrar el contenido completo.
Cerrar el fichero.

*/

// Abrir el fichero en modo lectura
$archivo = fopen("releer.txt", "r") or die("No se puede abrir el archivo");

// Leer parte del fichero.
$parte = fread($archivo, 10);

// Utilizar rewind para volver al inicio.
rewind($archivo);

// Leer el fichero completo.
$contenido = fread($archivo, filesize("releer.txt"));

// Mostrar el contenido completo.
echo $contenido;

// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
