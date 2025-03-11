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
*/

session_start();
$_SESSION['nombre'] = "Maria";
echo "Variable de sesión 'nombre' guardada";

?>

</body>
</html>
