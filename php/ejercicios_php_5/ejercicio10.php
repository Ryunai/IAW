<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 5 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

session_start();
if (isset($_SESSION['nombre'])) {
    echo "Nombre: " . $_SESSION['nombre'];
} else {
    echo "No existe la variable de sesión";
}

?>

</body>
</html>
