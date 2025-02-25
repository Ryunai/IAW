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

Ejercicio 8: Reescribir el contenido de un fichero
Leer un fichero ("datos.txt"), modificar su contenido reemplazando una palabra y guardar los cambios.

Pseudocódigo:
Leer el contenido del fichero.
Buscar y reemplazar una palabra.
Abrir el fichero en modo escritura.
Escribir el contenido modificado.
Cerrar el fichero.

*/

// Leer el contenido del fichero.
$contenido = file_get_contents("datos.txt");

// Buscar y reemplazar una palabra.
$contenido = str_replace("mundo", "clase", $contenido);

// Abrir el fichero en modo escritura.
$archivo = fopen("datos.txt", "w") or die("No se puede abrir el archivo");

// Escribir el contenido modificado.
fwrite($archivo, $contenido);

// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
