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

if (!isset($_COOKIE['tema'])) {
    setcookie("tema", "oscuro", time() + 3600);
}

echo "Valor del tema: " . ($_COOKIE['tema'] ?? 'oscuro (recién establecido)');

?>

</body>
</html>
