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

$visitas = isset($_COOKIE['visitas']) ? (int)$_COOKIE['visitas'] + 1 : 1;
setcookie("visitas", $visitas, time() + 86400);

echo "Visitas: $visitas";

?>

</body>
</html>
