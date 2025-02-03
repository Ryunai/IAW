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
#### Ejercicio 7: Unir arrays
**Pseudocódigo:**
1. Crear dos arrays con números.
2. Usar `array_merge` para unirlos en un solo array.
3. Mostrar el array resultante.
*/

// Creamos dos arrays con números
//
$primerArray = array(1, 3, 5, 7, 9);
$segundoArray = array(2, 4, 6, 8, 10);

// Usamos array_merge unir los dos arrays con numeros
//
$resultado = array_merge($primerArray, $segundoArray);

// Mostramos el resultado
//
echo "Elementos de ambos arrays unidos con array_merge: ";
print_r($resultado);

?>

</body>
</html>
