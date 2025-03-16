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

Ejercicio 9: Obtener metadatos de un fichero
Utilizar stat() para obtener información de un fichero ("info.txt") y mostrar el tamaño y la fecha de modificación.

Pseudocódigo:
Obtener los datos del fichero usando stat.
Extraer el tamaño y la fecha de modificación.
Mostrar la información.

*/

// Obtener los datos del fichero usando stat.
$datos = stat("info.txt");

// Extraer el tamaño y la fecha de modificación.
$tamano = $datos['size'];

$fecha = date("d/m/Y H:i:s", $datos['mtime']);

// Mostrar la información.
echo "El fichero tiene $tamano bytes y fue modificado el $fecha.";

?>

</body>
</html>
