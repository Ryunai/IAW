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

Ejercicio 2: Escribir datos en un fichero
Crear o abrir un fichero ("salida.txt") y escribir una cadena de texto en él usando fopen(), fwrite() y fflush().

Pseudocódigo:
Abrir o crear el fichero en modo escritura.
Definir la cadena de texto a escribir.
Escribir la cadena en el fichero.
Forzar la escritura en disco.
Cerrar el fichero.

*/

// Abrir o crear el fichero en modo escritura.
$archivo = fopen("salida.txt", "w") or die("No se puede abrir el archivo");

// Definir la cadena de texto a escribir.
$cadena = "Hola, mundo!";
// Escribir la cadena en el fichero.
fwrite($archivo, $cadena);
// Forzar la escritura en disco.
fflush($archivo);
// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
