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
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
echo "Visitas en esta sesión: " . $_SESSION['contador'];

?>

</body>
</html>
