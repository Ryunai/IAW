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

/*
#### Ejercicio 3: Función con un valor por defecto
**Pseudocódigo:**
1. Crear una función `saludarConDefecto` que reciba un nombre y un saludo opcional (valor por defecto: "Hola").
2. La función debe devolver el saludo y el nombre.
3. Llama a la función con y sin especificar el saludo.
*/

function saludarConDefecto($nombre, $saludo = "Hola"){
	return "$saludo $nombre";
}

// Llamamos a la función saludarConDefecto con el nombre "Anxo" y mostramos el resultado
//
echo saludarConDefecto("Anxo")."<br>";

?>

</body>
</html>
