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

Ejercicio 14: Copiar el contenido de un fichero a otro
Leer el contenido de un fichero ("origen.txt") y copiarlo a otro fichero ("destino.txt").

Pseudocódigo:

Abrir el fichero origen en modo lectura.
Leer el contenido completo.
Abrir o crear el fichero destino en modo escritura.
Escribir el contenido en el fichero destino.
Cerrar ambos ficheros.


*/

// Abrir el fichero origen en modo lectura.
$origen = fopen("origen.txt", "r") or die("No se puede abrir el archivo origen");

// Leer el contenido completo.
$contenido = fread($origen, filesize("origen.txt"));

// Abrir o crear el fichero destino en modo escritura.
$destino = fopen("destino.txt", "w") or die("No se puede abrir el archivo destino");

// Escribir el contenido en el fichero destino.
fwrite($destino, $contenido);

// Cerrar ambos ficheros.
fclose($origen);
fclose($destino);

?>

</body>
</html>
