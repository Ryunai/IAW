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
#### Ejercicio 2: Función para calcular el doble de un número
**Pseudocódigo:**
1. Crear una función `doble` que reciba un número como parámetro.
2. La función debe devolver el doble de ese número.
3. Llama a la función con un número y muestra el resultado.
*/

function doble($numero){
	return $numero * 2;
}

// Llamamos a la función doble con el número 5 y mostramos el resultado
//
echo doble(5)."<br>";

?>

</body>
</html>
