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

Ejercicio 15: Cambiar directorio y listar archivos
Cambiar el directorio actual a uno especificado y listar los ficheros existentes en él.

Pseudocódigo:
Cambiar el directorio de trabajo.
Obtener y mostrar el directorio actual.
Listar los archivos y carpetas con scandir.
Mostrar cada elemento.

*/

// Cambiar el directorio de trabajo.
chdir('../');
// Obtener y mostrar el directorio actual.
$directorio = getcwd();
echo "<h2>Contenido de la carpeta $directorio:</h2>";
// Listar los archivos y carpetas con scandir.
$lista = scandir($directorio);
echo "<ul>";
// Mostrar cada elemento.
foreach ($lista as $elemento) {
	echo "<li>$elemento</li>";
}
echo "</ul>";

?>

</body>
</html>
