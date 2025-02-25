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

Ejercicio 4: Contar el número de caracteres de un fichero
Leer un fichero ("texto.txt") y contar el número de caracteres usando fread() y filesize().

Pseudocódigo:
Obtener el tamaño del fichero.
Abrir el fichero en modo lectura.
Leer el contenido completo.
Contar el número de caracteres.
Mostrar el resultado.
Cerrar el fichero.

*/

// Obtener el tamaño del fichero.
$tamano = filesize("texto.txt");

// Abrir el fichero en modo lectura.
$archivo = fopen("texto.txt", "r") or die("No se puede abrir el archivo");

// Leer el contenido completo.
$contenido = fread($archivo, $tamano);

// Contar el número de caracteres.
$num_caracteres = strlen($contenido);

// Mostrar el resultado.
echo "El fichero tiene $num_caracteres caracteres.";

// Cerrar el fichero.
fclose($archivo);

?>

</body>
</html>
