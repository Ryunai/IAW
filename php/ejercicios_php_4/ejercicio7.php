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

Ejercicio 7: Leer un fichero completo con file_get_contents
Leer el contenido completo de un fichero ("completo.txt") utilizando file_get_contents().

Pseudocódigo:
Utilizar file_get_contents para leer el fichero.
Mostrar el contenido.

*/

// Utilizar file_get_contents para leer el fichero.
$contenido = file_get_contents("completo.txt");

// Mostrar el contenido.
echo $contenido;

?>

</body>
</html>
