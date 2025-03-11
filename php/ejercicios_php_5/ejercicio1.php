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

if (!headers_sent()) {
    setcookie("usuario", "Juan", time() + 3600);
}

if (isset($_COOKIE['usuario'])) {
    echo "Valor de la cookie: " . $_COOKIE['usuario'];
} else {
    echo "Cookie no encontrada";
}
?>


</body>
</html>
