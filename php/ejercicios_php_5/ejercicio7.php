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

setcookie("ruta", "valor", time() + 3600, "/ruta/", "localhost", false, true);
echo "Cookie creada con dominio: localhost y ruta: /ruta/";

?>

</body>
</html>
