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

// Primera creación
setcookie("idioma", "ingles", time() + 3600);
// Modificación
setcookie("idioma", "español", time() + 3600);

echo "Idioma actual: " . $_COOKIE['idioma'] ?? 'Cookie no establecida';

?>

</body>
</html>
