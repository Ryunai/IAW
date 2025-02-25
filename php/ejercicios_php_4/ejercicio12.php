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

Ejercicio 12: Registro de visitas en un fichero de log
Registrar la fecha y hora de cada visita del usuario en un fichero ("log.txt").

Pseudocódigo:
Obtener la fecha y hora actual.
Abrir el fichero en modo anexado.
Escribir la fecha y hora en una nueva línea.
Cerrar el fichero.

*/

// Obtener la fecha y hora actual.
$fecha = date("Y-m-d H:i:s");

// Abrir el fichero en modo anexado.
$archivo = fopen("log.txt", "a") or die("No se puede abrir el archivo");

// Escribir la fecha y hora en una nueva línea.
fwrite($archivo, $fecha . "\n");

// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
