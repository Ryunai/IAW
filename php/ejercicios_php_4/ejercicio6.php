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

Ejercicio 6: Leer un fichero carácter a carácter
Utilizar fgetc() para leer un fichero ("letras.txt") carácter a carácter y mostrar cada carácter.

Pseudocódigo:
Abrir el fichero en modo lectura.
Mientras no se alcance el final del fichero:
    Leer un carácter.
    Mostrar el carácter.
Cerrar el fichero.

*/

// Abrir el fichero en modo lectura
$archivo = fopen("letras.txt", "r") or die("No se puede abrir el archivo");

// Mientras no se alcance el final del fichero:
while (!feof($archivo)) {
    // Leer un carácter.
    $caracter = fgetc($archivo);
    // Mostrar el carácter.
    echo $caracter;
}

// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
