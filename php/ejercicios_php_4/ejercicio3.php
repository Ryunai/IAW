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

Ejercicio 3: Añadir contenido a un fichero existente
Abrir un fichero ("registro.txt") en modo de anexado y agregar una nueva línea al final.

Pseudocódigo:
Abrir el fichero en modo "append".
Definir la línea de texto a agregar.
Escribir la línea en el fichero.
Cerrar el fichero.

*/

// Abrir el fichero en modo "append".
$archivo = fopen("registro.txt", "a") or die("No se puede abrir el archivo");

// Definir la línea de texto a agregar.
$linea = "Nueva línea\n";
// Escribir la línea en el fichero.
fwrite($archivo, $linea);
// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
