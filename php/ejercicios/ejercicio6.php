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

	// Crea un array asociativo que contenga tres claves: nombre, edad y ciudad, muestra sus valores
	// 

	$datos = ["nombre"=>"Ryunai","edad"=>52378,"ciudad"=>"Denia"];
	
	// Mostramos sus valores
	//
	echo "Su nombre es: ".$datos["nombre"]."<br>";
	echo "Su edad es de: ".$datos["edad"]." años"."<br>";
	echo "Su ubicacion actual estimada es: ".$datos["ciudad"]."<br>"."<br>"."<br>";

	// Para ver todos los datos de un array
	//
	var_dump($datos);

?>

</body>
</html>
