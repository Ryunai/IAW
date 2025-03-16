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

Ejercicio 5: Listar el contenido de un directorio
Cambiar el directorio actual a una carpeta determinada y listar todos los ficheros usando chdir(), getcwd() y scandir().

Pseudocódigo:
Cambiar el directorio de trabajo a la carpeta especificada.
Obtener el directorio actual.
Listar los archivos y directorios con scandir.
Mostrar la lista.

*/

// Cambiar el directorio de trabajo a la carpeta especificada.
chdir("C:/xampp/htdocs/php/ejercicios_php_4");
// Obtener el directorio actual.
$directorio = getcwd();
// Listar los archivos y directorios con scandir.
$lista = scandir($directorio);
// Mostrar la lista.
echo "<h2>Contenido de la carpeta $directorio:</h2>";
echo "<ul>";
foreach ($lista as $elemento) {
	echo "<li>$elemento</li>";
}
echo "</ul>";

?>

</body>
</html>
