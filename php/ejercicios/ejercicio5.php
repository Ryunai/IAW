<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 1 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

	// Crea un array con los nombres de tres frutas y muestra cada fruta en una linea diferente
	// 
	echo "Dentro del array existen: "."<br>";
	$frutas = array("Nisperos","Pomelos","Granadas");
	foreach ($frutas as $fruta) {
		echo $fruta."<br>";
	}

?>

</body>
</html>
