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
#### Ejercicio 5: Función recursiva para calcular el factorial
**Pseudocódigo:**
1. Crear una función `factorial` que reciba un número.
2. Si el número es ≤ 1, devolver 1 (caso base).
3. Si no, devolver el número multiplicado por el factorial del número - 1.
4. Llama a la función con un número y muestra el resultado.
*/

// Función recursiva que calcula el factorial de un número
//
function factorial($numero){
	if($numero <= 1){
		return 1;
	}
	else{
		return $numero * factorial($numero - 1);
	}
}

// Llamamos a la función con el número 5
//
echo "El factorial de 5 es: " . factorial(5);

?>

</body>
</html>
