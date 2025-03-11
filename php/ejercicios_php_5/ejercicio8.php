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

echo "<h3>Cookies almacenadas:</h3>";
foreach ($_COOKIE as $nombre => $valor) {
    echo "$nombre: $valor <br>";
}

?>

</body>
</html>
