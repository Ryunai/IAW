<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicios PHP 2 </title>
</head>

<body>

<?php

/*	Autor: Anxo Garrote
	2ASIR - Implantacion de Aplicaciones Web
	Curso 2024 - 2025
*/

	// Usar un array de nombres y un bucle foreach para saludar a cada persona.
	//
	$nombres=array("Juan", "Ana", "Pedro", "Luis", "Maria", "Carmen", "Carlos");	// Array de nombres

	// Bucle foreach para saludar a cada persona
	//
	foreach ($nombres as $nombre) {
		echo "Hola ".$nombre."<br>";	// Saludar a la persona actual
	}


?>

</body>
</html>
