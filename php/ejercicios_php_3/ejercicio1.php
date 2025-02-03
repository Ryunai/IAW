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

/*
#### Ejercicio 1: Función para saludar
**Pseudocódigo:**
1. Crear una función `saludar` que reciba un nombre como parámetro.
2. La función debe devolver un saludo con ese nombre.
3. Llama a la función con un nombre y muestra el resultado.
*/

function saludar($nombre){
	return "Hola $nombre";
}

// Llamamos a la función saludar con el nombre "Anxo" y mostramos el resultado
//
echo saludar("Anxo")."<br>";

?>

</body>
</html>
