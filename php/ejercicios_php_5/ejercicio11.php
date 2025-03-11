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
$_SESSION['rol'] = "usuario";
$_SESSION['rol'] = "admin";
echo "Rol actual: " . $_SESSION['rol'];

?>

</body>
</html>
