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

Ejercicio 13: Comprobar si un fichero existe y actuar en consecuencia
Verificar si un fichero ("config.txt") existe; si es así, leerlo, de lo contrario crearlo con contenido por defecto.

Pseudocódigo:
Si el fichero existe:
    Leer y mostrar el contenido.
Sino:
    Crear el fichero y escribir contenido por defecto.

*/

// Definir el nombre del fichero.
$nombre_fichero = "config.txt";

// Si el fichero existe:
if (file_exists($nombre_fichero)) {
    // Leer y mostrar el contenido.
    $contenido = file_get_contents($nombre_fichero);
    echo $contenido;
} else {
    // Crear el fichero y escribir contenido por defecto.
    $archivo = fopen($nombre_fichero, "w") or die("No se puede abrir el archivo");
    $cadena = "Configuración por defecto";
    fwrite($archivo, $cadena);
    fflush($archivo);
    fclose($archivo);
}

?>

</body>
</html>
